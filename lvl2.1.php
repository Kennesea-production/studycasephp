<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study kasus</title>
</head>
<body>
    <h3>Angka terbesar dari menginput 100 bilangan</h3>
    <form name="form1" action="lvl2.1.php" method="POST">
    <input type="text" name="angka1" class="angka" placeholder="Masukan Angka Pertama">
    <br>
    <br>
    <input type="submit" name="cetak" value="CETAK">
    <br>

    <?php
    if(isset($_POST["cetak"])){
    $bil1=$_REQUEST["angka1"]; 

    for ($i = 0; $i <= $bil1; $i++) {
        echo $i . " ";
    }
    
    
    echo "<br>" . "<br>" . "Angka Terbesar Adalah " . $bil1;
}
    ?>


    <br><br><br>
    <a href="lvl1.3.php"><-Level Sebelumnya </a> <br> <br>
    <a href="lvl2.2.php"> Level Selanjutnya -></a>
</body>
</html>