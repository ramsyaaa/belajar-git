<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Looping 1</title>
</head>
<body>
    <?php
        $i = 0;
        while ($i <= 8) {
        $total = "";
        for ($j = 0; $j <= $i; $j++) {
            $total .= $j;
        }
        echo $total . "<br>";
        $i++;
        }
    ?>
</body>
</html>