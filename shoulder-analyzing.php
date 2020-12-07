<?php 

$ed1=$_POST['var1'];
$ed2=$_POST['var2'];
$ed3=$_POST['var3'];
$ed4=$_POST['var4']; 
$ed5=$_POST['var5'];
$ed6=$_POST['var6'];
$ed7=$_POST['var7'];
$ed8=$_POST['var8'];

if(($_POST[1])=="Yes")
{
 $ed2++;

}
if(($_POST[2])=="Yes")
{
 $ed1++;

}
if(($_POST[3])=="Yes")
{
 $ed1++;

}


 $mainresult=0;
if($ed1==0 && $ed2==0 && $ed3==0 && $ed4==0 &&$ed5==0 && $ed6==0 &&$ed7==0 && $ed8==0)
{
    $mainresult=11;
}
else
{
if($ed1==(max($ed1,$ed2,$ed3,$ed4,$ed5,$ed6,$ed7,$ed8)))
{
    $mainresult=65;
}
if($ed2==(max($ed1,$ed2,$ed3,$ed4,$ed5,$ed6,$ed7,$ed8)))
{
    $mainresult=66;
}
}


header('Refresh: 3;url=result.php?mainresult='.$mainresult);


?>

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
                margin-left: 650px;
               margin-right: 203px;
               margin-top:200px;
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
             
             .flex-p .image-p{

             }
.flex-p .content-p {
    flex-basis: 100%;
    max-width: 100%;
    padding: 21px;
    align-items:center;
    
}
.flex-p .content-p li{
     

}



             .intro-page a{
     background-color: #25dfce;
    font-size: 60x;
    font-weight: 900;
    color: #131001;

}     
 
 
.lds-facebook {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-facebook div {
  display: inline-block;
  position: absolute;
  left: 8px;
  width: 16px;
  background: #29b8e5;
   background: -moz-linear-gradient(top, #29b8e5 50%, #bce0ee 90%);
   background: -webkit-linear-gradient(top, #29b8e5 50%,#bce0ee 90%);
   background: linear-gradient(to bottom, #29b8e5 50%,#bce0ee 90%);
   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#29b8e5', endColorstr='#bce0ee',GradientType=0 );
   cursor:pointer;
   color: white;
  animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {
  left: 8px;
  animation-delay: -0.84s;
}
.lds-facebook div:nth-child(2) {
  left: 32px;
  animation-delay: -0.72s;
}
.lds-facebook div:nth-child(3) {
  left: 56px;
  animation-delay: -0.60s;
}
.lds-facebook div:nth-child(4) {
  left: 80px;
  animation-delay: -0.48s;
}
.lds-facebook div:nth-child(5) {
  left: 104px;
  animation-delay: -0.36s;
}
.lds-facebook div:nth-child(6) {
  left: 128px;
  animation-delay: -0.24s;
}
.lds-facebook div:nth-child(7) {
  left: 152px;
  animation-delay: -0.12s;
}
.lds-facebook div:nth-child(8) {
  left: 176px;
  animation-delay: 0;
}
@keyframes lds-facebook {
  0% {
    top: 8px;
    height: 64px;
  }
  50%, 100% {
    top: 24px;
    height: 32px;
  }
}

h1{
  color: #29b8e5;
   cursor:pointer;
  font-weight:900;

}


</style>
    </head>
    <body >
    
        <div class="intro-page" >

        <div class="flex-p">

       <div class="content-p">
          

       <h1>Analyzing your Data...</h1><div class="lds-facebook"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>



        
      </div>
        
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
