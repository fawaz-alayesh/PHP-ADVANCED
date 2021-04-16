<?php
$color = array('red', 'green', 'blue', 'yellow');
/*$red="red";
$green="green";
$blue="blue";
$yellow="yellow";*/
function schrijfKleur($color,$name){
    echo "<h2 style='color:".$color.";'>Deze text heeft de kleur $name</h2>";
}
schrijfKleur($color[0], "#FF0000");
schrijfKleur($color[1], "green");
schrijfKleur($color[2], "#0000FF");
schrijfKleur($color[3], "yellow");
?>