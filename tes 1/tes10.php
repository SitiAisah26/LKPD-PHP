<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $listUsia = [12,15, 17, 20, 25, 30, 35, 40, 45, 50];
    $dewasa = 0;
    $anakAnak = 0;

    foreach($listUsia as $umur) {
        if($umur >= 17) {
            $dewasa++;
        } else {
            $anakAnak++;
        }
    }

    echo "List Usia : " . implode(", ", $listUsia) . "<br>";
    echo "Jumlah Kategori Dewasa : $dewasa <br>";
    echo "Jumlah Kategori Anak-anak : $anakAnak";
?>
</body>
</html>