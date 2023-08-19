<html>
<head>
	<title>Add Buku</title>
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
    <h2>Form Tambah Data Buku</h2>
    <form action="add.php" method="post">
      <div class="row">
		<div class="col">
			<label for="isbn" class="form-label">ISBN</label>
			<input type="text" class="form-control" name="isbn">
		</div>
      	<div class="col">
			<label for="judul" class="form-label">Judul</label>
			<input type="text" class="form-control" name="judul">
      	</div>
	  </div>
	  <div class="row">
		<div class="col">
			<label for="tahun" class="form-label">Tahun</label>
			<input type="text" class="form-control" name="tahun">
		</div>
        <div class="col">
	  		<label for="penerbit" class="form-label">Penerbit</label>
			<select name="id_penerbit" class="form-control">
				<?php 
					while($penerbit_data = mysqli_fetch_array($penerbit)) {         
						echo "<option value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
					}
				?>
			</select>
	  	</div>
      </div>
	  
	  <div class="row">
		<div class="col">
			<label for="pengarang" class="form-label">Pengarang</label>
			<select name="id_pengarang" class="form-control">
				<?php 
				while($pengarang_data = mysqli_fetch_array($pengarang)) {         
						echo "<option value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
					}
				?>
			</select>
		</div>
		<div class="col">
			<label for="katalog" class="form-label">Katalog</label>
			<select name="id_katalog" class="form-control">
				<?php 
					while($katalog_data = mysqli_fetch_array($katalog)) {         
						echo "<option value='".$katalog_data['id_katalog']."'>".$katalog_data['nama_katalog']."</option>";
					}
				?>
			</select>
	  	</div>
	  </div>
	  <div class="row">
		<div class="col">
			<label for="qty_stok" class="form-label">Qty Stok</label>
			<input type="text" class="form-control" name="qty_stok">
		</div>
		<div class="col">
			<label for="harga_pinjam" class="form-label">Harga Pinjam</label>
			<input type="text" class="form-control" name="harga_pinjam">
		</div>
	  </div><br>
	  <input type="submit" class="btn btn-primary" name="Submit" value="Tambah">
	  <a href="index.php" class="btn btn-success">Kembali</a>
	  
    </form>
  </div>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$isbn = $_POST['isbn'];
			$judul = $_POST['judul'];
			$tahun = $_POST['tahun'];
			$id_penerbit = $_POST['id_penerbit'];
			$id_pengarang = $_POST['id_pengarang'];
			$id_katalog = $_POST['id_katalog'];
			$qty_stok = $_POST['qty_stok'];
			$harga_pinjam = $_POST['harga_pinjam'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");
			
			header("Location:index.php");
		}
	?>
</body>
</html>