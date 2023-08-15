<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Daftar Nilai</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav><br><br>
    <?php
        $array = file_get_contents('data.json');
        $data = json_decode($array, true);
        
        echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>No</th>';
        echo '<th>Nama</th>';
        echo '<th>Tanggal Lahir</th>';
        echo '<th>Umur</th>';
        echo '<th>Alamat</th>';
        echo '<th>Kelas</th>';
        echo '<th>Nilai</th>';
        echo '<th>Hasil</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($data as $row) {
        echo '<tr>';
        echo '<td>' . $row['no'] . '</td>';
        echo '<td>' . $row['nama'] . '</td>';
        echo '<td>' . $row['tanggal_lahir'] . '</td>';
        echo '<td>' . $row['tanggal_lahir'] . '</td>';
        echo '<td>' . $row['alamat'] . '</td>';
        echo '<td>' . $row['kelas'] . '</td>';
        echo '<td>' . $row['nilai'] . '</td>';
        echo '<td>' . $row['hasil'] . '</td>';
        echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';

        
    ?>
</body>
</html>