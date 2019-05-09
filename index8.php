<?php
    $temp = [4,3,9,19,9,12,20,24,20,12,14,18,21,20,23,16,16,15,19,19,17,15,12,13,13,15,19,21];
    $suma = 0;
    $n = 7;
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <p> Vidutinės temperatūros skaičiavimas</p>
    <?php  
        for($i=0; $i <= count($temp); $i++){
        $suma = $suma + $temp[$i];
    } 
     echo "Vidutine temperatura:". round($suma/count($temp))."</li>";
   
     asort($temp);
     echo "<p> $n šalčiausios temperatūros: ". implode(" ", array_slice($temp, 0, $n)) ."</p>";
     echo "<p> $n šalčiausios temperatūros: ". implode(" ", array_slice($temp, -$n, $n)) ."</p>";
    ?>
    
</body>
</html>
