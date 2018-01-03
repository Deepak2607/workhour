<!DOCTYPE html>
<html>

<head>

    <title>
        User profile | WorkHour
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(images/bg3.jpg)">
<?php
include 'connect.php';
include 'nvgbar.php';
$id=$_SESSION['id'];
$query = mysqli_query($connection,"SELECT * FROM user WHERE id='$id'");
while($row = mysqli_fetch_array($query)) {
    $name = $row['name'];
    $email = $row['email'];
    $username = $row['username'];
    $contact = $row['contact'];
}
$query1 = mysqli_query($connection,"SELECT * FROM workplace WHERE work_user='$id'");
while($row1 = mysqli_fetch_array($query1)){
    $work=$row1['work_name'];
    $exp=$row1['work_exp'];
}

?>

<div class="container">

    <div class="row">

        <div class="col-sm-6" style="margin-top:10px">


            <img src="images/user.jpg" style="width:38%;border-radius: 50%" >

            <h4 style="margin-left: 20px"><span style="font-size: 24px">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo $name; ?></h4>
            <h4 style="margin-left: 20px"><span style="font-size: 24px">Userame:&nbsp;</span><?php echo $username; ?></h4>
            <h4 style="margin-left: 20px"><span style="font-size: 24px">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ensp;</span><?php echo $email; ?></h4>
            <h4 style="margin-left: 20px"><span style="font-size: 24px">Contact:&nbsp;&nbsp;&ensp;</span><?php echo $contact; ?></h4>

        </div>
        <div class="col-sm-6">

            <h4 style="margin-left: 20px;margin-top:42%"><span style="font-size: 22px">Workplace: &nbsp;</span><?php echo $work; ?></h4>
            <h4 style="margin-left: 20px"><span style="font-size: 22px">Experience:&nbsp;</span><?php echo $exp; ?></h4>
        </div>
    </div>
    <br>
    <br><br>
</div>
<?php
include 'footer.php';
?>
</body>
</html>