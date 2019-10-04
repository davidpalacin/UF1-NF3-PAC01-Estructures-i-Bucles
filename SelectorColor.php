<!DOCTYPE html>
<html>
<body>

<h1>Pon el texto como quieras:</h1>
<?php
    
    $_POST["color"];
    $_POST["tipografia"];
    $_POST["tam"];
    $_POST["texto"];
    $_POST["cookie"];
    
?>
<form method="post" action="EstructuresPalacin.php">
  Mete el texto a modificar: <input type="text" name="texto"/><br>
  Selecciona el color: <input type="color" name="color" value="#ff0000"><br>
  Selecciona la fuente: <select name="tipografia" ><br>
  <option>Arial</option>
  </select><br>
  Selecciona el tamaño: <input type="text" name="tam"/><br>
  Querras guardar todo esto en una cookie?: <input type="checkbox" name="cookie"/>
  <br><br>
  <input type="submit">
</form>

<?php

    
    
    if($galletita==true){
    echo "guardando";
    setcookie("colortexto",$_POST["color"],time()+60);
    setcookie("tamanioletra",$_POST["tam"],time()+60);
    setcookie("tipoletra",$_POST["tipografia"],time()+60);
    
    }

?>

</body>
</html>

