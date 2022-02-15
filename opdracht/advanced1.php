<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="Form" method="POST" action="advanced2.php">
<p>kleur: 
    <select name="color"></p>
        <?php 
        $kleuren = ['red' , 'blue' , 'green' , 'black' , 'brown'];
        foreach($kleuren as $kleur){
            echo "<option value='$kleur' selected>$kleur</option>";
        }
        ?>
    </select></p>
<p>Naam: <input name="naam"></p>
<p>Leeftijd: <input name="leeftijd"></p>
<p>Lengte: <input name="lengte"></p>
<p>Sport: <input name="sport"></p>
<p>Hobby's: <input name="hobbies"></p>
<p>Tabel-border dikte: <input name="border-dikte"></p>
<p>padding: <input name="padding"></p>
<button>Verstuur</button>
    </select></p>
</form>
</body>