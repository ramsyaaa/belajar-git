<html>
<head>
	<title>Add Penerbit</title>
</head>
<style>
	.col{
		margin-top: 5px;
	}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<?php
	include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
?>
 
<body>
<div class="container">
    <h2>Form Tambah Data Penerbit</h2>
    <form action="add.php" method="post">
      <div class="row">
		<div class="col">
			<label for="id_penerbit" class="form-label">Id Penerbit</label>
			<input type="text" class="form-control" name="id_penerbit">
		</div>
      	<div class="col">
			<label for="nama_penerbit" class="form-label">Nama Penerbit</label>
			<input type="text" class="form-control" name="nama_penerbit">
      	</div>
	  </div>
	  <div class="row">
		<div class="col">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" name="email">
		</div>
        <div class="col">
	  		<label for="no_hp" class="form-label">No hp</label>
			  <input type="text" class="form-control" name="telp">
	  	</div>
      </div>
	
	  <div class="row">
		<div class="col">
			<label for="alamat" class="form-label">Alamat</label>
			<input type="text" class="form-control" name="alamat">
		</div>
	  </div><br>
	  <input type="submit" class="btn btn-primary" name="Submit" value="Tambah">
	  <a href="index.php" class="btn btn-success">Kembali</a>
	  
    </form>
  </div>

	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$id_penerbit = $_POST['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");
			
			header("Location:index.php");
		}
	?>
</body>
</html>