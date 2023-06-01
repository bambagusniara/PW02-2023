<?php 

    require_once 'class_kendaraan.php';

    $motor = new Motor("Motor","Bensin",2);
    $Submarine = new Submarine ("Kapal Selam","Biogas",700);

    echo "Info Motor:<br>";
    $motor->getInfo();
    echo "<br>";

    echo "Info Submarine:<br>";
    $Submarine->getInfo();
    echo "<br>";

?>