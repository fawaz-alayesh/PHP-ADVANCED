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
        body{
            display:flex;
            justify-content:center;
            align-items:center;
        }
       .bg{
        display:flex;
        padding: 10px;
        justify-content:center;
        align-items:center;
        height: 300px;
        width: 400px;
        font-family:calebri;
        font-size:25px;
        border: 1px solid gray;
        padding: 10px;
        box-shadow: 5px 10px #888888;
       }
    </style>
<div class="bg">
<?php
echo strtoupper($_POST['voornaam'] ). "&nbsp;";///&nbsp; non space braeak maakt een spatie tussen twee var
echo strtoupper($_POST['achternaam'] ."<br>");
echo strtoupper($_POST['gender'] ."<br>");

if($_POST['klas']!= ""){
    echo strtoupper("klas: " .$_POST['klas'] ."<br>");
}        ////if statement is om de word klas niet op scherm te laten tonen 
if( $_POST['leeftijd'] !=""){
    echo strtoupper($_POST['leeftijd']." jaar". "<br>");
}
    
echo strtoupper($_POST['adres'] ."<br>");
echo strtoupper($_POST['woonplaats'] ."<br>");

if(isset($_POST['Color'])){

	$selected_val = $_POST['Color'];  // Storing Selected Value In Variable
	echo "<style>.bg{background-color:".$selected_val.";}</style>";  // Displaying Selected Value

}


?>
</div>
</body>
</html>
