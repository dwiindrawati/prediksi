<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<?php $username=$this->session->userdata('username'); ?>
	<div class="span6">Welcome!<strong></strong></div>
	<div class="span6">
	<div class="pull-right">
		<!--a href="product_summary.html"><span class="">Fr</span></a-->
		<!--a href="product_summary.html"><span class="">Es</span></a>
		<!--span class="btn btn-mini">En</span-->
		<a href="product_summary.html"><span>&pound;</span></a>
		<span class="btn btn-mini">Rp 155.00</span>
		<!--a href="product_summary.html"><span class="">$</span></a-->
		<!--a href="<?php echo base_url()."C_keranjang/lihat_keranjang/".$email;?>"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i>Keranjang Anda </span> </a--> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<!--span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span-->
</a>
  <div class="navbar-inner">
    <!--a class="brand" href="<?php echo base_url();?>"><img src="<?php echo base_url()."template_user/"; ?>themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form-->
    <?php 
    //if($this->session->userdata('namas')){
    	$username=$this->session->userdata('username');
    //}
    ?>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="<?php echo base_url()."C_user/help"; ?>">Help</a></li>
	 <li class=""><a href="<?php echo base_url()."C_user/profil_user/".$username; ?>">Profil</a></li>
	 <li class=""><a href="<?php echo base_url()."C_user/logout"; ?>">Logout</a></li>
	 
	 <!--<a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<a href="#">Forgot Password</a>
			  </div>
			</form>		
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	-->
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->

