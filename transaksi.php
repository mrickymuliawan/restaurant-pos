<?php 
	session_start();
	include("function/koneksi.php");
	if (!isset($_SESSION['user'])) {
		header('location:login.php?pesan=Anda harus login dahulu');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transaksi</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css?version=1.0">


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery-number.min.js"></script>
	<script src="js/jquery-validate.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	
</head>
<body>

	<div class="wrapper">
		<div class="sidebar-wrapper">
			<?php include ('templates/sidebar.php'); ?>
		</div>

		<div class="page-wrapper">

			<div class="container-fluid">

				<div class="row">

					<div class="col-sm-7">
						<div class="tool-row">
							<div class="form-group row">
							
								<label class="col-form-label col-sm-3" for='kodepenjualan'>Kode Penjualan</label>
								<div class="col-sm-3">
									<input type="text" name="kodepenjualan" class="form-control kode-penjualan" readonly="">
								</div>
							
								<div class="col-sm-3">
									<input type="text" name="tanggal" class="form-control tgl" disabled="">
								</div>

								<label class="col-form-label col-sm-1" for='kodepenjualan'>Table</label>
								<div class="col-sm-2">
									<input type="text" class="form-control">
								</div>
								
							   
							</div>
							<!-- <div class="form-group row">
								<div class="col-sm-12">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="fa fa-search "></span>
										</div>
										<input type="text" name="caridata" placeholder="Cari produk atau scan barcode.." class="form-control cariproduk" >
									</div>
								</div>
							</div> -->
						</div> 

						
						<div class="cart-row">	
							<div class="row">
								<table class="table table-striped table-keranjang">
									<thead>
										<tr>
											<th>Nama produk</th>
											<th>Harga</th>
											<th>Qty</th>
											<th>Diskon</th>
											<th>Total</th>
											<th>Tools</th>
											</tr>
									</thead>
									<tbody></tbody>	
								</table>
							</div>	
						</div>
						

					</div> 

				

					<div class="col-sm-5">	
						<div class="header-menu-row">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#makanan" role="tab">Makanan</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#minuman" role="tab">Minuman</a>
								</li>
							</ul>
						</div>
						<div class="menu-row">
							
							
			 				<!-- Nav tabs -->
							

							<!-- Tab panes -->
							<div class="tab-content">

								<div class="tab-pane active" id="makanan" role="tabpanel">
									<div class="row">
										<div class="col-sm-12">
										  	<table class="table table-striped table-hover table-makanan">
												<thead>
													<tr>
														<th>Nama produk</th>
														<th>Harga</th>
														<th>Diskon %</th>
													</tr>
												</thead>
												<tbody></tbody>	
											</table>
										</div>
								 	</div>
								 	
								</div>
								<div class="tab-pane" id="minuman" role="tabpanel">

								  	<div class="row">
									  	<div class="col-sm-12">
									 		<table class="table table-striped table-hover table-minuman">
												<thead>
													<tr>
														<th>Nama produk</th>
														<th>Harga</th>
														<th>Diskon %</th>
													</tr>
												</thead>
												<tbody></tbody>	
											</table>

									  	</div>
									</div>
								</div>
							</div>				 			
							
							
						</div>	
					</div>

					
				</div>
<!--...................................................................................................... -->
				<div class="row">
					<form class="form-total">
						<div class=" col-sm-12">
							<div class="tool-row">
							<div class="form-group row">
						 		<label for="total" class="col-form-label col-sm-1">Total</label>
						 		<div class="col-sm-3">
						 			<input type="text" name="totalharga" class="form-control form-control-lg total input-format" value=0 readonly>	
						 		</div>
						 			
						 	</div>
						 		
						
						
							<div class="form-group row">
						 		<label for="bayar" class="col-form-label col-sm-1 ">Bayar</label>
						 		<div class="col-sm-3">
						 			<input type="text" name="bayar" class="form-control form-control-lg bayar input-format" >	
						 		</div>
						 		<label for="kembali" class="col-form-label col-sm-1 ">Kembali</label>
						 		<div class="col-sm-3">
						 			<input type="text" class="form-control form-control-lg kembali input-format" readonly>	
						 			<input type="hidden" name="kembali" class="kembali">
						 		</div>
						 		<div class="offset-sm-1 col-sm-3">
						 			
									 <button type='button' class="btn btn-outline-success btn-lg btn-bayar" disabled>Bayar
									  <i class="fa fa-check-circle-o fa-1x"></i></button>
									  <button type='button' class="btn btn-outline-danger btn-lg btn-clear">Clear</button>
								</div>
						 	</div>
						 	</div>
						</div>
					</form>
				</div>
<!--...................................................................................................... -->
			</div>
		</div>
	</div>
</body>
</html>




 		<div class="modal fade modal-info" role="dialog">
	 		<div class="modal-dialog ">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Informasi</h4>
			      </div>
			      <div class="modal-body info-body">
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			      </div>
			    </div>
 			</div>
 		</div>
 		<div class="modal fade modal-print" role="dialog">
	 		<div class="modal-dialog ">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Informasi</h4>
			      </div>
			      <div class="modal-body info-body">
			        	Penjualan berhasil
			      </div>
			      <div class="modal-footer">
			      <button type="button" class="btn btn-primary btn-print">Print</button>
			        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			      </div>
			    </div>
 			</div>
 		</div>



<!-- ---------------------------------------------------------------------------------------------------- -->

<script type="text/javascript">
		function changeqty(a)
		{
			
			var qty=parseInt($(a).val());
			var harga=parseInt($(a).parent().siblings('.td-harga_jual').find('input').val());
			var diskon=parseFloat($(a).parent().siblings('.td-diskon').html())/100;
			var total=(harga-(harga*diskon))*qty;
			
			$(a).parent().siblings('.td-total').find('input').val(total);	
		
		}
		function hapussemua()
		{
			$('.total').val(0)
			$('.bayar').val("")
			$('.kembali').val("")
			$('.btn-bayar').attr('disabled','true')
			$('.bykirim-input').attr('readonly','true').val(0)
	    	$('.bykirim-cbox').prop('checked',false)
		}
		function generate()
		{
			var text = "";
			var possible = "0123456789";
			for( var i=0; i < 7; i++ )
			    text += possible.charAt(Math.floor(Math.random() * possible.length));
				return text;
			}
		function load()
		{
			$.ajax({
			url:'function/prosestransaksi.php',
			data:{load:true},
			dataType:'json',
			success:function(data){
					$('.table-makanan tbody').html(data['makanan']);
					$('.table-minuman tbody').html(data['minuman']);
				}
			})
		}
			
			
//=======================================================================================================//

		

			$('input').on('focus',function(){
		    	$(this).select();
		    })
			

			$(document).ajaxSuccess(function(){
				$('.input-format').number(true,0,',','.')

			})
			// CEK KODE
			var gen=generate()
			var kodepenjualan=$('input[name=kodepenjualan').val(gen)
			$.ajax({
				url:'function/prosestransaksi.php',
				data:{kodepenjualan:$('input[name=kodepenjualan').val(),cekkode:true},
				success: function(data){
					if (data=='true') {
						location.reload();
					}
				}
			})

			// LOAD DATA 
			load();
			
			
			$('.tgl').datepicker().datepicker("setDate",new Date()).datepicker('option','dateFormat','yy-mm-dd');

			
			$('.table-makanan,.table-minuman').on('click','tr',function(){

			 	var kode=$(this).children('input').val();
				var sudahada=false			
				$('input[name=kodeproduk]').each(function(){
				    // JIKA SUDAH ADA DIKERANJANG 
				    if($(this).val()==kode){
				    			
				    	var qtyinput=$(this).siblings('.td-qty').find('input')
				    	var qty=parseInt(qtyinput.val())
				    	$(this).siblings('.td-qty').find('input').val(qty+1)

						// FUNSI CHANGEQTY
				    	changeqty(qtyinput)
						sudahada=true

				    }
				    		
				})
				// JIKA SUDAH ADA DIKERANJANG HITUNG ULANG TOTAL 
				if(sudahada){
				    var tot=0;
					$('.td-total input').each(function(){
						var value=parseInt($(this).val());
						tot += value;
						$('.total').val(tot)
					})
					
				}
				// JIKA BELUM ADA DIKERANJANG, TAMBAHKAN DIKERANJANG LALU HITUNG TOTAL
				else{
				    $.ajax({
					url:'function/prosestransaksi.php',
					dataType:'html',
					data:{pilihproduk:kode},
					success:function(data){
						$('.table-keranjang tbody').append(data);
								
						// VALUE TOTAL	
						var tot=parseInt($('.total').val())
						var value=parseInt($('.td-total input').last().val())
						tot += value
						$('.total').val(tot)
							
					}

				})
				}			
			 	
			})

			//TOMBOL CLEAR  HAPUS SEMUA
			$('.btn-clear').click(function(){

				$('.table-keranjang tbody').children().remove();
				hapussemua()

			})

			//TOMBOL HAPUS, HAPUS SATU YANG DIPILIH DAN TOTAL DIKURANGI
			$('.table-keranjang').on('click','.btn-hapus',function(){

				
				//isi total 
				var tot=parseInt($('.total').val())
				var value=parseInt($(this).parent().siblings('.td-total').find('input').val())
				tot -= value
				$('.total').val(tot)

				$(this).parents("tr").remove();
				if($('.table-keranjang tbody').children().length == 0){
					hapussemua()
				}
				
			})

			// MENGGANTI QTY
			$('.table-keranjang').on('change','.td-qty input',function(){
				changeqty(this)
					var tot=0;
				$('.td-total input').each(function(){
					var value=parseInt($(this).val());
					tot += value;
					$('.total').val(tot)
				})
					
				
			})

			// AUTO FOCUS SAAT KLIK QTY
			.on('focus','.td-qty input',function(){
				$(this).select();
			})

			// BAYAR 
			$('.bayar').on('keyup mouseout',function(){
				var total=$('.total').val();
				var bayar=$(this).val();
				$('.kembali').val(bayar-total)
				
				if ($('input[name=kembali]').val()>= 0) {
					$('.btn-bayar').removeAttr('disabled')
				}
				else{
					$('.btn-bayar').attr('disabled','true')
				}
			})

			
		    // BTN BAYAR 
		    $('.btn-bayar').click(function(){
		    	var x=0
		    	
				$.ajax({
			      url:'function/prosestransaksi.php',
			      type:'post',
			      // ISI TBL PENJUALAN
			      data:$('.form-total,input[name=kodepenjualan]').serialize()
			      	   +"&tambahpenjualan=true"
			      
			   });

				$('.table-keranjang tbody tr').each(function(){
					var value=
						$('input[name=kodepenjualan]').serialize()+"&"+
						$(this).find('input').serialize()+
						"&tambahpenjualandetail=true"
					    

					$.ajax({
						url:'function/prosestransaksi.php',
						type:'post',
						// ISI TBL PENJUALAN DETAIL AMBIL DATA DARI SETIAP INPUT
						data:value
					});
				})
				
				
				$('.modal-print').modal('show');
				$('.modal-print').on('click','.btn-print',function(){
					location.reload();
					var kode=$('input[name=kodepenjualan]').val();
					window.open("templates/print.php?kodepenjualan="+kode,"","width=200,height=700");
				});
				$('.modal-print').on('hidden.bs.modal',function(){
					location.reload();
					
				});
				
			})


			
		
	</script>