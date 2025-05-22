<?php
    $jumlah_roda = 2;

    switch($jumlah_roda){
        case "2" :
            echo "Motor";
            break;
        case "3" :
            echo "Becak";
            break;
        case "4" :
            echo "Mobil";
            break;
        case "6" :
            echo "Bus";
            break;
        case "10" :
            echo "Truk Tronton";
            break;
        default:
        echo "Jenis kendaraan tidak diketahui!";
    }
?>