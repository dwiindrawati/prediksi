<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Rekomendasi Laptop</title>
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
		<?php echo $carousel_user; ?>
		<?php echo $sidebar_user; ?> 
		<?php $username=$this->session->userdata('username'); ?>

			<!-- <div class="span9">		
			<div class="well well-small">
			<h4>Rekomended Product <small class="pull-right"></small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				<?php 
					$c=0;
					foreach ($contentbased['data_tabel'] as $datatabel) { 
					++$c;
						if(($contentbased['hasil'][$c-1]['prediksi'])=='YA')
						{
					?>
				<li class="span3">
				  <div class="thumbnail" >
					<a  href="product_details.html"><img src="<?php echo base_url()."gambar_produk/".$datatabel['gambar_produk']; ?>"  style=" width:250px; height:200px " alt="" /></a>
					<div class="caption">
					  <h5>
					    <?php $id=$datatabel['id_produk']; ?>
					  	<?php echo $datatabel['merk_produk']; ?><br>
					  	<?php echo $datatabel['type_produk']; ?>
					  </h5>
					 <h4 style="text-align:center">
					 	<a class="btn" href="<?php echo base_url()."C_produk/detail_produk_user/".$id; ?>"><i class="icon-zoom-in"></i></a> 
					 	<a class="btn" href="<?php echo base_url()."C_keranjang/tambah_keranjang/"."$id/$username";?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">
					 		Rp <?php echo $datatabel['harga_produk']; ?></a>
					 </h4>
					</div>
				  </div>
				</li>
				<?php }	}?>
			  </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div> -->
		 
		<div class="span9">	 
		<!--h4>Rekomended Product (Content Based Filtering) </h4-->
		<!-- BELOOOM-->
			  <!--ul class="thumbnails">
				<?php 
					if (empty($contentbased['data_tabel'])){
						echo "Kosongan";
					}
					else{
					$c=0;
					foreach ($contentbased['data_tabel'] as $datatabel) { 
					++$c;
						if(($contentbased['hasil'][$c-1]['prediksi'])=='YA')
						{
							if($c<=10){

					?>
				<li class="span3">
				  <div class="thumbnail" >
					<a  href="product_details.html"><img src="<?php echo base_url()."gambar_produk/".$datatabel['gambar_produk']; ?>"  style=" width:250px; height:200px " alt="" /></a>
					<div class="caption">
					  <h5>
					    <?php $id=$datatabel['id_produk']; ?>
					  	<?php echo $datatabel['merk_produk']; ?><br>
					  	<?php echo $datatabel['type_produk']; ?>
					  </h5>
					 <h4 style="text-align:center">
					 	<a class="btn" href="<?php echo base_url()."C_produk/detail_produk_user/".$id; ?>"><i class="icon-zoom-in"></i></a> 
					 	<a class="btn" href="<?php echo base_url()."C_keranjang/tambah_keranjang/"."$id/$username";?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">
					 		Rp <?php echo $datatabel['harga_produk']; ?></a>
					 </h4>
					</div>
				  </div>
				</li>
					<?php 	} else {break;} }	} }?>
			  </ul-->	
		<!--h4>Rekomended Product (Collaborative Filtering) </h4-->
		<!-- BELOOOM-->
			  <!--ul class="thumbnails">
				<?php 
					$c=0;
					foreach ($collaborative['data_tabel'] as $datatabel) { 
					++$c;
						if(($collaborative['hasil'][$c-1]['prediksi'])=='YA')
						{
					?>
				<li class="span3">
				  <div class="thumbnail" >
					<a  href="product_details.html"><img src="<?php echo base_url()."gambar_produk/".$datatabel['gambar_produk']; ?>"  style=" width:250px; height:200px " alt="" /></a>
					<div class="caption">
					  <h5>
					    <?php $id=$datatabel['id_produk']; ?>
					  	<?php echo $datatabel['merk_produk']; ?><br>
					  	<?php echo $datatabel['type_produk']; ?>
					  </h5>
					 <h4 style="text-align:center">
					 	<a class="btn" href="<?php echo base_url()."C_produk/detail_produk_user/".$id; ?>"><i class="icon-zoom-in"></i></a> 
					 	<a class="btn" href="<?php echo base_url()."C_keranjang/tambah_keranjang/"."$id/$username";?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">
					 		Rp <?php echo $datatabel['harga_produk']; ?></a>
					 </h4>
					</div>
				  </div>
				</li>
				<?php }	}?>
			  </ul-->	
		</div>
		</div>
	</div>
</div>

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
				<a href="#"><img width="60" height="60" src="<?php echo base_url()."template_user/"; ?>themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url()."template_user/"; ?>themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url()."template_user/"; ?>themes/images/youtube.png" title="youtube" alt="youtube"/></a>
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
	<a href="themes/css/#" name="bootshop"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="<?php echo base_url()."template_user/"; ?><?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><?php echo base_url()."template_user/"; ?><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="<?php echo base_url()."template_user/"; ?>themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>

</body>
</html>