<?php 
	include('koneksi.php');
	if (isset($_REQUEST['tambahdata'])) {
		
		$kode=filterdata($_REQUEST['kodeproduk']);
		$nama=filterdata($_REQUEST['namaproduk']);
		$hargamodal=filterdata($_REQUEST['hargamodal']);
		$hargajual=filterdata($_REQUEST['hargajual']);
		$kategori=filterdata($_REQUEST['kategori']);
		$diskon=filterdata($_REQUEST['diskon']);
		$query="insert into tbl_produk 
		values ('$kode','$nama','$kategori',$hargamodal,$hargajual,$diskon)";
		$result=mysqli_query($koneksi,$query);
		if($result){
			echo "produk dengan nama <b>'$nama'</b> berhasil ditambahkan";
		}
		else {
			die("ada yg error".mysqli_error($koneksi));
		}
	}
	elseif(isset($_REQUEST['getkategori'])){
		getkategori($koneksi);
	}
 ?>