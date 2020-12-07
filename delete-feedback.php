<?php

$link = mysqli_connect("localhost", "root", "", "disease");


 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$stid=intval($_GET['stid']);




$sql="DELETE  FROM user_result WHERE id=$stid ";

if(mysqli_query($link, $sql)){
    echo "User's Feedback Deleted Successfully";

    header("refresh:1;url=show-feedback.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>