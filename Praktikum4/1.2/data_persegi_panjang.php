<?php
    require_once "class_persegi_panjang.php";
    $rect1 = new Rectangle(10, 2);
    $rect2 = new Rectangle(4, 5);

    echo "<br>Luas Persegi Panjang I : ".$rect1->getLuas();
    echo "<br>Luas Persegi Panjang II : ".$rect2->getLuas();

    echo "<br>Keliling Persegi Panjang I : ".$rect1->getKeliling();
    echo "<br>Keliling Persegi Panjang II : ".$rect2->getKeliling();
?>