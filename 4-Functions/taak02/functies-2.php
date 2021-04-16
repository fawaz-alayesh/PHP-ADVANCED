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
    function rekenUit($getal1,$getal2,$getal3){
        $totaal=$getal1+$getal2+$getal3;
        return "Als ik de getallen $getal1, $getal2 en $getal3 bij elkaar optel, is de uitkomst $totaal <br>";
    }
    echo rekenUit(4,2,9);
    echo rekenUit(1,2,3);
    echo rekenUit(40,28,91);

    ?>
</body>
</html>