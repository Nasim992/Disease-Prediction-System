
<?php
include('link/config.php');

$ed12=$_POST['var1'];
$ed13=$_POST['var2'];
$ed14=$_POST['var3'];
$ed15=$_POST['var4'];
$ed16=$_POST['var5'];
$ed17=$_POST['var6'];
$ed18=$_POST['var7'];



if(($_POST[1])=="Yes")
{
 $ed12++;
}
if(($_POST[2])=="Yes")
{
 $ed13++;
}
if(($_POST[3])=="Yes")
{
    $ed14++;
}
if(($_POST[4])=="Yes")
{
    $ed15++;
    $ed17++;
}
if(($_POST[5])=="Yes")
{
    $ed18++;
}



// echo $ed1;
// echo $ed2;
// echo $ed3;
// echo $ed4;
// echo $ed5;
// echo $ed6;
// echo $ed7;
// echo $ed8;
// echo $ed9;
// echo $ed10;
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Disease Prediction System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" href="css/form-content.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>

    </head>
    <body >
      

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('link/user-topber.php'); ?> 
        </div>

        <div class="intro-page" >
 

        <div class="flex-p">
       <div class="content-p"> 


       <form class="form-horizontal" action="mouth-analyzing.php" method="post">

       <h2> Please check all the symptoms below that apply to you </h2>
           <p>Select one answer in each row. </p>

       <table id="example"  cellspacing="2" width="100%">
                                      
  
                                                    <tbody>
<?php $sql = "SELECT symptoms_tb.symptoms_id,symptoms_tb.symptoms_name from symptoms_tb where id IN (44,60,58,56,53)";

$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<tr>
 <!-- <?php echo htmlentities($cnt);?> -->
                                                            
              <td class="result-color1">Do you have  &nbsp"<?php echo htmlentities($result->symptoms_name);?>"?</td>
              <td class="result-color1"><input type="radio" name="<?php echo htmlentities($cnt);?>" value="Yes" required>Yes  &nbsp &nbsp <input type="radio" name="<?php echo htmlentities($cnt);?>" value="No" required>No </td>
                                                            


</tr>
<?php $cnt=$cnt+1;}} ?>
                                                       
                                                    
                                                    </tbody>
                                                </table>

 <input type="hidden" name="var1" value="<?php echo htmlentities($ed12);?>"/>
 <input type="hidden" name="var2" value="<?php echo htmlentities($ed13);?>"/>
 <input type="hidden" name="var3" value="<?php echo htmlentities($ed14);?>"/>
 <input type="hidden" name="var4" value="<?php echo htmlentities($ed15);?>"/>
 <input type="hidden" name="var5" value="<?php echo htmlentities($ed16);?>"/>
 <input type="hidden" name="var6" value="<?php echo htmlentities($ed17);?>"/>
 <input type="hidden" name="var7" value="<?php echo htmlentities($ed18);?>"/>




                                                <div class="flex-p-inside">

<div class="flex-p-2">
<li><button type="submit" name="submit" >SUBMIT</button></li> 

</div>
</div>
      
     </form>

     <div class="flex-p-inside">
     <div class="flex-p-1">
     <li><a href="mouth-symptoms2.php" ><button><<</button></li>
</div>
</div>








      </div>


        <!-- /.main-wrapper -->
        <script src="js/jquery-2.2.4.min.js"></script>

        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
