<html>
<head>
	<title>Edit Pengarang</title>
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
	$id_pengarang = $_GET['id_pengarang'];
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang WHERE id_pengarang ='$id_pengarang'");
    

    while($pengarang_data = mysqli_fetch_array($pengarang))
    {
    	$id_pengarang = $pengarang_data['id_pengarang'];
    	$nama_pengarang = $pengarang_data['nama_pengarang'];
    	$email = $pengarang_data['email'];
    	$telp = $pengarang_data['telp'];
		$alamat = $pengarang_data['alamat'];
    }
?>
 
<body>
<div class="container">
    <h2>Form Ubah Data Pengarang</h2>
    <form action="edit.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post">
      <div class="row">
		<div class="col">
			<label for="id_pengarang" class="form-label">Id Pengarang</label>
			<input type="text" class="form-control" name="id_pengarang" value="<?php echo $id_pengarang ?>" disabled>
		</div>
      	<div class="col">
			<label for="nama_pengarang" class="form-label">Nama Pengarang</label>
			<input type="text" class="form-control" name="nama_pengarang" value="<?php echo $nama_pengarang ?>">
      	</div>
	  </div>
	  <div class="row">
		<div class="col">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" value="<?php echo $email ?>">
		</div>
        <div class="col">
	  		<label for="no_hp" class="form-label">No hp</label>
			  <input type="text" class="form-control" name="telp" value="<?php echo $telp ?>">
	  	</div>
      </div>
	
	  <div class="row">
		<div class="col">
			<label for="alamat" class="form-label">Alamat</label>
			<input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>">
		</div>
	  </div><br>
	  <input type="submit" class="btn btn-primary" name="update" value="Perbarui">
	  <a href="index.php" class="btn btn-success">Kembali</a>
	  
    </form>
</div>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_pengarang = $_GET['id_pengarang'];
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id_pengarang';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>