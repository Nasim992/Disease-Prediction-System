 
<?php
include('link/config.php');
 
$ed19=$_POST['var1'];
$ed20=$_POST['var2'];
$ed21=$_POST['var3'];
$ed22=$_POST['var4']; 
$ed23=$_POST['var5'];
$ed24=$_POST['var6'];
$ed25=$_POST['var7'];
$ed26=$_POST['var8'];
$ed27=$_POST['var9'];
$ed28=$_POST['var10'];
$ed29=$_POST['var11'];
$ed30=$_POST['var12'];
$ed31=$_POST['var13'];

if(($_POST[1])=="Yes")
   {
    $ed19++;
   }
   if(($_POST[2])=="Yes")
   {
    $ed20++;
   }
   if(($_POST[3])=="Yes")
   {
    $ed21++;
   }
   if(($_POST[4])=="Yes")
   { 
    $ed23++;
   }
   if(($_POST[5])=="Yes")
   {
    $ed24++;
   }
   if(($_POST[6])=="Yes")
   {
    $ed25++;
   }
   if(($_POST[7])=="Yes")
   {
    $ed26++;
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


       <form class="form-horizontal" action="head-analyzing.php" method="post">

       <h2> Please check all the symptoms below that apply to you </h2>
           <p>Select one answer in each row. </p>

       <table id="example"  cellspacing="2" width="100%">
                                      
  
                                                    <tbody>
<?php $sql = "SELECT symptoms_tb.symptoms_id,symptoms_tb.symptoms_name from symptoms_tb where id IN (100,102,112,117,72,82,75)";

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

 <input type="hidden" name="var1" value="<?php echo htmlentities($ed19);?>"/>
 <input type="hidden" name="var2" value="<?php echo htmlentities($ed20);?>"/>
 <input type="hidden" name="var3" value="<?php echo htmlentities($ed21);?>"/>
 <input type="hidden" name="var4" value="<?php echo htmlentities($ed22);?>"/>
 <input type="hidden" name="var5" value="<?php echo htmlentities($ed23);?>"/>
 <input type="hidden" name="var6" value="<?php echo htmlentities($ed24);?>"/>
 <input type="hidden" name="var7" value="<?php echo htmlentities($ed25);?>"/>
 <input type="hidden" name="var8" value="<?php echo htmlentities($ed26);?>"/>
 <input type="hidden" name="var9" value="<?php echo htmlentities($ed27);?>"/>
 <input type="hidden" name="var10" value="<?php echo htmlentities($ed28);?>"/>
 <input type="hidden" name="var11" value="<?php echo htmlentities($ed29);?>"/>
 <input type="hidden" name="var12" value="<?php echo htmlentities($ed30);?>"/>
 <input type="hidden" name="var13" value="<?php echo htmlentities($ed31);?>"/>

                                                <div class="flex-p-inside">

<div class="flex-p-2">
<li><button type="submit" name="submit" >SUBMIT</button></li> 

</div>
</div>
      
     </form>

     <div class="flex-p-inside">
     <div class="flex-p-1">
     <li><a href="head-symptoms2.php" ><button><<</button></li>
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
