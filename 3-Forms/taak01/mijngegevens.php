<?php
echo strtoupper($_POST['voornaam'] ). "&nbsp;";///&nbsp; non space braeak maakt een spatie tussen twee var
echo strtoupper($_POST['achternaam'] ."<br>");
 
if($_POST['klas']!= ""){
    echo strtoupper("klas: " .$_POST['klas'] ."<br>");
}        ////if statement is om de word klas niet op scherm te laten tonen 
if( $_POST['leeftijd'] !=""){
    echo strtoupper($_POST['leeftijd']." jaar". "<br>");
}
    
echo strtoupper($_POST['adres'] ."<br>");
echo strtoupper($_POST['woonplaats'] ."<br>");

?>