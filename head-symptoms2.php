 
<?php
include('link/config.php');



$ed19=0;
$ed20=0;
$ed21=0;
$ed22=0;
$ed23=0;
$ed24=0;
$ed25=0;
$ed26=0;
$ed27=0;
$ed28=0;
$ed29=0;
$ed30=0;
$ed31=0;
   if(($_POST[1])=="Yes")
   {
    $ed19++;
    $ed20++;
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
    $ed22++;
   }
   if(($_POST[5])=="Yes")
   {
    $ed23++;
   }
   if(($_POST[6])=="Yes")
   {
    $ed24++;
   }
   if(($_POST[7])=="Yes")
   {
    $ed25++;
    $ed26++;
   }
   if(($_POST[8])=="Yes")
   {
    $ed26++;
   }
   if(($_POST[9])=="Yes")
   {
    $ed27++;
   }
   if(($_POST[10])=="Yes")
   {
    $ed28++;
   } 
   if(($_POST[11])=="Yes")
   {
    $ed29++;
   } 
   if(($_POST[12])=="Yes")
   {
    $ed30++;
   } 
   if(($_POST[13])=="Yes")
   {
    $ed31++;
   } 

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
 

       <form class="form-horizontal" action="head-symptoms3.php" method="post">
       <h2> Please check all the symptoms below that apply to you </h2>
           <p>Select one answer in each row. </p>

       <table id="example"  cellspacing="2" width="100%">                                  
   
                                                    <tbody>
<?php $sql = "SELECT symptoms_tb.symptoms_id,symptoms_tb.symptoms_name from symptoms_tb where id IN (70,82,77,86,1,94,98)";
 
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
     <li><a href="head-symptoms1.php" ><button><<</button></li>
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
