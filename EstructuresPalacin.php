<?php
session_start();

if(isset($_SESSION['contador'])){
    $_SESSION['contador']++;
    
}else{
    $_SESSION['contador'] = 1;
}

echo "Has visitado la página " . $_SESSION['contador'] . "veces";
echo "<br>"  
?>

<html>
 <head>
  <title>Estructures i bucles</title>
 </head>
 <body>
<?php

    //Qué día fue ayer
    $ayer = date( "d-m-Y", strtotime( "-1 day" ) );
    echo "Ayer fue: " ;
    echo $ayer;
   
     echo "<br/>";
   
    //Qué mes fue el mes pasado
    $mesPasado = date('d-m-Y', strtotime('now - 1 month'));
    echo "El mes pasado fue: ";
    echo $mesPasado;
    
    echo "<br/>";
    
    //Dice cuántos días quedan de este mes
        $mes = date('n');
        if ($mes ==  1) { $r2 = 31; }
        if ($mes ==  2) { $r2 = 28; }
        if ($mes ==  3) { $r2 = 31; }
        if ($mes ==  4) { $r2 = 30; }
        if ($mes ==  5) { $r2 = 31; }
        if ($mes ==  6) { $r2 = 30; }
        if ($mes ==  7) { $r2 = 31; }
        if ($mes ==  8) { $r2 = 31; }
        if ($mes ==  9) { $r2 = 30; }
        if ($mes == 10) { $r2 = 31; }
        if ($mes == 11) { $r2 = 30; }
        if ($mes == 12) { $r2 = 31; }
        
    $r1 = (date('j'));
    $r2;
    $resta = $r2-$r1;
    
    echo "Quedan ";
    echo $resta;
    echo " días de este mes.";
    echo "<br/>";
    
    //Cuántos meses quedan de este año
    $mesesRestantes = 12 -(date(m));
    echo "Quedan ";
    echo $mesesRestantes;
    echo " meses antes de que termine el año.";
    echo "<br/>";
    
    //Dice feliz verano o feliz invierno
    if($mes>=6){
        echo "Feliz verano!";
    }else{
        echo "Feliz invierno!";
    }
    echo "<br/>";
    
    $color = $_POST["color"];
    $fuente = $_POST["tipografia"];
    $tama = $_POST["tam"];
    $text = $_POST["texto"];
    $galletita = $_POST["cookie"];
    echo $galletita;
    echo "<font face=$fuente size=$tama color=$color>";
    echo "$text";
    echo "</font>";
    echo "<br>";
    
    
    
    

?>

<?php

  ?>
</body>
    <?php include "OtraPagina.php";?>
</html>