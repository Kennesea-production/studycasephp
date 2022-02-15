<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study kasus</title>
</head>
<body>
    <h3>Mencari Angka Terbesar dari 3 Angka</h3>
    <form name="form1" action="lvl2.2.php" method="POST">
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

    for ($i = 0; $i <= $bil1; $i++) {
        echo $i . " ";
    } echo "<br>";
    for ($j = 0; $j <= $bil2; $j++) {
        echo $j . " ";
    } echo "<br>";
    for ($k = 0; $k <= $bil3; $k++) {
        echo $k . " ";
    } echo "<br>" . "<br>";
   

    if ($bil1 > $bil2 && $bil1 > $bil3) {
        echo "Angka Terbesar Adalah " . $bil1;
    }
    elseif ($bil2 > $bil3 && $bil2 > $bil1) {
        echo "Angka Terbesar Adalah " . $bil2;
    }
    elseif ($bil3 > $bil1 && $bil3 > $bil2) {
        echo "Angka Terbesar Adalah " . $bil3;
    }

}


    ?>


    <br><br><br>
    <a href="lvl2.1.php"><-Level Sebelumnya </a> <br> <br>
    <a href="lvl3.1.php"> Level Selanjutnya -></a>
</body>
</html>