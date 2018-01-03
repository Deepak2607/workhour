<?php
include 'connect.php';
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=sha1($_POST['password']);
$contact=$_POST['contact'];

$db=new PDO("mysql:host=localhost;dbname=workhour","root","");
if($db)
{
    $sql = "INSERT INTO
                    user(name,username,email,password,contact)
                VALUES(?,?,?,?,?)";
    $test=$db->prepare($sql);
    $test->bindParam(1,$name);
    $test->bindParam(2,$username);
    $test->bindParam(3,$email);
    $test->bindParam(4,$password);
    $test->bindParam(5,$contact);
    if($test->execute())
    {
        header("location:index.php");
    }

    else
        echo 'Something went wrong while registering. Please try again later.';
}
else
{
    echo 'Something went wrong while registering. Please try again later.';

}
?>