<!DOCTYPE html>
<html>

<head>

    <title>
        footer

    </title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        function validatePost() {
            var x = document.forms["myForm"]["subscribe_email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
        }
    </script>
    <head>






<body id="contact1">


<div class="conainer" style="background-color:black;color:white">

    <div class="row">

        <div class="col-md-6" >

            <div style="margin:15px">
                <h2>Reach us at:</h2>
                <p><span style="font-size: 18px"> Mob.</span>:<span style="font-size: 15px">7441183308</span>  </p>
                <p><span style="font-size: 18px"> Adress</span>:<span style="font-size: 15px"> Room no.152,BH2<br>ABV-IIITM Gwalior,474001</span> </p>
            </div>
        </div>


        <div class="col-md-6">


            <div style="margin:30px">
<form method="post" action="subscribepost.php" name="myForm" onsubmit="return validatePost()">
                <div class="form-group" style="padding-left:10px;padding-right:10px;" >

                    <input  class="form-control"  placeholder="Subscribe" name="Subscribe_email" required>

                </div>

                <button style="margin-left:10px" type="submit" class="btn btn-success">Subscribe</button>

</form>
            </div>

            <p style="margin-left: 37px;margin-top:-20px;font-size: 20px">Subcribe us for newsletter</p>

        </div>
    </div>
</div>
</body>
</html>