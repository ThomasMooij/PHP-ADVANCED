<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<?php 
echo "<body style='background-color:".$_POST['achtergrond']."'>";
?>

<?php

$infoMezelf = array("key"=>"value", "naam"=>"Thomas ", "leeftijd"=>"25", "klas"=>"1d" ,"muziek"=>"Hard Rock", "merkfiets"=>"zieke fiets","woonplaats"=>"Uithoorn", "eten" => "Ook bloemkool");


    function tabel($key, $value){
        echo "<tr>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['tekst']."; padding:".$_POST['padding']."px;'>$key</td>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['tekst']."; padding:".$_POST['padding']."px;'>$value</td>";
        echo "</tr>";
    }



echo "<table style='border:  ".$_POST['border-dikte']."px solid' width='300' cellspacing='0'>";

foreach($infoMezelf as $rij1 =>$rij2){
    tabel($rij1, $rij2);
}

echo "</table>"

?>
</body>
</html>