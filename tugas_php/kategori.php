<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Ini tugas Kategori" ?></title>
</head>
<body>
<p> WHO, kategori standar berat badan ideal pria dan wanita dewasa berdasarkan BMI adalah sebagai berikut:</p>
<ol>
    <li> 18,5 berarti berat badan kurang (underweight).</li>
    <li>Antara 18,5 - 24,9 berarti berat badan normal</li>
    <li>Antara 25-29,9 berarti berat badan berlebih (overweight).</li>
    <li>Di atas 30 berarti obesitas</li>
</ol>
<br>
<br>

<?php
    $tinggi = 1.7;
    $tinggi1 = $tinggi ** 2;
    $berat = 64;
    $hasil = $berat / $tinggi1;

    echo "Junaeidy memiliki berat badan 170 cm ($tinggi m) dan berat badan $berat kg, maka cara menghitung BMI adalah sebagai berikut:<br>
    BMI: $berat : ($tinggi * $tinggi) <br>
    BMI: $berat : $tinggi1 = $hasil<br><br>
    
    ";
    if ($hasil <= 24.9){
        echo "Halo, Junaeidy nilai BMI anda adalah $hasil , Anda termasuk sedang";
    }elseif ($hasil == 18.5 ) {
        echo "Halo, Junaeidy nilai BMI anda adalah $hasil , Anda termasuk kurus";
    }else{
        echo "Halo, Junaeidy nilai BMI anda adalah $hasil , Anda termasuk gemuk ";
    }
    ?>

</body>
</html>