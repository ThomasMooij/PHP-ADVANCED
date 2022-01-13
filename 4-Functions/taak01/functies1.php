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
    function schrijfKleur($kleur){
        echo "<p style=\"color:".$kleur."; \"> deze tekst is $kleur</p>";
    }
    
  
schrijfKleur("#FF0000");
schrijfKleur("green");
schrijfKleur("#0000FF");
schrijfKleur("yellow");
    
  
    
    ?>
    
</body>
</html>