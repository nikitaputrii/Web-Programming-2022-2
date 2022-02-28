<!DOCTYPE html>
<html>
<body>

<?php
    $tims = ["hani","pitri","nisa","billa"];
    array_pop($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>

</body>
</html>