<!DOCTYPE html>
<html>

<head>

    <title>
        workhour

    </title>



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        function validatePost() {
            var x = document.forms["myForm"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
        }
    </script>
</head>






<body style="background-image:url(images/workhour.jpg);background-size:100%">



<div class="container" style="background-color:grey;width: 100%">
    <div class="row">
        <div class="col-md-6">

            <h1 style="font-weight: bold;font-size:35px">Workhour</h1>

        </div>




        <div class="col-md-6" style="margin-top: 20px">
            <form class="form-inline" action="signinpost.php" method="post">
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="pwd"></label>
                    <input type="password" class="form-control" name="password" id="pwd" placeholder="Password">

                    <button type="submit" class="btn btn-default"  style="margin-left: 20px">LogIn</button>
                </div>

            </form>
        </div>
    </div>
</div>




<form name="myForm" onsubmit="return validatePost()" method="post" action="signuppost.php" style="background-color:rgb(224, 224, 209);width: 30%;margin-top:6%;margin-left: 35%;border: 1px solid grey;border-radius:5px;padding:5px">



    <div class="form-group" style="padding-left:10px;padding-right:10px;" >

        <label for="Name">Name:</label>
        <input type="Name" name="name" class="form-control" id="Name" placeholder=" Name" required>

    </div>



    <div class="form-group" style="padding-left:10px;padding-right:10px;">

        <label for="Username">Username:</label>
        <input type="Username" name="username" class="form-control" id="Username" placeholder=" Username" required>

    </div>





    <div class="form-group" style="padding-left:10px;padding-right:10px;">

        <label for="Email">Email:</label>
        <input type="Email" name="email" class="form-control" id="Email" placeholder="Email" required>

    </div>





    <div class="form-group" style="padding-left:10px;padding-right:10px;">

        <label for="Contact">Contact:</label>
        <input type="Contact" name="contact" class="form-control" id="Contact" placeholder="Contact" required>

    </div>




    <div class="form-group" style="padding-left:10px;padding-right:10px;">

        <label for="pwd">Password:</label>

        <input type="Password" name="password" class="form-control" id="Password" placeholder="Password" required>

    </div>



    <button style="margin-left:10px"  type="submit" class="btn btn-default" >Submit</button>



</form>

<br>
<br><br>


<?php
include 'footer.php';
?>

</body>
</html>
