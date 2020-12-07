
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Disease Prediction System  </title>
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
               color: #499bea;
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
 
 


input.larger { 
      width: 20px;
      height: 20px;
}
            .margin-right-20 {
    margin-right: 20px !important;
    display: inline-block;
    position: relative;
    top: 5px;
}
            .label-text {
                cursor: pointer;
            }


                   .intro-page a{
     background-color: #25dfce;
    font-size: 60x;
    font-weight: 900;
    color: #131001;

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

}
.flex-p-1{
    flex-basis: 6%;
    max-width: 53%;
    justify-content: flex-start;
    margin-top: 28px;
    
}
.flex-p-2{
    flex-basis: 90%;
    max-width: 91%;

}
.flex-p-2 li,.flex-p-1 li{
    list-style:none;

}
.flex-p-1 li a button i {
    color:white;
}

</style>
    </head>
    <body >
      

  <?php include('link/user-topber.php'); ?> 
        

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
        <label class="label-text"><input type="checkbox" id="myCheck" class="larger margin-right-20"> I read and accept Terms of Service and Privacy Policy. </label>
        
      </div>

      <div class="image-p">
            <img src="images/policy.JPG">
        
       </div>

      </div>

      <div class="flex-p-inside">
 
<div class="flex-p-1">
<li><a href="intro.php" ><button><<</button></li>
</div>
<div class="flex-p-2">

<li><p id="text" style="display:none"><a href="age.php" ><button id="next-button">NEXT</button></p></li>
</div>

</div>


</div>



</div>




        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script>
            $(function($) {
                
                $("#myCheck").on('click', function(){
                    $("#text").slideToggle();
                });
            });
        </script>
        

<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
    </body>
</html>
