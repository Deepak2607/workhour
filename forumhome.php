<html>
<head>
    <title>
        workhour | Discussion forum
    </title>
</head>
<body>
<?php
include 'connect.php';
include 'nvgbar.php';
?>
<img src="images/forum.jpg" style="width:100%;height:50%">
<div>
    <h1 style="font-size:35px; text-align:center;">Discussion Forum</h1>
</div>
<form>
<input  placeholder="Ask a question" name="topic_title" style="width:70%; height:7%; margin:2%; border:2px solid black; border-radius: 2px;">
</form>
<?php
$query=mysqli_query($connection,"SELECT * FROM topic ORDER BY topic_id");
while($row = mysqli_fetch_array($query))
{
    $topic=$row['topic_subject'];
    $id=$row['topic_id'];
    $by=$row['topic_by'];
    $query1=mysqli_query($connection,"SELECT username FROM topics WHERE id='$by'");
    $row1 = mysqli_fetch_array($query1);
    $user=$row1['username'];
    // echo "<p>$topic</p><br>";
    echo "<br><p ><a href='topic.php?posts_topic=$id'  style='text-decoration:none; color:black; font-size:24px; font-weight:bold; margin-left: 20px; '>&nbsp&nbsp&nbsp
   ".$topic." </a></p><br><br><p style='color:black; font-size:25px; font-weight:bold; margin-left: 50px;'>by</p><p style='text-decoration:none; color:blue; font-size:14px; font-weight:bold; margin-left: 0px; '> $user</p><br><br><br><hr style='color:powderblue;'>";
}

?>
<br>
<br>
<h1 style="font-size:30px; text-align:center;">Latest Questions</h1>
<br>
<br>
<?php

include 'connect.php';
$query=mysqli_query($connection,"SELECT * FROM topics ORDER BY topic_id DESC LIMIT 3");
while($row = mysqli_fetch_array($query))
{
    $topic=$row['topic_title'];
    $id=$row['topic_id'];
    // echo "<p>$topic</p><br>";
    echo "<br><p ><a href='topic.php?posts_topic=$id'  style='text-decoration:none; color:black; font-size:32px; font-weight:bold; margin-left: 20px; '>&nbsp&nbsp&nbsp
   ".$topic." </a></p>";
   }

?>

<br><br><br>
<?php
include 'footer.php';
?>
</body>
</html>