<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel</title>
</head>
<body>
<body style=background-color:<?php echo $_POST["kleuren"]?>>
<?php 
$thomas = array("naam"=>$_POST["Voornaam"], "achternaam"=>$_POST["Achternaam"], "klas"=>$_POST["Klas"]);
foreach($thomas as $value){
    echo "<tr><td style='border: ".$_POST['border']."px solid; padding:".$_POST['padding']."px;'>$value</td></tr>";
   
   
}
?>
</body>
</html>