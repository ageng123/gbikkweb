<?php include_once("koneksi.php");?>
<?php
session_start();
if(empty($_SESSION['username'])){
            header("location:login/index.php");
}else{
           
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hallo <?php echo $_SESSION['username'];?></title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990" />
		<!-- END STYLESHEETS -->
		<script type="text/javascript">
			$(function(){
				$("#example1").DataTable();
			});
			$(function(){
				$('#gallery a').lightBox();
			});

		</script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">
		<?php include 'header.php' ?>
		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header ">
						<ol class="breadcrumb">
						</ol>
					</div>
					<div class="section-body contain-lg">

						<!-- BEGIN VERTICAL FORM FLOATING LABELS -->
						<div class="row">
							
							<div class="col-lg-1 col-md-4">
							</div><!--end .col -->
							<div class="col-lg-offset-2 col-md-6">
								<form class="form" method="post" enctype="multipart/form-data" action="aksikaryawan.php">
									<div class="card">
										<div class="card-head style-primary">
											<header>Create Member Account</header>
										</div>
										<div class="card-body floating-label">
											<br/>
													
													<div class="form-group">
														<input type="text" style="text-transform:uppercase" name="nama" class="form-control" id="Username2" required>
														<label for="Username2">Nama Karyawan</label>
													</div>
													<div class="form-group">
														<input type="text" style="text-transform:uppercase"	name="alamat" class="form-control" id="Password2" required>
														<label for="Password2">Alamat</label>
													</div>
													<div class="form-group">
														<input type="text"  style="text-transform:uppercase" name="TempatLahir" class="form-control" id="Firstname2" required placeholder="Tempat Lahir">
														<input type="date" name="TanggalLahir" class="form-control" id="Firstname2" required placeholder="Tanggal Lahir" >
													</div>

													<div class="form-group">
														<label>Tanggal Terdaftar</label>
														<input type="date" name="terdaftar" class="form-control" id="Firstname2" required >
													</div>
													
													<div class="form-group">
														<input type="nominal" name="gaji" class="form-control" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
														<label for="Username2">Gaji</label>
													</div>
													<div class="form-group">
																		<label class="control-label">Foto</label>
																		<div class="row">
																				<div class="col-md-6"><input type="file" class="form-control" required placeholder="Required*" name="image" onchange="PreviewImage();"></div>
																		</div>
													</div>
													<input type="hidden" class="form-control" name="InputBy" value=<?php echo $_SESSION['username'] ?>>
													<input type="hidden" class="form-control" name="value" value='1'>
										</div><!--end .card-body -->
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<button type="submit" name="input" value="Submit" class="btn btn-flat btn-primary ink-reaction">Save</button>
											</div>
										</div>
									</div><!--end .card -->
								</form>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END VERTICAL FORM FLOATING LABELS -->
						
						<div class="row">
							<div class="col-md-12">
								<h1>Data Member Account</h1>
								<a href="printformkaryawan.php"><button>Export Data</button></a>
							</div><!--end .col -->
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable1" class="table  table-hover">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Alamat</th>
												<th>Foto</th>
												<th>Tempat Tanggal Lahir</th>
												<th>Terdaftar</th>
												<th>Gaji</th>
												<th>InputBy</th>
												<th>InputAt</th>
												<th>Action</th>

											</tr>
										</thead>
										<tbody>
											<?php 
									            $query_mysql = mysqli_query($db_link, "SELECT * FROM karyawan ORDER BY id_karyawan DESC");
									            while($data = mysqli_fetch_array($query_mysql)){
									            ?>
									            <tr>
									            <td><?php echo strtoupper($data['nama']); ?></td>
									            <td><?php echo strtoupper($data['alamat']); ?></td>
									            <?php 
									            	echo "
									            	<td>
									            		<div id='gallery a'>
									            			<a href='images/$data[image]' target='_blank'>
									            			<img width='60' src='images/$data[image]'></img>
									            			</a>
									            		</div>
									            	</td>

									            "
									            ?>
									            <td><?php echo strtoupper($data['ttl']); ?></td>
									            <td><?php echo $data['terdaftar']; ?></td>
									            <td><?php echo "Rp ".number_format($data['gaji'],2,',','.') ?></td>
									            <td><?php echo $data['InputBy']; ?></td>
									            <td><?php echo $data['InputAt']; ?></td>
									            <td>
									            	
									            		<a href='deletekaryawan.php?id_karyawan=<?php echo $data['id_karyawan'] ?>' onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
									            </td>
									            <!--<td>
									              <a class="edit" href="edit.php?id=<?php echo $data['id_transaksi']; ?>">Edit</a> |
									              <a class="hapus" href="hapus.php?id=<?php echo $data['id_transaksi']; ?>">Hapus</a>         
									            </td>-->
									          </tr>
									        <?php } ?>
										</tbody>
									</table>
								</div><!--end .table-responsive -->
							</div><!--end .col -->
						</div><!--end .row -->
					</div>
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->
			<?php include 'menubar.php' ?>

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="assets/js/libs/spin.js/spin.min.js"></script>
		<script src="assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="assets/js/libs/moment/moment.min.js"></script>
		<script src="assets/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
		<script src="assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="assets/js/core/source/App.js"></script>
		<script src="assets/js/core/source/AppNavigation.js"></script>
		<script src="assets/js/core/source/AppOffcanvas.js"></script>
		<script src="assets/js/core/source/AppCard.js"></script>
		<script src="assets/js/core/source/AppForm.js"></script>
		<script src="assets/js/core/source/AppNavSearch.js"></script>
		<script src="assets/js/core/source/AppVendor.js"></script>
		<script src="assets/js/core/demo/Demo.js"></script>
		<script src="assets/js/core/demo/DemoFormLayouts.js"></script>
		<script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="assets/js/libs/spin.js/spin.min.js"></script>
		<script src="assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="assets/js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="assets/js/core/source/App.js"></script>
		<script src="assets/js/core/source/AppNavigation.js"></script>
		<script src="assets/js/core/source/AppOffcanvas.js"></script>
		<script src="assets/js/core/source/AppCard.js"></script>
		<script src="assets/js/core/source/AppForm.js"></script>
		<script src="assets/js/core/source/AppNavSearch.js"></script>
		<script src="assets/js/core/source/AppVendor.js"></script>
		<script src="assets/js/core/demo/Demo.js"></script>
		<script src="assets/js/core/demo/DemoTableDynamic.js"></script>
		<script type="text/javascript" src="my.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>