<?php
    $angka1 = $_POST['angka_1'];
    $angka2 = $_POST['angka_2'];

    $hasil = $angka1 % $angka2;

    echo "<h3>Sisa Hasil Bagi dari $angka1 dengan $angka2 adalah " . $hasil . "</h3>";
?>