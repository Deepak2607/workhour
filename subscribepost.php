<?php
include 'connect.php';
$email=$_POST['subscribe_email'];
$db=new PDO("mysql:host=localhost;dbname=workhour","root","");
if($db)
{

    $sql = "INSERT INTO 
                        subscribe(subscribe_email)
                    VALUES(?)";
    $test=$db->prepare($sql);
    $test->bindParam(1,$email);
    if($test->execute())
    {
        header("location:home.php");
    }
    else
    {
        echo "error";
    }
}
else
    echo "error";

?>