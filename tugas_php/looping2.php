<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:300px;
            text-align:center;
            margin:auto;
        }
        table th {
            background-color: #95a5a6;
        }
    </style>
</head>
<body> 
        <table border="1" style="margin-left: 40%;">
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Kelas
                </th>
            </tr>
            <?php for ($i = 1, $y = 10; $y >= 1, $i <= 10;) { {?>
            <tr>
                <td>
                    <?php echo "$i"; ?>
                </td>
                <td>
                    <?php echo "Nama ke $i"; ?>
                    <?php $i++;} ?>
                </td>
                <td>
                    <?php echo "Kelas ke $y"; ?>
                    <?php $y--; } ?>
                </td>
            </tr>
            
            
        </table>
</body>
</html>