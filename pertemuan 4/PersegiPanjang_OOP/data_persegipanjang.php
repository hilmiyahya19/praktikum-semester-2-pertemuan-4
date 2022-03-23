<?php
    require_once ('class_persegipanjang.php');

    $persegipanjang = new persegi_panjang(10,16);

    echo '<br>Luas Persegi Panjang : '.$persegipanjang->getLuas();
    echo '<br>Keliling Persegi Panjang : '.$persegipanjang->getKeliling();
?>