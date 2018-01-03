<?php
session_start();
$work_user=$_SESSION['id'];
$work_name=$_POST['work_name'];
$work_state=$_POST['work_state'];
$work_exp=$_POST['work_exp'];
$workload=$_POST['workload'];
$environment=$_POST['environment'];
$satisfaction=$_POST['satisfaction'];
$recommend=$_POST['recommend'];
$org_total=$environment+$satisfaction+$workload;
$db=new PDO("mysql:host=localhost;dbname=workhour","root","");
//enter details in workplace table
if($db)
{
    $sql = "INSERT INTO
                    workplace(work_name,work_state,work_exp,work_user,workload,environment,satisfaction,recommend)
                VALUES(?,?,?,?,?,?,?,?)";
    $test=$db->prepare($sql);
    $test->bindParam(1,$work_name);
    $test->bindParam(2,$work_state);
    $test->bindParam(3,$work_exp);
    $test->bindParam(4,$work_exp);
    $test->bindParam(5,$workload);
    $test->bindParam(6,$environment);
    $test->bindParam(7,$satisfaction);
    $test->bindParam(8,$recommend);
    $test->bindParam();
    if($test->execute())
    {
        1;
        //header("location:index.php");
    }

    else
        echo 'Something went wrong. Please try again later.';
}
else
{
    echo 'Something went wrong. Please try again later.';

}

//check whether the work_name already exist or not
$query = mysqli_query($connection,"SELECT * FROM organization WHERE org_name='$work_name'");
$numrows = mysql_num_rows($query);
//if not then create new organization
if($numrows==0)
{
    if($db)
    {
        $sql = "INSERT INTO
                    organization(org_name,org_state,org_rcmd,org_load,org_env,org_stf,org_total)
                VALUES(?,?,?,?,?,?)";
        $test=$db->prepare($sql);
        $test->bindParam(1,$work_name);
        $test->bindParam(2,$work_state);
        $test->bindParam(3,$recommend);
        $test->bindParam(4,$workload);
        $test->bindParam(5,$environment);
        $test->bindParam(6,$satisfaction);
        $test->bindParam(7,$org_total);
        if($test->execute())
        {

            header("location:thank.php");
        }

        else
            echo 'Something went wrong. Please try again later.';
    }
    else
    {
        echo 'Something went wrong. Please try again later.';

    }
}
//if exist then update the value of qualities
else
{
    $query2=mysqli_query($connection,"SELECT * FROM organization WHERE org_name='$work_name'");
    $row2= mysqli_fetch_array($query2);
    $a=$row2['org_load'];
    $b=$row2['org_env'];
    $c=$row2['org_stf'];
    $r=$row2['org_rcmd'];
    $t=$row2['org_total'];
    $aa=$a+$workload;
    $bb=$b+$environment;
    $cc=$c+$satisfaction;
    $rr=$r+$recommend;
    $tt=$t+$org_total;
    //updating
    if($db)
    {
        $sql = "UPDATE organization 
            SET org_load = :org_load, 
            org_env = :org_env, 
            org_rcmd = :org_rcmd,  
            org_stf = :org_stf  
            org_total = :org_total
            WHERE org_name = :work_name";
        $test = $db->prepare($sql);
        $test->bindValue(':org_load', $aa, PDO::PARAM_STR);
        $test->bindValue(':org_env', $bb, PDO::PARAM_STR);
        $test->bindValue(':org_rcmd', $rr, PDO::PARAM_STR);
        $test->bindValue(':org_stf', $cc, PDO::PARAM_STR);
        $test->bindValue(':org_name', $work_name, PDO::PARAM_STR);
        $test->bindValue(':org_total', $tt, PDO::PARAM_STR);
        if($test->execute())
            header("location:thank.php");
        else
            echo 'Something went wrong. Please try again later.1 ';
        print_r($test->errorInfo());
    }
    else
    {
        echo 'Something went wrong. Please try again later.2';

    }
}


?>