<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=background-color:<?php echo $_POST["kleur"]?>>
    <?php
    echo $_POST["Voornaam"]." ".$_POST["Achternaam"]."<br>"." zit in klas ".$_POST["Klas"]." hij is ".$_POST["Leeftijd"]." Jaar oud"."<br>";
    echo "Hij woont op het ".$_POST["Adres"]." te ".$_POST["Plaatsnaam"]." en zijn favoriete band is ".$_POST["FavorieteBand"];
    echo "<br>"." Geslacht:".$_POST["Geslacht"];
   
    ?>
</body>
</html>