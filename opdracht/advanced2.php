<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    function maakRij($rij1, $rij2){
        echo "<tr>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['color']."; padding:".$_POST['padding']."px;'>$rij1</td>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['color']."; padding:".$_POST['padding']."px;'>$rij2</td>";
        echo "</tr>";
    }

    $array1 = [
    'naam'     => $_POST['naam'],
    'leeftijd' => $_POST['leeftijd'],
    'lengte'   => $_POST['lengte'],
    'sport'    => $_POST['sport'],
    'hobbies'  => $_POST['hobbies'],
    ]; 

    echo "<table style='border:  ".$_POST['border-dikte']."px solid' width='300' cellspacing='0'>";

    foreach($ik as $sleutel =>$iksleutel){
         maakRij($ik, $iksleutel);
    }
    echo "</table>"
?>
</body>
</html>