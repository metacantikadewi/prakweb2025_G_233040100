<?php

// membuat constant menggunakan define()
    define("NAMA", "Hikmal Ryvaldi");
    
    // membuat constant menggunakan const
    const NRP = 2230400;

    echo NAMA;
    echo '<br';
    echo NAMA;
    echo '<hr>';

    class CobaConstant {
        // define('COBA', 'BEBAS'); // ERROR
        const JURUSAN = 'Teknik informatika';
    }
    echo CobaConstant::JURUSAN;
    echo '<hr>';

    echo "File ini ada di baris:
    " .__LINE-_;
    echo "<br>";
    echo "File ini ada direktori:
    ".__DIR__;
    ?>