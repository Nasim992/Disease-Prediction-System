<?php
session_start();
error_reporting(0);  
include('link/config.php');
 
if(isset($_POST['submit']))
{
    
$experience=$_POST['experience']; 
$comments=$_POST['comments'];
$name=$_POST['name'];
$email=$_POST['email'];
// $mainresults=$_POST['res'];

$sql="INSERT INTO  user_result(experience,comments,name,email) VALUES(:experience,:comments,:name,:email)";
$query = $dbh->prepare($sql);
$query->bindParam(':experience',$experience,PDO::PARAM_STR);
$query->bindParam(':comments',$comments,PDO::PARAM_STR);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
// $query->bindParam(':mainresults',$mainresults,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId(); 
if($lastInsertId)
{
    echo "<script>alert('Feedback Form Submitted Successfully. Thank you For being with us');</script>";
    header('Refresh: 0;url=index.php');
}
else 
{
    echo "<script>alert('Error ! Something went wrong');</script>";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Feedback Form</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <link rel="stylesheet" href="css/form-content.css" media="screen" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="css/form.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <script src="js/form.js"></script>
        <style>
        button{
            background-color:black;
            color:black;
        }
        </style>

    </head>
    <body >
        <div class="main-wrapper">
         

        
        <div class="container">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>FEEDBACK FORM</h2> 
                    <p> Please provide your feedback below: </p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="experience" value="bad" required>
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="experience" value="average" required>
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="experience" value="good" required>
                                        Good 
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Messages:</label>
                                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit"  name="submit" id="submit" class="btn btn-lg btn-warning btn-block result-color1" >SEND</button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry, there was an error sending your form. </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
<script>
$(document).ready(function(){
    $('#submit').click(function()){
        var experience=$('#experience').val();
        var comments=$('#comments').val();
        var name=$('#name').val();
        var email=$('#email').val();

        if(name=='' || comments == '' || experience =='' || email == '')
        {
              $('#error_message').html("All Fields are required");

        }
        else 
        {
            $('#error_message').html('');
            $.ajax({
                url:"feedback.php",
                method:"POST",
                data:{experience:experience,comments:comments,name:name,email:email},
                success:function(data){
                    $("form").trigger("reset");
                    $('#success_message').fadeIn().html(data);
                }
            });
        }
    }
})
</script>
