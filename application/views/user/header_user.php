<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> User</strong></div>
	<div class="span6">
	<div class="pull-right">
		<!-- <a href="product_summary.html"><span class="">Fr</span></a>
		<a href="product_summary.html"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.html"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.html"><span class="">$</span></a>
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a>  -->
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
    <h4>Selamat Datang di Prediksi Insentif TPK Prupuk</h4>
		
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="<?php echo base_url()."C_user/help"; ?>">Help</a></li>
	 <li class=""><a href="<?php echo base_url()."C_user/register"; ?>">Register</a></li>
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" method="post" action="<?php echo base_url()."C_user/login_user"; ?>">
			  <div class="control-group">								
				<input type="text" name="username" placeholder="username">
			  </div>
			  <div class="control-group">
				<input type="password" name="password" placeholder="Password">
			  </div>
			  <div class="control-group">
				<a href="#">Forgot Password</a>
			  </div>
			  <button type="submit" class="btn btn-success">Sign in</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</form>		
			
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->

