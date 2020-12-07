<?php
session_start();
error_reporting(0);
include('link/config.php');
if($_SESSION['alogin']!=''){ 
$_SESSION['alogin']='';
} 
if(isset($_POST['login']))  
{
$uname=$_POST['uname'];
$_SESSION["username"]=$_POST['uname'];
$password=md5($_POST['pass']);
$sql ="SELECT user_name,password FROM user WHERE user_name=:uname and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute(); 
$results=$query->fetchAll(PDO::FETCH_OBJ);  
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['uname'];
echo "<script>alert('Logged in Success');</script>";
echo "<script type='text/javascript'> document.location = 'user_interface.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";
    $_SESSION["login_attempts"]+=1;
    $_SESSION["error"]="Password doesn't match"; 
}

}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login.css">
<style>
/* Set a style for all buttons */
.button-login {
  background: #499bea;
    background: -moz-linear-gradient(top, #499bea 33%, #207ce5 67%);
    background: -webkit-linear-gradient(top, #499bea 33%,#207ce5 67%);
    background: linear-gradient(to bottom, #499bea 33%,#207ce5 67%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499bea', endColorstr='#207ce5',GradientType=0 );
    border-radius: 25px;
    transition: 0.5s;
    color: white;
}

.button-login:hover {
  background: #29b8e5;
    background: -moz-linear-gradient(top, #29b8e5 50%, #bce0ee 90%);
    background: -webkit-linear-gradient(top, #29b8e5 50%,#bce0ee 90%);
    background: linear-gradient(to bottom, #29b8e5 50%,#bce0ee 90%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#29b8e5', endColorstr='#bce0ee',GradientType=0 );
    color: white;
    border-radius: 25px;
}
.cancelbtn
{
border-radius:25px;
}
.cancelbtn:hover{
  background-color:red;
}
h4{
  text-align:center;
  font-weight:900;
  /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#1e5799+0,2989d8+41,207cca+54,7db9e8+81 */
color: #1e5799; /* Old browsers */
color: -moz-linear-gradient(top,  #1e5799 0%, #2989d8 41%, #207cca 54%, #7db9e8 81%); /* FF3.6-15 */
color: -webkit-linear-gradient(top,  #1e5799 0%,#2989d8 41%,#207cca 54%,#7db9e8 81%); /* Chrome10-25,Safari5.1-6 */
color: linear-gradient(to bottom,  #1e5799 0%,#2989d8 41%,#207cca 54%,#7db9e8 81%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */

}
</style>
</head>
<body class="body-login">

<div id="1111111111" class="modal">
  
<form class="modal-content animate"  method="post">

<h4>LOGIN FORM</h4>
<?php if(isset($_SESSION["error"]))
{
?>
<?php unset($SESSION["error"]); } ?>
  <div class="container-login">
    <label for="uname"><b>Username</b></label>
    <input type="text" name="uname" class="form-control" id="inputEmail3" placeholder="UserName" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password"required>
     <?php 
      if($SESSION["login_attempts"]> 2)
      {
        $_SESSION["locked"]=time();
        echo "<p>Wait 5 seconds</p>";
      }
      else 
      {
     ?>
    <label>
    <button type="submit" name="login" class="button-login">Log in<span class="btn-label btn-label-right result-color1"></span></button>
    </label>
  </div>
<?php } ?>
  <div class="container-login" style="background-color:#f1f1f1">
  <button type="button" onclick="document.getElementById('1111111111').style.display='none'" class="cancelbtn">Cancel</button>
    <!-- <span class="psw">Forgot <a href="change-password.php">password?</a></span> -->
  </div>
</form>
</div>

 <!-- <script>
// Get the modal
var modal = document.getElementById('1111111111');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>  -->

</body>
</html>
