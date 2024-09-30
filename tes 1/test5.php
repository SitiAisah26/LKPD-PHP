<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    $kelompok1 = array_intersect($bil1, $bil2) ;
    $kelompok2 = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));

    echo " Bilangan yang ada di kedua variabel : " . implode("," , $kelompok1) . "<br>" ;
    echo " Bilangan yang tidak ada di kedua variabel : " . implode("," , $kelompok2) . "<br>";
    ?>
</body>
</html>