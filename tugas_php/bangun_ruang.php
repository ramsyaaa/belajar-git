<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Ini tugas Bangun Ruang" ?></title>
</head>
<body>
    <?php
    $a = 10;
    $b =  $a ** 3;

    echo "1. Sebuah kubus diketahui memiliki panjang rusuk 10 cm. Berapakah volume kubus tersebut?<br>
    Jawab: V = r³ <br>
    V = $a ³ <br>
    Jadi Volume dari kubus tersebut adalah $b cm³.<br><hr>
    
    ";
    ?>

    <?php
    $a = 10 ** 2;
    $b = 30;
    $c = 3.14;
    $d = $a * $b * $c;

    echo "2. Sebuah mainan berbentuk tabung diketahui memiliki ukuran jari-jari 10 cm dan tinggi 30 cm. Berapakah volume tabung itu?<br>
    Jawab: V = π × r² × t <br>
    V = $c * $a * $b  <br>
    Jadi Volume dari tabung tersebut adalah $d cm³.<br><hr>
    
    ";
    ?>
    <?php
    $a = 10 ** 2;
    $b = 15;
    $c = (1/3) * $a * $b;

    echo "3. Sebuah mainan piramida berbentuk limas segiempat diketahui memiliki ukuran panjang sisi permukaannya 10 cm dan tinggi limas 15 cm. Berapakah volume piramida mainan tersebut?<br>
    Jawab: V = 1/3 x Luas Alas x Tinggi <br>
    V = 1/3 x (sisi x sisi) x Tinggi <br>
    V = 1/3 x $a x $b <br>
    V = $c cm³<br>
    Jadi Volume dari kubus tersebut adalah $c cm³.<br><hr>
    
    ";
    ?>
</body>
</html>