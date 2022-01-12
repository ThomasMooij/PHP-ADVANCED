<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mijngegevens.php" name="invoerformulier" method="post">

        <label for="Voornaam">Voornaam:</label><br>
        <input type="text" id="voornaam" name="Voornaam"><br>
        <label for="Achternaam">Achternaam:</label><br>
        <input type="text" id="Achternaam" name="Achternaam"><br>
        <label for="Klas">Klas:</label><br>
        <input type="text" id="Klas" name="Klas"><br>
        <label for="Leeftijd">Leeftijd:</label><br>
        <input type="text" id="Leeftijd" name="Leeftijd"><br>
        <label for="Adres">Adres:</label><br>
        <input type="text" id="Adres" name="Adres"><br>
        <label for="Plaatsnaam">Plaatsnaam:</label><br>
        <input type="text" id="Plaatsnaam" name="Plaatsnaam"><br>
        <label for="FavorieteBand">Favoriete muziekband:</label><br>
        <input type="text" id="FavorieteBand" name="FavorieteBand"><br>
        <input type="submit" value="Verzendknop"><br>

        <label for="Geslacht">Geslacht:</label>
        <label for="Man">Man</label>
        <input type="radio" id="Man" name="Geslacht">
        <label for="Vrouw">Vrouw</label>
        <input type="radio" id="Vrouw" name="Geslacht">

        <label for="Kleur">Kleur</label>
        <select id="kleur" name="kleur">
            <?php 
            $lievelingskleuren = ['blue' , 'red' , 'yellow' , 'green'];
            foreach($lievelingskleuren as $value){
                 echo "<option>".$value."</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>