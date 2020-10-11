<?php include "conn.php"; 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'ADM' ))
{
  header("Location: index.html");
  exit;
  
  
}



 


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADM DGO</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $_SESSION["nome"]?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                      
                        <li>
                            <a href="modifica_senha.php"><i class="fa fa-fw fa-gear"></i> Trocar senha</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="adm.php"><i class="fa fa-fw fa-home"></i>DASHBOARD</a>
                        
                    </li>
                   
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>DGO UPLOAD</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

           
                <!-- /.row -->

                <div class="col-md-12">
          <div class="tile">
            
            <div class="embed-responsive embed-responsive-16by9">

            <form method="post" enctype="multipart/form-data" >


                  <div class="form-group">

                  <?php
                       include("import_est_csv.php");
                       $csv = new csv();
                       if ( isset($_POST['sub']))
                       {
                       
                            $csv->import($_FILES['file']['tmp_name']);
                            //var_dump($_FILES['file']);
                           
                       }
                       

                  ?>


              <input class="form-control-file" id="foto" name="file" type="file" aria-describedby="fileHelp"><br><br>
              <button class="btn btn-primary" name="sub" type="submit" value="import">Submit</button>

                    </form>
            </div>
          </div>
        </div>
      </div>

                  
                   










                </div>








                <!-- /.row -->



               
              <p style="margin-right:9%; font-size: 10px;"><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></p>

</body>

</html>
