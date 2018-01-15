


	<ul class="sidebar">
		<li class="brand text-sm-center"><p><b>Sales System&reg</p></b></li>
		
		<li><a href="produk"><i class="fa fa-list-alt"></i> Menu</a></li>
		<!-- <li><a href="kategori"><i class="fa fa-tags"></i>  Kategori</a></li> -->
		<li><a href="transaksi"><i class="fa fa-cart-plus"></i> Transaksi</a></li>
		<li><a href="penjualan"><i class="fa fa-bar-chart"></i> Laporan</a></li>
		<li><a href="function/proseslogin"><i class="fa fa-sign-out"></i> Logout</a></li>

		<li class="version"><a href="#">v.1.0</a></li>
	</ul>
	
<script type="text/javascript">
	var url=window.location.pathname
	url=url.substr(url.lastIndexOf('/') + 1);
	$('.sidebar a').each(function(){
		var navurl=$(this).attr('href')
		if (navurl==url) {
			$(this).addClass('active')
		}
	})
</script>