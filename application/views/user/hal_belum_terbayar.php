<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Belum Terbayar</title>
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
    <link rel="shortcut icon" href="<?php echo base_url()."template_user/"; ?>themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()."template_user/"; ?>themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()."template_user/"; ?>themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()."template_user/"; ?>themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()."template_user/"; ?>themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>

<!-- Navbar ================================================== -->
	<?php echo $header_user; ?> 
		 
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php echo $sidebar_user; ?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Profil</li>
    </ul>
	<h3> Belum Terbayar</h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	 <?php $email=$this->session->userdata('namas'); ?>
	 <a href="<?php echo base_url()."C_pembelian/hapus_pembelian/".$email;?>">
	 <h3><small class="pull-right"><font color="red"> <i class="icon-fixed-width icon-trash"></i>Hapus Semua </font></small></h3>
	 </a>
	 <br>
	 <hr>
	<br>
	<br>
	<?php 
	 	$total = 0;
	 	foreach ($data_belum as $datatabel) 
	 { ?>
		<img src="<?php echo base_url()."gambar_produk/".$datatabel['gambar_produk']; ?>"  style=" width:30px; height:30px " alt="" /> 
		<?php echo $datatabel['merk_produk']; ?> 
		<?php echo $datatabel['type_produk']; ?>
		 - <b>Rp <?php echo $datatabel['harga_produk']; ?></b>
		<a href="<?php echo base_url()."C_pembelian/hapus_item_pembelian/".$email."/".$datatabel['id_detail_beli'];?>">
			<h3>
				<small class="pull-right">
					<font color="red"> 
						<i class="icon-fixed-width icon-trash"></i>Hapus 
					</font>
				</small>
			</h3>
			</a>

			<br>
			<hr> 
			<?php $total=$total+$datatabel['harga_produk']; ?>

			 <?php }?>
				<h5>
					Total Belanja : 
					<?php 
						echo "Rp ".$total;
					?>
				</h5>


				<a href="<?php echo base_url()."C_pembayaran/hal_pembayaran_user/$email/$total"; ?>">
				<button type="sumbit" class="btn btn-large btn-primary pull-right" value="Pembayaran">Pembayaran</button>


				</a>
				<br><br>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url()."template_user/"; ?>themes/js/jquery.js" type="text/javascript"></script>
	<script src="<?php echo base_url()."template_user/"; ?>themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()."template_user/"; ?>themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="<?php echo base_url()."template_user/"; ?>themes/js/bootshop.js"></script>
    <script src="<?php echo base_url()."template_user/"; ?>themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="<?php echo base_url()."template_user/"; ?>themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="<?php echo base_url()."template_user/"; ?>themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="bootshop"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="businessltd"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="amelia" title="Amelia"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="spruce" title="Spruce"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="superhero" title="Superhero"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="cyborg"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="cerulean"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="journal"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="readable"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="simplex"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="slate"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="spacelab"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="united"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern1"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern2"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern3"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern4"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern5"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern6"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern7"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern8"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern9"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern10"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern11"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern12"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern13"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern14"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern15"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern16"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern17"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern18"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern19"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url()."template_user/"; ?>themes/css/#" name="pattern20"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>