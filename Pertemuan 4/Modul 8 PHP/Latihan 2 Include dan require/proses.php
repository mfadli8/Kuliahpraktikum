<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Pengeksekusi</title>
</head>
<body>
<?php
    include "inc.php";
    echo $angka;
    echo "<br>";
    if ($angka==100){
        echo "Memuaskan";
    }elseif ($angka<100&&$angka>=85) {
        echo "Sangat Baik";
    }elseif ($angka<85&&$angka>=70) {
        echo "Baik";
    }elseif ($angka<70&&$angka>=55) {
        echo "Cukup";
    }elseif ($angka<55&&$angka>=0) {
        echo "Kurang"; 
}
?>
</body>
</html>