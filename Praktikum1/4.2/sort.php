<!DOCTYPE html>
<html>
<body>

<?php
    $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
    echo '<ol>';
    foreach($ar_buah as $k=>$v) {
        echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';

    sort($ar_buah);
    echo '<hr/>';
    echo 'sort';
    echo '<ol>';
    foreach($ar_buah as $k=>$v) {
        echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';

    arsort($ar_buah);
    echo '<hr/>';
    echo 'arsort';
    echo '<ol>';
    foreach($ar_buah as $k=>$v) {
        echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
?>

</body>
</html>
