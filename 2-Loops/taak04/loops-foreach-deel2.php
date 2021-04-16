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
#form{
  height:300px;
  width:300px;
  border: 1px solid black;
  padding-left:10%;
  padding-top:6%;
}
#btn{
  height:30px;
  width:60px;

}
#option{
  height:30px;
  width:60px;
}
</style>
<form id="form" >   
<label for="klassen"></label>
<select name="klassen">
    <?php  
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
echo "Ik zit in klas: ";
foreach($klassen as $value){
  echo'<option value="'.$klassen.'>'.$value.'</option>';
}

?> 
</select> 
</br><input id="btn" type="submit">
</form>


</body>
</html>

