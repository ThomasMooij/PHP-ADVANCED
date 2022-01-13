<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function rekenUit($reken1,$reken2,$reken3){
        $uitkomst=$reken1 + $reken2 + $reken3;
        return $uitkomst;
    }

    $uikomst1=rekenuit(4,2,9);
    $uikomst2=rekenuit(1,2,3);
    $uikomst3=rekenuit(40,28,91);


    echo "4 + 2 + 9 is: ".$uikomst1. "<br>";
    echo "1 + 2 + 3 is: ".$uikomst2. "<br>";
    echo "40 + 28 + 91 is: ".$uikomst3. "<br>";
    ?>
</body>
</html>