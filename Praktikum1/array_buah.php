<?php
    $ar_buah = ["Mangga", "Pisang", "Durian", "Naga" ];
    //cetak buah index ke 2
    echo $ar_buah[2];
    //cetak jumlah buah
    echo '<br/>Jumlah buah '.count($ar_buah);

    //cetak keseluruhan buah
    echo '<ol>';
    foreach($ar_buah as $buah) {
        echo '<li>'.$buah.'</li>';
    }
    echo '</ol>';

    //tambah buah
    $ar_buah[]="Jambu";
    //hapus buah index ke 1
    unset($ar_buah[1]);
    //ubah buah index ke 2 menjadi apel
    $ar_buah[2]="Apel";
    
    //cetak seluruh buah dengan indexnya
    echo '<ul>';
    foreach($ar_buah as $k => $v) {
        echo '<li> buah index - ' . $k . ' adalah '. $v . '</li>';
    }
    echo '</ul>'
?>