
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Disease and Symptoms For an Eye < </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <style>
             
             body{
                 background-color:white;
                 width:auto;
                 height:auto;
                 margin:30 auto;
             }
             .intro-page{
                margin-left: 203px;
               margin-right: 203px;
               margin-top:100px;
             }
             .intro-page h2{
                font-size: 32px;
               font-weight: 900;
               color: #12bac2;
             }
             .intro-page p
             {
                color: #071c55;
                font-size: 19px;
                font-weight: 800;
             }

             .flex-p {
                display: flex;

flex-wrap: wrap;

align-items: center;
padding-bottom: 38px;
}
             }
             .flex-p .image-p{
                flex-basis: 30%;
    max-width: 30%;
    padding: 10px;
             }
.flex-p .content-p {
    flex-basis: 70%;
    max-width: 70%;
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
    margin-right: 60px;


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
           <h2> Terms & Policy </h2>
           <p>Before using the checkup, please read Terms of Service. Remember that : </p>
         <ul> 
             <li>Checkup is not a diagnosis. Checkup is for informational purposes and is not a qualified medical opinion.</li>
             <li>Do not use in emergencies. In case of health emergency, call your local emergency number immediately.</li>
             <li>Your data is safe. Information that you provide is anonymous and not shared with anyone.</li>
        </ul>

      </div>

      <div class="image-p">
            <img src="images/policy.JPG">
       </div>
     

</div>
<a href="question-intro.php" ><button>NEXT</button>

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
