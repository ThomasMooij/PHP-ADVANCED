<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced-php-1</title>
</head>
<body>
   <form action="advanced2.php" method="post">
   <label for="Voornaam">Voornaam:</label><br>
        <input type="text" id="voornaam" name="Voornaam"><br>
        <label for="Achternaam">Achternaam:</label><br>
        <input type="text" id="Achternaam" name="Achternaam"><br>
        <label for="Klas">Klas:</label><br>
        <input type="text" id="Klas" name="Klas"><br>
        
   <label for="kleuren">Selecteer tekst kleur</label>
        <select id="kleuren" name="kleuren">
            <?php 
           $kleuren = array("red", "blue", "green", "black", "brown");
            foreach($kleuren as $value){
                 echo "<option>".$value."</option>";
            }
            ?>
        </select>
        <label for="border">Selecteer border size</label>
        <select id="border" name="border">
            <?php 
           $border = array("1px", "2px", "5px", "10px", "12px");
            foreach($border as $value){
                 echo "<option>".$value."</option>";
            }
            ?>
        </select>
        <label for="padding">Selecteer paddig size</label>
        <select id="padding" name="padding">
            <?php 
           $padding = array("1px", "2px", "5px", "10px", "12px");
            foreach($padding as $value){
                 echo "<option>".$value."</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Verzendknop">

    </form>
</body>
</html>