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
<div style="border:1px solid black; width:42%; height:200px; border-radius:10px; position:fixed; top:85px; right:32px; border-width:2px;">
    <div style="background-color:#f2f2f2; height: 29px; border-radius:10px 10px 0 0;"><p align="center" style="text-align:center; margin-left:180px; margin-top:3px; font-weight:bold; font-size:25px;">Latest Discussions....</p></div>
    <hr style="width:2px;">
    <?php
    $query=mysqli_query($connection,"SELECT * FROM topics ORDER BY topic_id DESC LIMIT 3");
    while($row = mysqli_fetch_array($query))
    {
        $topic=$row['topic_title'];
        $id=$row['topic_id'];
        // echo "<p>$topic</p><br>";
        echo "<p ><a href='topic.php?posts_topic=$id'  style='text-decoration:none; color:black; font-size:22px; font-weight:black; margin-left: 20px; '>
   ".$topic." </a><br><br>";
    }

    ?>
</div>

<?php
include 'connect.php';
$topicid=$_GET['posts_topic'];
$query = mysqli_query($connection,"SELECT * FROM topics WHERE topic_id='$topicid'");
if(!$query)
{
    echo 'error';
}
else
{
    while($row = mysqli_fetch_array($query))
    {
        $name=$row['topic_title'];
        $date=$row['topic_date'];
        $date2=date('d-m-Y', strtotime($date));
        $by=$row['topic_by'];
        $query4=mysqli_query($connection,"SELECT username FROM users WHERE id='$by'");
        $row4= mysqli_fetch_array($query4);
        $username=$row4['username'];
        echo "<div class='heading' style='background-color:#f2f2f2;
  width:51.5%; margin-left:15px'><h1 style='text-align:left; color:black; font-size: 30px;'> &nbsp&nbsp$name</h1>
  <br><br>
  <p style='font-size:15px; font-weight:bold;'>&nbsp&nbsp&nbsp &nbspAsked by:</p> <p style='font-size:15px; font-weight:bold; color:blue;'>$username</p>&nbsp&nbsp&nbsp&nbsp <p style='font-size:15px; font-weight:bold;'>On:</p> <p style='font-size:15px; font-weight:bold; color:blue;'>$date2</p>";

    }
}

$query2 = mysqli_query($connection,"SELECT * FROM posts WHERE posts_topic='$topicid' ORDER BY posts_date ASC");
$numrows = mysql_num_rows($query2);
echo "<br><p style='font-size:21px; font-weight:bold; color:black;'>&nbsp&nbsp&nbsp$numrows Replies</p><br><br><br>";
if(!$query2)
{
    echo 'error';
}
else
{
    while($row2= mysqli_fetch_array($query2))
    {
        echo"<hr style='width:51.5%; float:left; size:2px; margin-left:0px'><br><br>";
        $content=$row2['posts_content'];
        $date=$row2['posts_date'];
        $by=$row2['posts_by'];

        $query3=mysqli_query($connection,"SELECT username FROM users WHERE id='$by'");
        $row3= mysqli_fetch_array($query3);
        $name=$row3['username'];

        echo "<div class='divigr'><br><br>";
        echo "<p style='color:black; font-size:20px; margin-left:15px'> $name<p><br><br>";
        echo "<p style='font-size:20px;font-color:silver; font-weight:bold; margin-left:15px'> $content<p><br><br><p style='font-size:15px; font-weight:bold; margin-left:15px'> replied on:</p> ";
        echo date('d-m-Y', strtotime($date));
        echo "<br>";
        echo "</div>";
    }
}
<br><br><br>
include 'footer.php';
?>