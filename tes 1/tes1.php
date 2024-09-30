<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 1</title>
</head>
<body>
<center>
    <form action="" method="post" >
        <input type="text"  id="input-teks" name="teks" required>
        <button type="submit">Cek Angka</button>
    </form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $teks = $_POST["teks"];
    
    echo "<p>". ceknilai($teks). "</p>";
}

function ceknilai($teks){
$result = preg_replace('/\D/', '', $teks); 

if($result) {
    $array = str_split($result);
    $hasil= "Teks mengandung angka : " . implode(',', $array);
    
} else {
    $hasil ="Teks tidak mengandung angka";
}
return $hasil;
}
?>
</center>
</body>
</html>