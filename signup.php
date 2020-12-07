<?php 
session_start();  

include('link/config.php'); 
 
if(isset($_POST['submit']))
{ 
  $username=$_POST['uname'];
  $password=md5($_POST["pass"]); 
  $email=$_POST['email'];
  $sql="INSERT INTO  user(user_name,password,contact) VALUES(:username,:password,:email)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':username',$username,PDO::PARAM_STR);
  $query->bindParam(':password',$password,PDO::PARAM_STR);
  $query->bindParam(':email',$email,PDO::PARAM_STR);
   $query->execute();
// $results=$query->fetchAll(PDO::FETCH_OBJ);
// $lastInsertId = $dbh->lastInsertId();
// if($lastInsertId)
// {
// echo "<script>alert('Signed Up Success');</script>";
// header("refresh:0;url=intro.php");
// } else{
    
//     echo "<script>alert('Something went wrong .Please Try Again .May be your Username Matches with Others');</script>";
//     header("refresh:0;url=intro.php");

// }
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{

  echo "<script>alert('Signed Up Success');</script>";
echo "<script type='text/javascript'> document.location = 'intro.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details !Something went wrong .Please Try Again .May be your Username Matches with Others');</script>";
    header("refresh:0;url=intro.php");

}
 

}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login.css">

<style>
h3{
  text-align:center;
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

 
<div id="0303" class="modal">
  
<form class="modal-content animate"  method="post">
  <h3>REGISTRATION FORM</h3>

  <div class="container-login">
    <label for="uname"><b>Username</b></label>
    <input type="text" name="uname" class="form-control" id="inputEmail3" placeholder="UserName" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" name="pass" class="form-control" id="inputPassword3"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password"required>
 
     
    <label for="uname"><b>Email</b></label>
    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>

    <label>
    <button type="submit" name="submit" class="button-login">Sign up<span class="btn-label btn-label-right"></button>
    </label>
  </div>

  <div class="container-login" style="background-color:#f1f1f1">
  <button type="button" onclick="document.getElementById('0303').style.display='none'" class="cancelbtn">Cancel</button>
  <!-- <button type="button"onclick="document.getElementById('0303').style.display='block'" style="width:auto;"><a>Login as user</a></button> -->
  <!-- <span class="psw">Forgot <a href="change-password.php">password?</a></span> -->
  </div>
</form>
</div>

 <script>
// Get the modal
var modal = document.getElementById('0303');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 

</body>
</html>
