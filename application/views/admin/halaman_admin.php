<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Halaman Admin</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('template_admin/css/bootstrap.min.css');?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('template_admin/css/metisMenu.min.css');?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('template_admin/css/timeline.css');?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('template_admin/css/startmin.css');?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('template_admin/css/morris.css');?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('template_admin/css/font-awesome.min.css');?>" rel="stylesheet">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

</body>

            <?php echo $header_admin; ?> 
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        <!-- jQuery -->
        <script src="<?php echo base_url()."template_admin" ?>/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url()."template_admin" ?>/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url()."template_admin" ?>/js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?php echo base_url()."template_admin" ?>/js/raphael.min.js"></script>
        <script src="<?php echo base_url()."template_admin" ?>/js/morris.min.js"></script>
        <!--<script src="<?php echo base_url()."template_admin" ?>/js/morris-data.js"></script> -->

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url()."template_admin" ?>/js/startmin.js"></script>
    </body>
</html>
