<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prediksi Insentif TPK Prupuk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?php echo base_url()."template_user/"; ?>themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?php echo base_url()."template_user/"; ?>themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?php echo base_url()."template_user/"; ?>themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?php echo base_url()."template_user/"; ?>themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="<?php echo base_url()."template_user/"; ?>themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="<?php echo base_url()."template_user/"; ?>shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="<?php echo base_url()."template_user/"; ?>apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="<?php echo base_url()."template_user/"; ?>apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="<?php echo base_url()."template_user/"; ?>apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="<?php echo base_url()."template_user/"; ?>apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
		<?php echo $header_user; ?> 
		 
		<?php $username=$this->session->userdata('username'); ?>
		<div id="wrapper">
		<div class="span9">	 
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Prediksi Insentif TPK Prupuk</h1>
                        <br>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div>
                	
	</div>
	</div>
     
                <!-- /.row -->
                <div id="wrapper">
                <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form method ="post" action="<?php echo base_url()."C_nbc/cek_prediksi" ;?>" role="form" enctype="multipart/form-data">
                                        <div class="form-group">
                                                <label>Merk</label>
                                                <input class="form-control" placeholder="Masukan Merk" required name="merk">
                                        </div>
                                        <div class="form-group">
                                                <label>Ram</label>
                                                <select name="ram" class="form-control">
                                                    <option>Pilih Ram</option>
                                                    <option value="2">2</option>
                                                    <option value="4">4</option>
                                                    <option value="8">8</option>
                                                    <option value="16">16</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label>HDD</label>
                                                <select name="hdd" class="form-control">
                                                    <option>Pilih HDD</option>
                                                    <option value="320">320</option>
                                                    <option value="500">500</option>
                                                    <option value="750">750</option>
                                                    <option value="1000">1000</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label>VGA</label>
                                                <select name="vga" class="form-control">
                                                    <option>Pilih VGA</option>
                                                    <option value="1">ADA</option>
                                                    <option value="2">TIdak ADA</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label>LCD</label>
                                                <select name="lcd" class="form-control">
                                                    <option>Pilih LCD</option>
                                                    <option value="11">11</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Processor</label>
                                             <select name="processor" class="form-control">
                                                    <option>Pilih Processor</option>
                                                    <option value="1">DUAL CORE / AMD</option>
                                                    <option value="2">I3 INTEL / 4 CORE AMD</option>
                                                    <option value="3">I5 INTEL / 6 CORE AMD</option>
                                                    <option value="4">I7 INTEL / 8 CORE AMD</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Rate</label>
                                             <select name="rate" class="form-control">
                                                    <option>Pilih Processor</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Cek Prediksi</button>
                                    </form>
		</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- Footer ================================================================== -->
	
<span id="themesBtn"></span>

</body>
</html>