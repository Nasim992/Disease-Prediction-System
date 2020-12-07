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
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute(); 
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['uname'];
echo "<script>alert('Logged in Success');</script>";
echo "<script type='text/javascript'> document.location = 'admin_edit_choice.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";
    header("refresh:0;url=index.php");

}

}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/login.css">

</head>
<body class="body-login">

<div id="id01" class="modal">
  
<form class="modal-content animate"  method="post">


  <div class="container-login">
    <label for="uname"><b>Username</b></label>
    <input type="text" name="uname" class="form-control" id="inputEmail3" placeholder="UserName" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password"required>

    <label>
    <button type="submit" name="login" class="button-login">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
    </label>
  </div>

  <div class="container-login" style="background-color:#f1f1f1">
  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    <!-- <span class="psw">Forgot <a href="change-password.php">password?</a></span> -->
  </div>
</form>
</div>

 <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 

</body>
</html>
