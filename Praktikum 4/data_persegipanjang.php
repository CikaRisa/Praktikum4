<?php
require_once "class_persegipanjang.php";
$persegi_panjang1 = new persegi_panjang( 7,9 );
$persegi_panjang2 = new persegi_panjang( 3,12 );
echo "<br/>Luas Persegi panjang  I : ".$persegi_panjang1->getLuas();
echo "<br>Luas Persegi Panjang II : ".$persegi_panjang2->getLuas();
echo "<br/>Keliling Persegi Panjang I : ".$persegi_panjang1->getKeliling();
echo "<br>Keliling Persegi Panjang  II : ".$persegi_panjang2->getKeliling();
    ?>