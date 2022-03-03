<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form name="Forum" method="POST" action="advanced-2.php">

<p>Tekstkleur: 
    <select id="kleur" name="tekst"></p>
        <?php 
        $kleuren = ['black' , 'white' , 'green'];
        foreach($kleuren as $kleur){
            echo "<option value='$kleur' selected>$kleur</option>";
        }
        ?>
    </select></p>

<p>Achtergrondkleur:
    <select id="achtergrond kleur" name="achtergrond"></p>
    <?php 
        $achtergrondKleur = ['black' , 'white' , 'green'];
        foreach($achtergrondKleur as $achtergrond){
            echo "<option value='$achtergrond' selected>$achtergrond</option>";
        }
        ?>
    </select></p>

    <p>tabelranddikte (px): <input name="border-dikte"></p>
    <p>cel-padding (px): <input name="padding"></p>

<button>Verstuur!</button>
</form>

</html>
  