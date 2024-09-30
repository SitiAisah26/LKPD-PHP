<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $student = [
        [
            'nama' => 'Shayma',
            'nilai' => [80, 78, 82, 78, 88], 
        ],
        [
            'nama' => 'Kika',
            'nilai' => [86, 70, 80, 85, 81],
        ],
        [
            'nama' => 'Ayu',
            'nilai' => [83, 91, 70, 73, 81],
        ],
        [
            'nama' => 'Shapira',
            'nilai' => [89, 85, 84, 86, 88],
        ],
    ];
 
    foreach( $student as $siswa) {
        $rataRata = array_sum($siswa['nilai']) / count($siswa['nilai']);
        echo $siswa['nama'] . " = " . round($rataRata, 2) . "<br>";
    }
    ?>
</body>
</html>