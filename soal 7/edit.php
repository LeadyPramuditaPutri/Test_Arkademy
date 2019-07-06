<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ARKADEMY BOOTCAMP BATCH 11</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="index.php">Data Karyawan</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="index.php">Data Karyawan</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Master Data</a></li>
					<li><a href="add.php">Tambah Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Halaman Utama &raquo; Edit Data</h2>
			<hr />
			
			<?php
			$data = $_GET['Name'];
			$query = "SELECT nama.name AS Name , hobi.name AS Hobby, kategori.name AS Category from nama, hobi, kategori
		where nama.id_hobby=hobi.id and hobi.id_category= kategori.id and nama.Name='$data'";
     	 if(mysqli_num_rows($query) == 0){
			header("Location: index.php");
		}else{
			$data = mysqli_fetch_assoc($query);
		}
		if(isset($_POST['save'])){
			$name		     = $_POST['Name'];
			$hobi		     = $_POST['Hobby'];
			$category		 = $_POST['Category'];

				
		$update = mysqli_query($koneksi, "UPDATE nama, hobi, kategori SET nama.name='$name', hobi.name='$hobi', kategori.name='$category' where nama.name='$data'"  or die(mysqli_error()));
		if($update){
				header("Location: edit.php?Name=".$data."&pesan=sukses");
		}else{
				echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
			}
		}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
			}
		
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA</label>
					<div class="col-sm-2">
						<input type="text" name="Name" value="<?php echo $data['Name']; ?>" class="form-control" placeholder="Name" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">HOBBY</label>
					<div class="col-sm-4">
						<input type="text" name="Hobby" value="<?php echo $data ['Hobby']; ?>" class="form-control" placeholder="Hobby" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">CATEGORY</label>
					<div class="col-sm-4">
						<input type="text" name="Category" value="<?php echo $data ['Category']; ?>" class="form-control" placeholder="Category" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
						<a href="index.php" class="btn btn-sm btn-danger">Batal</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})

	</script>
	
	</body>
</html>
