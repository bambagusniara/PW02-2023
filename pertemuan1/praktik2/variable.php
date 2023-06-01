<?php

    /*
        variable system
        variable build in php
    */ 
    echo $_SERVER["DOCUMENT_ROOT"];

    /*
        variable user
        variable yang dibuat oleh user
    */ 
    echo '<br><br>';

    $name = 'Bam';
    $age = 15;
    $weight = 50.5;

    echo  "Nama saya adalah $name";


    /*
        variable konstan
        variable yang tidak bisa diubah nilainya
        1. Menggunakan define()     | define('fruit', 'Apel')
        2. Menggunakan Const        | const fruit = 'Apel';
    */
    define("SITE_NAME", "Elena");
    const BASE_URL = "elena.nurulfikri.ac.id";

    echo SITE_NAME;
    echo '<br>';
    echo BASE_URL;
?>