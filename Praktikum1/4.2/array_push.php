<!DOCTYPE html>
<html>
<body>

<?php
    $tims = ["hani","pitri","nisa","billa"];
    array_push($tims,"niki");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>

</body>
</html>