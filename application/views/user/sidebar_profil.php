<!-- Sidebar ================================================== -->
	<?php $email=$this->session->userdata('namas'); ?>
	<div id="sidebar" class="span3">
		<!-- <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div> -->
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li><a href="#">Akun Saya</a></li>
			<ul>
				<li><a href="<?php echo base_url()."C_user/profil_user/".$username; ?>"><i class="icon-chevron-right"></i>Profil</a></li>
				<li><!--a href="<?php echo base_url()."C_user/alamat_user/".$email; ?>"><i class="icon-chevron-right"></i>Alamat</a--></li>
			</ul>
			<!--li><a href="#">Transaksi</a></li>
			<!--ul>
				<li><a href="<?php echo base_url()."C_pembelian/hal_pembelian/$email"; ?>"><i class="icon-chevron-right"></i>Belum Terbayar</a></li>
				<li><a href="<?php echo base_url()."C_pembelian/hal_proses_pengiriman/$email" ?>"><i class="icon-chevron-right"></i>Proses Pengiriman</a></li>
				<li><a href="<?php echo base_url()."C_pembelian/selesai/".$email; ?>"><i class="icon-chevron-right"></i>Selesai</a></li>
			</ul-->
		</ul>
		<br/>
	</div>
<!-- Sidebar end=============================================== -->