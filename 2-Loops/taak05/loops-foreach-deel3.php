<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops-foreach-deel3</title>
</head>
<body>
    
<?php
$student  = array(
    "voornaam"    => "Jan", 
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );
  echo "<table border=6 height=40% width=50%>";
  foreach($student as $key => $value){
    echo"<tr>
            <td><b> $key  </b></td>
            <td> $value </td>
          </tr>";   
  }
  echo "</table>";
?>
</body>
</html>



