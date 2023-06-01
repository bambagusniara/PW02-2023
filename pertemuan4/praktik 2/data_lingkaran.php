<?php

    require_once "class_lingkaran.php";
    
    echo "Nilai PHI = " . Lingkaran::PHI;

    $lingkar1 = new Lingkaran(5);
    $lingkar2 = new Lingkaran(12);

    echo "<br> Luas Lingkaran 1 = " . $lingkar1->getLuas();
    echo "<br> Luas Lingkaran 2 = " . $lingkar2->getLuas();
    echo "<br>";
    echo "<br>Kel Lingkaran 1 = " . $lingkar1->getKel();
    echo "<br>Kel Lingkaran 2 = " . $lingkar1->getKel();
?>