<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Function</title>
</head>
<body>
    <?php
        function luas_layangan($setengah, $d1, $d2){
            $hasil = $setengah * $d1 * $d2;
            echo "1. Sebuah layang-layang diketahui memiliki ukuran diagonal 8 cm dan 10 cm, berapakah luasnya?<br>
            Jawab: Luas = ½ * d1 * d2 <br>
            Luas = ½ * $d1 cm * $d2 cm = $hasil cm² <br>
            Jadi luas dari jajar genjang tersebut adalah $hasil cm².<br><hr>
            ";
        }
        luas_layangan(0.5, 8 , 10);
    ?>
    <?php
        function persegi_panjang($panjang, $tinggi){
            $hasil = $panjang * $tinggi;
            echo "2. Tono membeli kertas berbentuk persegi panjang dengan panjang 12 cm dan lebar 5 cm. Berapakah luas kertas yang dibeli Tono tersebut?<br>
            Jawab: Luas = P * L <br>
            Luas = $panjang cm * $tinggi cm = $hasil cm² <br>
            Jadi luas dari jajar genjang tersebut adalah $hasil cm².<br><hr>
            ";
        }
        persegi_panjang(12, 5);
    ?>

    <?php
        function segitiga($setengah, $a, $t){
            $hasil = $setengah * $a * $t;
            echo "3. Sebuah segitiga memiliki ukuran alas 9 cm dan tinggi 4 cm. Berapakah luas dari segitiga tersebut?<br>
            Jawab: Luas = ½ * a * t <br>
            Luas = ½ * $a cm * $t cm = $hasil cm² <br>
            Jadi luas dari jajar genjang tersebut adalah $hasil cm².<br><hr>
            ";
        }
        segitiga(0.5, 9, 4);
    ?>

    <?php
        function jajar_genjang($alas, $tinggi){
            $hasil = $alas * $tinggi;
            echo "4. Berapakah luas dari jajar genjang jika diketahui memiliki alas 14 cm dan tinggi 5 cm?<br>
            Jawab: Luas = Alas * Tinggi <br>
            Luas = $alas cm * $tinggi cm = $hasil cm² <br>
            Jadi luas dari jajar genjang tersebut adalah $hasil cm².<br><hr>
            ";
        }
        jajar_genjang(14, 5);
    ?>

    <?php
        function belah_ketupat($setengah, $d1, $d2){
            $hasil = $setengah * $d1 * $d2;
            echo "5. Hitunglah luas belah ketupat yang memiliki ukuran diagonal 18 cm dan 10 cm.<br>
            Jawab: Luas = P * L <br>
            Luas = ½ * $d1 cm * $d2 cm = $hasil cm² <br>
            Jadi luas dari jajar genjang tersebut adalah $hasil cm².<br><hr>
            ";
        }
        belah_ketupat(0.5, 18, 10);
    ?>
    <?php
        function kubus($a){
            $hasil = $a * $a *$a;
            echo "6. Sebuah kubus diketahui memiliki panjang rusuk 10 cm. Berapakah volume kubus tersebut?<br>
            Jawab: V = r³ <br>
            V = $a ³ <br>
            Jadi Volume dari kubus tersebut adalah $hasil cm³.<br><hr>
            ";
        }
        kubus(10);
    ?>

    <?php
        function tabung($vol, $a, $b){
            $hasil = $vol * $a * $b;
            echo "7. Sebuah mainan berbentuk tabung diketahui memiliki ukuran jari-jari 10 cm dan tinggi 30 cm. Berapakah volume tabung itu?<br>
            Jawab: V = π * r² * t <br>
            V = $vol * $a * $b  <br>
            Jadi Volume dari tabung tersebut adalah $hasil cm³.<br><hr>
            ";
        }
        tabung(3.14, 10, 30);
    ?>

    <?php
        function limas($sepertiga, $alas, $tinggi){
            $hasil = $sepertiga * $alas * $tinggi;
            echo "8. Sebuah mainan piramida berbentuk limas segiempat diketahui memiliki ukuran panjang sisi permukaannya 10 cm dan tinggi limas 15 cm. Berapakah volume piramida mainan tersebut?<br>
            Jawab: V = 1/3 x Luas Alas x Tinggi <br>
            V = 1/3 x (sisi x sisi) x Tinggi <br>
            V = 1/3 x $alas x $tinggi <br>
            V = $hasil cm³<br>
            Jadi Volume dari kubus tersebut adalah $hasil cm³.<br><hr>
            ";
        }
        limas(1/3, 10, 15);
    ?>

    <?php
        function kubus1($a){
            $hasil = $a * $a *$a;
            echo "6. Sebuah kubus diketahui memiliki panjang rusuk 50 cm. Berapakah volume kubus tersebut?<br>
            Jawab: V = r³ <br>
            V = $a ³ <br>
            Jadi Volume dari kubus tersebut adalah $hasil cm³.<br><hr>
            ";
        }
        kubus1(50);
    ?>
    <?php
        function tabung2($vol, $a, $b){
            $hasil = $vol * $a * $b;
            echo "7. Sebuah mainan berbentuk tabung diketahui memiliki ukuran jari-jari 10 cm dan tinggi 30 cm. Berapakah volume tabung itu?<br>
            Jawab: V = π * r² * t <br>
            V = $vol * $a * $b  <br>
            Jadi Volume dari tabung tersebut adalah $hasil cm³.<br><hr>
            ";
        }
        tabung2(3.14, 15, 20);
    ?>
</body>
</html>