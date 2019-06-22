<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
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
    <link rel="<?php echo base_url()."template_user/"; ?>shortcut icon" href="<?php echo base_url()."template_user/"; ?>themes/images/ico/favicon.ico">
    <link rel="<?php echo base_url()."template_user/"; ?>apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()."template_user/"; ?>themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="<?php echo base_url()."template_user/"; ?>apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()."template_user/"; ?>themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="<?php echo base_url()."template_user/"; ?>apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()."template_user/"; ?>themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="<?php echo base_url()."template_user/"; ?>apple-touch-icon-precomposed" href="<?php echo base_url()."template_user/"; ?>themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
	<?php $email=$this->session->userdata('namas'); ?>
	<?php echo $header_user; ?> 
<!-- Navbar ================================================== -->

<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
	<?php echo $sidebar_user; ?> 
<!-- Sidebar ================================================== -->

<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	<div class="row">	  
			<div id="gallery" class="span3">
            <a href="<?php echo base_url()."template_user/"; ?>themes/images/products/large/f1.jpg" title="<?php echo $merk_produk?> <?php echo $type_produk?>">
				<img src="<?php echo base_url()."gambar_produk/"; ?><?php echo $gambar_produk?>" style="width:100%" alt="<?php echo $merk_produk?> <?php echo $type_produk?>"/>
            </a>
            <br>
            <br>
            	<?php 
	              	if ($jumlah_row>0){
	              		$sum_rate=0;
						foreach ($data_rate as $rating) {
							$sum_rate=$sum_rate+$rating['rate'];
						}
              	?>
				 
              	
			  	<font color="#00008B" size="4" align="center"> <b><center>Rate Produk ( <?php echo $sum_rate/$jumlah_row; ?> )</b></center></font>

			  	<?php } 
			  		else{
			  	?>
			  	<font color="#00008B" size="4" align="center"> <b><center>Rate Produk ( <?php echo $jumlah_row; ?> )</b></center></font>
			  	<?php } ?>


			</div>
			<div class="span6">
				<h3><?php echo $merk_produk?> <?php echo $type_produk?></h3>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>Rp <?php echo $harga_produk?></span></label>
					<div class="controls">
					<!-- <input type="number" class="span1" placeholder="Qty."/> -->
					<?php 
						$id=$id_produk; 
						$email=$this->session->userdata('namas');
					?>
					  <a href="<?php echo base_url()."C_keranjang/tambah_keranjang/"."$id/$email";?>">
					  <button type="button" class="btn btn-large btn-primary pull-right"> Add to cart<i class=" icon-shopping-cart"></i></button>
					  </a>
					</div>
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4> <?php echo $kuantitas_produk; ?> items in stock</h4>
				<hr class="soft clr"/>
				<p>
					<?php echo $deskripsi_produk; ?>				
				</p>
				<!-- <a class="btn btn-small pull-right" href="#detail">More Details</a>
				<br class="clr"/>
			<a href="#" name="detail"></a> -->
			<hr class="soft"/>
			</div>
			
			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li ><a  href="#detail" data-toggle="tab">Product Details</a></li>

              <li class="active"><a href="#rate" data-toggle="tab">Rate Produk</a></li>
            </ul>

            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade  in" id="detail">
			  <h4>Informasi Produk</h4>
                <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow"><th colspan="2">Detail Produk</th></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Merk: </td><td class="techSpecTD2"><?php echo $merk_produk; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Type:</td><td class="techSpecTD2"><?php echo $type_produk; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Ram :</td><td class="techSpecTD2"><?php echo $ram_produk; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Hdd :</td><td class="techSpecTD2"><?php echo $hdd_produk; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Vga :</td><td class="techSpecTD2"><?php echo $vga_produk; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Lcd :</td><td class="techSpecTD2"><?php echo $lcd_produk; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Processor :</td><td class="techSpecTD2"><?php echo $processor_produk; ?></td></tr>
				</tbody>
				</table>
				
				<h5>Deskripsi</h5>
				<p>
				<?php echo $deskripsi_produk; ?>
				</p>
				<hr>
              </div>

              <div class="tab-pane  fade active in" id="rate">
              <form  method ="post" action="<?php echo base_url()."C_rate/rate_produk/$email/$id_produk"; ?>" >
              	<div class="control-group">
					<label class="control-label" for="inputFname1">Rate :</label>
					<div class="controls">
					  <input type="number" class="span1" placeholder="Rate." name="rate" min="1" max="5" />
					</div>
				 </div> 
				 <div class="control-group">
					<div class="controls">
					  <textarea name="komentar" id="aditionalInfo" style= "width: 854px; height: 46px;" required>Komentar</textarea>
					</div>
				 </div> 
              	<div class="control-group">
					<div class="controls">
						<input class="btn btn-small pull-right" type="submit" value="Rate" />
					</div>
				</div>
				<br>
              </form>
              <hr>
              	<?php 
	              	if ($jumlah_row>0){
	              		$sum_rate=0;
						foreach ($data_rate as $rating) {
							$sum_rate=$sum_rate+$rating['rate'];
						}
              	?>
				 

			  	<font color="#00008B" size="4" > <b>Rate Produk ( <?php echo $sum_rate/$jumlah_row; ?> )</b></font> Dari <?php echo $jumlah_row;?> Pembeli
			  	<?php } 
			  		else{
			  	?>
			  	<font color="#00008B" size="4" > <b>Rate Produk ( <?php echo $jumlah_row; ?> )</b></font> Dari 0 Pembeli
			  	<?php } ?>

			  <hr>
                <?php foreach ($data_rate as $rate) {?>
                	<font color="#00008B">
                	<h5><!-- <?php echo $rate['nama_user']; ?> --> ( <?php echo $rate['rate']; ?> )</h5>
                	</font>
                	<h6>Komentar : </h6> 
                	<p><?php echo $rate['komentar']; ?></p>
                	<hr>
                <?php }?>
            </div>  
		</div>

          <!-- <div id="myTabContent" class="tab-content">

          </div> -->

	</div>
</div>
</div> </div>
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