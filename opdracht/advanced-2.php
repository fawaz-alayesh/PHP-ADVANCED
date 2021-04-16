<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
         td{
            font-size: 28px;
        }
        body{
            display: flex;
            justify-content: center;
            padding: 5%;
        }
        table{
            box-shadow: 5px 2px 3px rgba(0,0,0.5);
        }
    </style>
    
    <?php
    $mijngegevens = array(
        "Naam" => "Fawaz Alayesh",
        "Leeftijd" => 24 ,
        "Klas" => "0C" ,
        "studie" => "Software developer" ,
        "Muziek" => "Klassiek" ,
        "sport" => "Zwemmen & Fitness" ,
        "Woonplaats" => "Aalsmeer" ,
        "Eten" => "Shaorma"
    );
    
    echo "<table class=table border=6px height=250px width=40%>";
    foreach($mijngegevens as $key => $value){
       maakRij($key,$value);
    }

    echo "</table>";


    function maakRij($key,$value){
        echo "<tr>
        <td>$key</td>
        <td>$value</td>
        </tr>";
    }
   

    $tableranddikte = $_POST['tableranddikte'];
    $celpadding = $_POST['celpadding'];
    
    echo "<style>.table{border:".$tableranddikte."px solid #aaa;}</style>";
    echo "<style>.table td{padding:".$celpadding."px;}</style>";
    if(isset($_POST['submit'])){

        $achtergrond = $_POST['achtergrondkleur']; // Storing Selected Value In Variable
        echo "<style>.table{background-color:".$achtergrond.";}</style>";  // Displaying Selected Value
    
    }
    if(isset($_POST['submit'])){

        $tekstkleur = $_POST['tekstkleur']; // Storing Selected Value In Variable
        echo "<style>body{color:".$tekstkleur.";}</style>";  // Displaying Selected Value
    
    }
    ?>
    
</body>
</html>