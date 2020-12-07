<?php

$link = mysqli_connect("localhost", "root", "", "disease");


 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$stid=intval($_GET['stid']);




$sql="DELETE FROM disease_tb WHERE id=$stid ";

if(mysqli_query($link, $sql)){
    echo "Selected disease were deleted successfully.";

    header("refresh:1;url=show_disease.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>