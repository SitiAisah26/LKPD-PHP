<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <label for="datang">Jam Datang :</label>
            <input type="number" name="datang" id="datang"></input>
            <br>
            <br>
            <label for="pulang">Jam Pulang : </input>
            <input type="number" name="pulang" id="pulang"></input>
            <br>
            <br>
            <button type="submit" name="kirim">Hitung</button> 
            </form>

    <?php
        if(isset ($POST['kirim'])) {
            $jamdatang = $POST ['datang'];
            $jampulang = $POST ['kirim'];
            $hasil = $jampulang - $jamdatang;

            $jamnormal = 8;
            $kompensasi = 0;
             
            $jamlembur = $hasil - $jamnormal;
            if($jamlembur > 0) {
                $kompensasi += 50000;
            
                if($jamlembur > 1) {
                    $kompensasi +=($lembur - 1) * 25000;
                }
            }
            echo "Lama Kerja : " . ($hasil);
            echo "<br>";
            echo "Jam Lebih : " . ($jamlembur);
            echo "<br>";
            echo "Jumlah Kompensasi : Rp. " .number_format($kompensasi, 0, ',', '.');
        }
    ?>
    </center>

</body>
</html>