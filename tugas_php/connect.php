<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "perpus";

    $conn = mysqli_connect($host, $username, $password, $database);

    $sql = "SELECT * FROM `buku` ORDER BY `id_pengarang` ASC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            echo "Buku : " . $row ["isbn"] . " " . $row ["judul"] . " " . $row["id_pengarang"] . "<br>";
        }
    }else{
        echo "Tidak ada Data";
    }
    $conn->close();

?>

<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "perpus";

    $conn = mysqli_connect($host, $username, $password, $database);
    
    $sql = "SELECT * FROM `anggota` WHERE id_anggota NOT IN (SELECT id_anggota FROM peminjaman)";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "Anggota : ". $row["id_anggota"] . " " . $row["nama"] . " " . $row["username"] . "<br>";
            }
        }else{
            echo "Tidak ada Data";
    }
    $conn->close();
?>