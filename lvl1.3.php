<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study kasus</title>
</head>
<body>
    <h3>Mencari Angka Terbesar dari 4 Angka</h3>
    <form name="form1" action="lvl1.3.php" method="POST">
    <input type="text" name="angka1" class="angka" placeholder="Masukan Angka Pertama">
    <input type="text" name="angka2" class="angka" placeholder="Masukan Angka Kedua">
    <input type="text" name="angka3" class="angka" placeholder="Masukan Angka Ketiga">
    <input type="text" name="angka4" class="angka" placeholder="Masukan Angka Keempat">
    <br>
    <br>
    <input type="submit" name="cetak" value="CETAK">
    <br>

    <?php
    if(isset($_POST["cetak"])){
    $bil1=$_REQUEST["angka1"];
    $bil2=$_REQUEST["angka2"];
    $bil3=$_REQUEST["angka3"];
    $bil4=$_REQUEST["angka4"];

    if( $bil2 > $bil1){
        $bil1 = $bil2;
    }

    if( $bil3 > $bil1){
        $bil1 = $bil3;
    }
    if( $bil4 > $bil1){
        $bil1 = $bil4;
    }
   
    echo "Angka Terbesar Adalah " . $bil1;
}
    ?>

    <br><br><br>

    <a href="lvl1.2.php"><-Level Sebelumnya </a> <br> <br>
    <a href="lvl2.1.php"> Level Selanjutnya -></a>
</body>
</html>