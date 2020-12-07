
<?php
session_start();
error_reporting(0); 
include('link/config.php');

if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{ 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Displaying all the symptoms </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/form-content.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
          <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
h5{
    background-color:white;
    font-weight:900;
}
        </style>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('link/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                      
                        

                        <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel"> 
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>View All the Symptoms for the Disease </h5>
                                                </div>
                                            </div>

                                            <div class="panel-body p-20">

                                                <table id="example"  cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="result-color1">#</th>
                                                            <th class="result-color1">Symptoms ID</th>
                                                            <th class="result-color1">Symptoms Name </th>
                                                            <th class="result-color1">Disease ID</th>
                                                            <th class="result-color1">Action</th>
                                                        </tr>
                                                    </thead>
  
                                                    <tbody>
<?php $sql = "SELECT symptoms_tb.id,symptoms_tb.symptoms_id,symptoms_tb.symptoms_name,disease_id from symptoms_tb";
$query = $dbh->prepare($sql);
$query->execute(); 
$results=$query->fetchAll(PDO::FETCH_OBJ); 
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<tr>
 <!-- <td><?php echo htmlentities($cnt);?></td> --><td class="result-color1"><?php echo htmlentities($result->id);?></td>
                                                            <td class="result-color1"><?php echo htmlentities($result->symptoms_id);?></td>
                                                            <td class="result-color1"><?php echo htmlentities($result->symptoms_name);?></td>
                                                            <td class="result-color1"><?php echo htmlentities($result->disease_id);?></td>

<td class="result-color1">
<a href="edit_symptoms.php?stid=<?php echo htmlentities($result->id);?>"><i class="far fa-edit" title="Edit"></i></a>
<a href="delete_symptoms.php?stid=<?php echo htmlentities($result->id);?>"onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash-alt" title="Delete"></i></a>

</td>
</tr>
<?php $cnt=$cnt+1;}} ?>
                                                       
                                                    
                                                    </tbody>
                                                </table>

                                         
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                      
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
    </body>
</html>

<?PHP } ?>
