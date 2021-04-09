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
$Artiest=$_GET['Artiest'];
$Title = $_GET['Titel'];
$Jaar = $_GET['Jaar'];
$Muzieksoort = $_GET['Muzieksoort'];
?>
<?php
 echo "<h1>Favorite Muziek</h1>";
 echo"Artiest: ". $Artiest ."<br>";
 echo"Titel: ". $Title ."<br>";
 echo"Jaar van uitkomst: ". $Jaar ."<br>";
 echo"Muzieksoort: ". $Muzieksoort ."<br>";
 
?>

</body>
</html>

