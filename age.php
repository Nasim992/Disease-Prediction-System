 
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

   <style>
   .slidecontainer {
  width: 100%;
}

.slider {
    -webkit-appearance: media-overlay-play-button;
    width: 100%;
    height: 20px;
    border-radius: 5px;
    background: white;
    outline: darkcyan;
    opacity: 32.7;
    -webkit-transition: .2s;
    transition: opacity 11.2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 23px;
  height: 24px;
  border: 0;
  background: url('contrasticon.png');
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 23px;
  height: 24px;
  border: 0;
  background: url('contrasticon.png');
  cursor: pointer;
}
tr,td{
    text-align:center;
    font-size:20px;
}
span{
    font-weight:900;
    font-size:20px;
}
h2{
    padding-bottom:50px;
    text-align:center;
}
   </style>

    </head>
    <body >
      

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('link/user-topber.php'); ?> 
        </div>

        <div class="intro-page" >

           <div class="flex-p">
       <div class="content-p"> 


       <form class="form-horizontal" action="question-intro.php" method="post">
       <h2> Select the age correctly.It will help you to get correct result.</h2>

       <table id="example"  cellspacing="2" width="100%">
                                      
  
                                                    <tbody>


<tr>

<td class="result-color1">  

<input type="range" min="15" max="100" name="range"  class="slider" id="myRange">
 
</td>
    
</tr>
<tr> <td >ENTER YOUR AGE: <span id="demo"></span></td></tr>

                         
                                                    
                                                    </tbody>
                                                </table>
                                                <div class="flex-p-inside">

<div class="flex-p-2">
<li><button type="submit" name="submit" >NEXT</button></li> 

</div>
</div>
      
     </form>


     <div class="flex-p-inside">
     <div class="flex-p-1">
     <li><a href="policy.php" ><button><<</button></li>
</div>
</div>


 
</div>

    <script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
    </script>


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
