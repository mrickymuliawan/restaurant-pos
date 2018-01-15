<?php 	
include('koneksi.php');
if (isset($_REQUEST['cekkode'])) {
	$kode=$_REQUEST['kodepenjualan'];
	$result=mysqli_query($koneksi, 
		"select * from tbl_penjualan where kode_penjualan='$kode' ");
	$data=mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0){
		echo "true";
	}
	else{
		echo "false";
	}
		
		
}

elseif (isset($_REQUEST['load']) ) {
	
		$r=mysqli_query($koneksi,"select kode_kategori kode, kategori nama from tbl_kategori");
		while($data=mysqli_fetch_assoc($r)){
			$kode=$data['kode'];
			$nama=$data['nama'];
			$result=mysqli_query($koneksi,
				"select*from tbl_produk pro join tbl_kategori kat on pro.kategori = kat.kategori
				where kode_kategori='$kode' ");
			 	
			while ($data=mysqli_fetch_assoc($result)) {
				$data['diskon']*=100;
					
				$arr[$nama][]= "<tr>
					<td>$data[nama_produk]</td>
					<td>Rp. ".formatangka($data['harga_jual'])."</td>
					<td>$data[diskon] %</td>
					<input type='hidden' value=$data[kode_produk]>
				</tr>";
						
			}
		}
	
		// $result=mysqli_query($koneksi,"select*from tbl_produk where kategori = 'makanan' ");
			 	
		// while ($data=mysqli_fetch_assoc($result)) {
		// 	$data['diskon']*=100;
				
		// 	$arr['tablemakanan'][]= "<tr>
		// 		<td>$data[nama_produk]</td>
		// 		<td>Rp. ".formatangka($data['harga_jual'])."</td>
		// 		<td>$data[diskon] %</td>
		// 		<input type='hidden' value=$data[kode_produk]>
		// 	</tr>";
					
		// }

		// $result=mysqli_query($koneksi,"select*from tbl_produk where kategori = 'minuman' ");
			 	
		// while ($data=mysqli_fetch_assoc($result)) {
		// 	$data['diskon']*=100;
				
		// 	$arr['tableminuman'][]= "<tr>
		// 		<td>$data[nama_produk]</td>
		// 		<td>Rp. ".formatangka($data['harga_jual'])."</td>
		// 		<td>$data[diskon] %</td>
		// 		<input type='hidden' value=$data[kode_produk]>
		// 	</tr>";
					
		// }
	echo json_encode($arr);
}





elseif (isset($_REQUEST['pilihproduk'])) {
	
	$pilih=$_REQUEST['pilihproduk'];
	$result=mysqli_query($koneksi,"select * from tbl_produk where kode_produk = '$pilih' ");
	
	if($data=mysqli_fetch_assoc($result)) {
		$total=$data['harga_jual']-($data['harga_jual']*$data['diskon']);
		$diskon=$data['diskon']*100;
		echo "<tr>
				
			
				<input type='hidden' name='kodeproduk' value='$data[kode_produk]'>
			
				<td>
					$data[nama_produk] <input type='hidden' name='namaproduk' value='$data[nama_produk]'>
				</td>
				<td class='td-harga_jual'>
				
					<input type='text' name='hargajual' class='input-format form-control' value='$data[harga_jual]' readonly>
				</td>
				<td class='td-qty'>			
					<input type=number name='qty' value=1 class='form-control' min='1'> 
				</td>
				
				<td class='td-diskon'>		
					$diskon %<input type='hidden' name='diskon' value='$diskon'>
				</td>
				<td class='td-total'>		
					<input type='text' name='total' value=$total class='input-format form-control' readonly>
				</td>
				<td>						
					<button type='button' class='btn btn-outline-danger btn-hapus'> <span class='fa fa-remove'/> </span> </button>
				</td>
				
			</tr>";
	}
}


elseif (isset($_REQUEST['tambahpenjualan'])) {
	
	$kodepenj=$_REQUEST['kodepenjualan'];
	$totitem=filterdata($_REQUEST['totalitem']);
	$bayar=filterdata($_REQUEST['bayar']);
	$kembali=filterdata($_REQUEST['kembali']);
	$totharga=filterdata($_REQUEST['totalharga']);
	// $profit=0;
	
	
	
	$query="insert into tbl_penjualan values 
			('$kodepenj',NOW(),'$totitem','$bayar','$kembali','$totharga','$profit')";
	$result=mysqli_query($koneksi,$query);
	
}
elseif (isset($_REQUEST['tambahpenjualandetail'])) {
	
	$kodepenj=$_REQUEST['kodepenjualan'];
	$kodeproduk=filterdata($_REQUEST['kodeproduk']);
	$namaproduk=filterdata($_REQUEST['namaproduk']);
	$qty=filterdata($_REQUEST['qty']);
	$hargamodal="(select harga_modal from tbl_produk where kode_produk='$kodeproduk')";
	$hargajual="(select harga_jual from tbl_produk where kode_produk='$kodeproduk')";
	$diskon="(select diskon from tbl_produk where kode_produk='$kodeproduk')";
	$total=filterdata($_REQUEST['total']);
	$profit="$total-$hargamodal*$qty";
	
	// insert to penjualan detail
	$query="insert into tbl_penjualandetail 
			values ('$kodepenj','$kodeproduk','$namaproduk','$qty',$hargamodal,$hargajual,$diskon,'$total',$profit)";
	$result=mysqli_query($koneksi,$query);



	// update total profit dan total qty di penjualan
	$query="update tbl_penjualan a 
			inner join (select kode_penjualan, 
						SUM(profit) totalprofit, SUM(kuantitas) totalqty 
						from tbl_penjualandetail where kode_penjualan = '$kodepenj') b
	 		on a.kode_penjualan = b.kode_penjualan
			set a.profit = totalprofit, a.total_item = totalqty
			where a.kode_penjualan = '$kodepenj'";
	$result=mysqli_query($koneksi,$query);

	if($result){
		echo "penjualan berhasil ditambahkan dan selesai";
	}
	else {
		die("ada yg error".mysqli_error($koneksi));
	}
}

 ?>