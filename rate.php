<!DOCTYPE html>
<html>

<head>

    <title>
        workHour | Rate your workplace

    </title>






    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<?php
include 'nvgbar.php';
?>

<body style="background-image:url(images/bg2.jpg);background-size: 100%">





<div class="container">


    <form>

        <div class="row" style="margin-top: 5%">

            <div class="col-sm-6">



                <div class="form-group">

                    <label for="Name" style="font-size:25px;font-weight:bold">Workplace name:</label>
                    <input  class="form-control" id="Name" placeholder="workplace name">

                </div>



                <div class="form-group">

                    <label for="location"  style="font-size:25px;font-weight:bold">Location:</label>
                    <input  class="form-control" id="location" placeholder="location">

                </div>





                <div class="form-group">

                    <label for="years"  style="font-size:25px;font-weight:bold">Your experience(in years):</label>
                    <input  class="form-control" id="years" placeholder="years">

                </div>





                <h3  style="font-size:25px;font-weight:bold">Rate your company(out of 10)</h3>







                <div class="form-group">

                    <label for="workload" style="font-size:15px;font-weight:bold">Workload:</label>
                    <input  class="form-control" id="workload" placeholder="workload">

                </div>



                <div class="form-group">

                    <label for="Working environment"  style="font-size:15px;font-weight:bold">Working environment:</label>
                    <input  class="form-control" id="Working environment" placeholder="Working environment">

                </div>





                <div class="form-group">

                    <label for="Satisfaction"  style="font-size:15px;font-weight:bold">Satisfaction:</label>
                    <input  class="form-control" id="Satisfaction" placeholder="Satisfaction">

                </div>








            </div>



            <div class="col-sm-6">



                <p  style="font-size:25px;font-weight:bold">would you prefer others to join this company?</p>



                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="radio">
                            <label style="font-weight: bold"><input type="radio" >Yes</label>
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="radio">
                            <label style="font-weight: bold"><input type="radio" >No</label>
                        </div>
                    </div>
                </div>

                <div>
                    <p style="font-size:25px;font-weight:bold">Any comment(optional)</p>
                    <textarea></textarea>
                </div>



                <button type="submit" class="btn btn-primary" style="margin-left:50%;margin-top: 2%">Submit</button>

            </div>
        </div>

    </form>
</div>
<br><br><br>
<?php
include 'footer.php';
?>
</body>
</html>
