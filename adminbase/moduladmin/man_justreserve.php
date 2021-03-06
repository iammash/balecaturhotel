<?php include "../fungsi/function_transaksi.php"; ?>
<style type="text/css">
	.sizing-borderpanels{height: 400px; } .main-containerinner{margin-top: 20px; } 
</style>
<div class="row">
	<div class="col-lg-12">
		<div class="font-sizerheading">
			<h1 class="page-header">Reservasi Offline / Manajemen Transaksi Check-in</h1>
			<div class="row">
				<div class="col-md-12"> 
					<ul class="tabs-menu">
						<li><a href="<?php echo "homeadmin.php?modul=man_willbe_checkin"?>">Reserve will be checkin / Sudah Pesan ingin checkin</a></li>
						<li class="reserver"><a href="<?php echo "homeadmin.php?modul=man_justreserve" ?>">Just Reserve / Hanya pesan</a></li>
						<li><a href="<?php echo "homeadmin.php?modul=man_checkin_now" ?>">Checkin Now / Checkin Sekarang</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="panel panel-default sizing-borderpanels">
					<div class="col-md-4" style="padding:20px;">
					<ul class="list-unstyled">
						<li>Check Ketersediaan Kamar Untuk Pemesanan Jauh Hari</li>
					</ul>
						<form action="homeadmin.php?modul=man_available_room" method="post" enctype="multipart/form-data">
							<section class="main-containerinner">
								<div>
									<input type="text" name="checkin" id="datepicker-example7-start" class="form-control" placeholder="Checkin" required="">
								</div>	
								<div>
									<input type="text" name="checkout" id="datepicker-example7-end" class="form-control" placeholder="Checkout" required="">
								</div>
								<div class="row">
									<div class="col-xs-6">
									    <div>
									        <input type="number" name="berapa_orang" placeholder="Berapa orang" class="form-control" min="1">
									    </div>
									</div>
									<div class="col-xs-6">
									    <div class="form-group">
									        <input type="number" name="berapa_kamar" placeholder="Berapa kamar" class="form-control" min="1">
									    </div>
									</div>
								</div>
							</section>
							<button type="submit">Check Ketersediaan</button>
						</form>
					</div>
					<div class="col-lg-12 panel-information" style="padding:20px;">
						<label>Information :</label>
						<p>1.Ketentuan transaksi checkin jika tamu telat melakukan checkin sesuai tanggal yang di minta maka transaksi tidak dapat dilanjutkan atau diaanggap hangus,</br>
						jika transaksi tanggal checkin tepat pada waktu yang diminta tetapi tamu yang datang hanya telat beberapa menit, hal tersebut masih dianggap wajar.</p>
					</div>
				</div>
			</div>
		</div>
	</div>		
</div>		