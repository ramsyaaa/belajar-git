<html>
<head>
	<title>Edit Penerbit</title>
</head>
<style>
	.col{
			margin-top: 5px;
		}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
	$id_katalog = $_GET['id_katalog'];
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog WHERE id_katalog ='$id_katalog'");
    

    while($katalog_data = mysqli_fetch_array($katalog))
    {
    	$id_katalog = $katalog_data['id_katalog'];
    	$nama_katalog = $katalog_data['nama_katalog'];
    }
?>
 
<body>
<div class="container">
    <h2>Form Ubah Data Katalog</h2>
    <form action="edit.php?id_katalog=<?php echo $id_katalog; ?>" method="post">
      <div class="row">
		<div class="col">
			<label for="id_katalog" class="form-label">Id Katalog</label>
			<input type="text" class="form-control" name="id_katalog" value="<?php echo $id_katalog ?>" disabled>
		</div>
      	<div class="col">
			<label for="nama_katalog" class="form-label">Nama Katalog</label>
			<input type="text" class="form-control" name="nama_katalog" value="<?php echo $nama_katalog ?>">
      	</div>
	  </div><br>
	  <input type="submit" class="btn btn-primary" name="update" value="Perbarui">
	  <a href="index.php" class="btn btn-success">Kembali</a>
	  
    </form>
</div>
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_katalog = $_GET['id_katalog'];
			$nama_katalog = $_POST['nama_katalog'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE katalog SET nama_katalog = '$nama_katalog' WHERE id_katalog = '$id_katalog';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>