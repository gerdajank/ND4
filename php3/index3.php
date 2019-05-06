<?php
    $x = 10;
    $y = 7;
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
 <h3> Trečia užduotis </h3>
    <ul>
         <li> <?php $z = $x + $y; echo "$x + $y = $z"; ?>  </li>
         <li> <?php $z = $x - $y; echo "$x - $y = $z"; ?>  </li>
         <li> <?php $z = $x * $y; echo "$x * $y = $z"; ?>  </li>
         <li> <?php $z = $x / $y; echo "$x * $y = $z"; ?>  </li>
         <li> <?php $z = $x % $y; echo "$x % $y = $z"; ?>  </li>
    </ul>
</body>
</html>