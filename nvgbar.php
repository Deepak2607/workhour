<!DOCTYPE html>
<html>

<head>

    <title>

    </title>



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <head>




<body>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WorkHour</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li >
                    <a href="forumhome.php">Forum </a>


                <li><a href="#contact1">Contact</a></li>
                <li><a href="rate.php">Rating</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                include 'connect.php';
                session_start();
                if($_SESSION['signed_in']==true)
                {
                    $name=$_SESSION['username'];
                }

                ?>
                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span><?php echo "$name"; ?></a></li>
                <li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>





</body>
















</html>
