<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study kasus</title>
</head>
<body>
    <h3>Urutan angka dari terkecil hingga terbesar</h3>
    <form name="form1" action="lvl3.1.php" method="POST">
    <input type="text" name="angka1" class="angka" placeholder="Masukan Angka Pertama">
    <input type="text" name="angka2" class="angka" placeholder="Masukan Angka Kedua">
    <input type="text" name="angka3" class="angka" placeholder="Masukan Angka Ketiga">
    <br>
    <br>
    <input type="submit" name="cetak" value="CETAK">
    <br>

    <?php
    if(isset($_POST["cetak"])){
    $bil1=$_REQUEST["angka1"];
    $bil2=$_REQUEST["angka2"];
    $bil3=$_REQUEST["angka3"];


    if ($bil1 < $bil2 && $bil2 < $bil3) {
        echo "Angka dari kecil sampai Terbesar Adalah " . $bil1 ." " . $bil2 . " " . $bil3;
    }
    elseif ($bil1 < $bil3 && $bil3 < $bil2) {
        echo "Angka dari kecil sampai Terbesar Adalah " . $bil1 ." " . $bil3 . " " . $bil2;
    }
    elseif ($bil2 < $bil3 && $bil3 < $bil1) {
        echo "Angka dari kecil sampai Terbesar Adalah " . $bil2 ." " . $bil3 . " " . $bil1;
    }
    elseif ($bil2 < $bil1 && $bil1 < $bil3) {
        echo "Angka dari kecil sampai Terbesar Adalah " . $bil2 ." " . $bil1 . " " . $bil3;
    }
    elseif ($bil3 < $bil1 && $bil1 < $bil2) {
        echo "Angka dari kecil sampai Terbesar Adalah " . $bil3 ." " . $bil1 . " " . $bil2;
    }
    elseif ($bil3 < $bil2 && $bil2 < $bil1) {
        echo "Angka dari kecil sampai Terbesar Adalah " . $bil3 ." " . $bil2 . " " . $bil1;
    }

}


    ?>


    <br><br><br>
    <a href="lvl2.2.php"><-Level Sebelumnya </a> <br> <br>
    <a href="lvl3.2.php"> Level Selanjutnya -></a>
</body>
</html>