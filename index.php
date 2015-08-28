<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>UNINETT AdminLTE Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Site style -->
    <link href="app/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
    <!-- Site skin -->
    <link href="app/css/skins/skin-black.min.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="skin-black fixed">
    <div class="wrapper">
      <!-- Main Header -->
	    <?php include_once('pages/index_header.php'); ?>
      <!-- Left side column. contains the logo and sidebar -->
        <?php include_once('pages/index_sidebar.php'); ?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Sidetittel
            <small>Subtittel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Breadcrumbs</a></li>
            <li class="active">Du er her...</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <h2 class="page-header text-muted">Jumbotron</h2>
          <div class="jumbotron clearfix">
            <div class="container">
              <h1 class="text-nowrap"><i class="ion ion-star text-yellow"></i> UNINETT AdminLTE Template!</h1>
              <p class="text-muted">- start bygging!</p>
            </div>
            
            <div class="pull-right">
              <h2 class="text-muted"><span class="fc-user-full-name"><!-- USERINFO--></span></h2>
              <div class="fc-group-list"><!-- GROUPS --></div>    
            </div>
          </div>
          
          <h2 class="page-header text-muted">Seksjonstittel</h2>
          
          <div class="row">
            
            <!-- Col 1 -->
            <div class="col-lg-7">
              <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="ion ion-information-circled"></i> Box title</h3>
                </div>  
                <div class="box-body">
                  <p>Box body.</p>
                </div>
                <div class="box-footer text-muted">
                    <p>Box footer.</p>
                </div>
              </div>
            </div>
            
            <!-- Col 2 -->
            
            <div class="col-lg-5">
              
              <!-- Box 1 -->
              <div class="box box-info collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title text-muted"><i class="ion ion-key"></i> Box title</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="ion ion-plus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <p>Box body.</p>               
                </div>
                <div class="box-footer">
                    <p>Box footer.</p>          
                </div>
              </div>
              
              <!-- Box 2 -->
              <div class="box box-warning collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title text-muted"><i class="ion ion-key"></i> Box title</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="ion ion-plus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <p>Box body.</p>               
                </div>
                <div class="box-footer">
                    <p>Box footer.</p>          
                </div>
              </div>
              
              <!-- Box 3 -->
              <div class="box box-success collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title text-muted"><i class="ion ion-key"></i> Box title</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="ion ion-plus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <p>Box body.</p>               
                </div>
                <div class="box-footer">
                    <p>Box footer.</p>          
                </div>
              </div>
              
            </div> <!-- ./col -->
            
          </div> <!-- ./row -->
          

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
		<?php include_once('pages/index_footer.php'); ?>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="app/js/AdminLTE.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.6/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js" type="text/javascript"></script> -->
    
    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
  </body>
</html>