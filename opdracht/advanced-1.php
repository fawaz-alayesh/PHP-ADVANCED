<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>advanced-1</title>
</head>
<body>

    <table class="formulier">
        <form action="advanced-2.php" method="POST">
        <tr>
            <td>tableranddikte(px):</td><td><input type="text" name="tableranddikte"></td>
        </tr>
        <tr>
            <td>cel-padding(px):</td><td><input type="text" name="celpadding"></td>
        </tr>
        <tr>
            <td>achtergrondkleur</td><td>
                <select name="achtergrondkleur" >
                <?php  $kleuren = array("white","red", "blue", "green", "black", "brown");
                    foreach($kleuren as $value){
                   echo'<option value="'.$value.'">'.$value.'</option>'; }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>tekstkleur</td><td>
                <select name="tekstkleur">
                <?php  $kleuren = array("red", "blue", "green", "black", "white", "brown");
                $reversed = array_reverse($kleuren);
                    foreach($reversed as $value){
                   echo'<option value="'.$value.'">'.$value.'</option>'; }
                ?>
                </select>
            </td>
        </tr>
       <tr>
           <td><input type="submit" name="submit" ></td>
       </tr> 
     </form>
    </table>
    

</body>
</html>