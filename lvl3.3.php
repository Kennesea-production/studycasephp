<html>
<body>
    <h3>Panjang Sisi Sebuah Segitiga</h3>
    <form name="form1" action="lvl3.3.php" method="POST">
    <input type="text" name="panjang1" class="panjang1" placeholder="Masukan Angka Pertama">
    <input type="text" name="panjang2" class="panjang2" placeholder="Masukan Angka Kedua">
    <input type="text" name="panjang3" class="panjang3" placeholder="Masukan Angka Ketiga">
    <br>
    <br>
    <input type="submit" name="hitung" value="hitung">
    <br>

    <?php
    if(isset($_POST['hitung'])){
        $a=$_REQUEST['panjang1'];
        $b=$_REQUEST['panjang2'];
        $c=$_REQUEST['panjang3'];
      
        if($a==$b && $b==$c) {
            echo "SAMA SISI";
        }elseif($a==$b && $b!=$c || $a==$c && $c!=$b || $c==$b && $b!=$a) {
            echo "SAMA KAKI";
        }elseif($a!=$b && $b!=$c && $a!=$c) {
            echo "SEMBARANG";
        }
    }
     ?>


    <br><br><br>
    <a href="lvl3.2.php"><-Level Sebelumnya </a>

</body>
</html>