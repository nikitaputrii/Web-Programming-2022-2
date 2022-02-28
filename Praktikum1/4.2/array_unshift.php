<!DOCTYPE html>
<html>
<body>

<?php
    $tims = ["hani","pitri","nisa","billa"];
    array_unshift($tims,"niki","ani");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>

</body>
</html>