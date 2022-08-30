<html>

<head>
    <title>Tutorial Membuat Script PHP Menghitung Volume Balok</title>
</head>

<body>
    <h2>Form Hitung Luas Volume Balok Dengan PHP</h2>
    <h3>Isi Data:</h3>
    <?php
        function luas_volume($panjang, $lebar, $tinggi){

          $luas_volumebalok = $panjang * $lebar* $tinggi;

            echo "Hasil hitung volume balok adalah sebagai berikut:<br />";
            echo "Diketahui;<br />";
            echo "Panjang = $panjang<br />";
            echo "Lebar = $lebar<br />";
            echo "Tinggi = $tinggi<br />";
            echo "Maka volume balok sama dengan = $panjang x $lebar x $tinggi  = $luas_volumebalok<br/><br/>";
        }
        luas_volume(12, 12, 12);
        luas_volume(1, 112, 2);
        luas_volume(1, 1, 2);
        ?>
</body>

</html>