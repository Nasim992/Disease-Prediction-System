

<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Disease Prediction System </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" href="css/form-content.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <!-- <style>
             
             body{
                 background-color:white;
                 width:auto;
                 height:auto;
                
             } 
             .intro-page{
                margin-left: 203px;
               margin-right: 203px;
               
             }
             .intro-page h2{
                font-size: 25px;
               font-weight: 900;
               color: #499bea;
             }
             .intro-page p
             {
                color: #071c55;
                font-size: 16px;
                font-weight: 800;
             }

             .flex-p {
                display: flex;

flex-wrap: wrap;

align-items: center;

}
              
             .flex-p .image-p{
                flex-basis: 30%;
    max-width: 30%;
    padding: 10px;
             }
.flex-p .content-p {
    flex-basis: 100%;
    max-width: 100%;
    padding: 21px;
    
}
.flex-p .content-p li{
     

}



             .intro-page a{
     background-color: #25dfce;
    font-size: 60x;
    font-weight: 900;
    color: #131001;

}     
 
.intro-page button{
    background-color: #25dfce;
   
    float: right;
   
    font-weight:900;


}  

.intro-page button{
   /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#499bea+33,207ce5+67 */
background: #499bea; /* Old browsers */
background: -moz-linear-gradient(top,  #499bea 33%, #207ce5 67%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #499bea 33%,#207ce5 67%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #499bea 33%,#207ce5 67%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499bea', endColorstr='#207ce5',GradientType=0 ); /* IE6-9 */

   
    float: right;
    border-radius: 25px;
    transition:0.5s;
   color:white;

}  
.intro-page button:hover{
   /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#29b8e5+50,bce0ee+90 */
background: #29b8e5; /* Old browsers */
background: -moz-linear-gradient(top,  #29b8e5 50%, #bce0ee 90%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #29b8e5 50%,#bce0ee 90%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #29b8e5 50%,#bce0ee 90%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#29b8e5', endColorstr='#bce0ee',GradientType=0 ); /* IE6-9 */

   color:white;
    border-radius: 25px;


}
.flex-p-inside{
    display:flex;
    flex-wrap:wrap;
    align-items:center;
    position:relative;

}
.flex-p-1{
    flex-basis: 10%;
    max-width: 7%;
    position: absolute;
    top: -42px;

    
}
.flex-p-2{
    flex-basis: 100%;
    max-width: 100%;
}
li{
    list-style-type:none;
    display:block;
}
.flex-p-1 li a button i {
    color:white;
}

</style> -->
    </head>
    <body >
      

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('link/user-topber.php'); ?> 
        </div>

        <div class="intro-page" >

           <div class="flex-p">
       <div class="content-p"> 


       <form class="form-horizontal" action="teerms.php" method="post">
       <h2> Please check all the statements below that apply to you </h2>
           <p>Select one answer in each row. </p>

       <table id="example"  cellspacing="2" width="100%">
                                      
  
                                                    <tbody>


<tr>

<td class="result-color1">I am Overweight and Obese   &nbsp</td>
        <td class="result-color1"><input type="radio" name="overweight" value="Yes" required>Yes  &nbsp &nbsp <input type="radio" name="overweight" value="No" required>No </td>

</tr>

<tr>

<td class="result-color1">I Smoke Cigaretts   &nbsp</td>
        <td class="result-color1"><input type="radio" name="overweight1" value="Yes" required>Yes  &nbsp &nbsp <input type="radio" name="overweight1" value="No" required>No </td>
                                                                           
</tr>
<tr>

<td class="result-color1" >I have high Cholesterol &nbsp</td>
        <td class="result-color1"><input type="radio" name="overweight2" value="Yes" required>Yes  &nbsp &nbsp <input type="radio" name="overweight2" value="No" required>No </td>
                                                                           
</tr>
<tr>

<td class="result-color1">I have hypertention   &nbsp</td>
        <td class="result-color1"><input type="radio" name="overweight3" value="Yes" required>Yes  &nbsp &nbsp <input type="radio" name="overweight3" value="No" required>No </td>
                                                                           
</tr>
<tr>

<td class="result-color1">I have diabates   &nbsp</td>
        <td class="result-color1"><input type="radio" name="overweight4" value="Yes" required>Yes  &nbsp &nbsp <input type="radio" name="overweight4" value="No" required>No </td>
                                                                           
</tr>
                                                       
                                                    
                                                    </tbody>
                                                </table>
                                                <div class="flex-p-inside">

<div class="flex-p-2">
<li><button type="submit" name="submit" >SUBMIT</button></li> 

</div>
</div>
      
     </form>


     <div class="flex-p-inside">
     <div class="flex-p-1">
     <li><a href="age.php" ><button><<</button></li>
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
