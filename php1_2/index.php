<?php
    $country = 'Lietuva';
    $city = 'Vilnius';
    $population = 574221;
    $largest_population = true;
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
 <h3> Pirma užduotis  </h3>
    <ul>
     <li> <?php echo $country; ?>  </li>
     <li> <?php echo $city; ?></li>
     <li> <?php echo $population; ?> </li>
    </ul>

<h3> Antra užduotis  </h3>
    <ul>
     <li> <?php echo $city.' yra Lietuvos sostinė'; ?>  </li>
     <li> <?php echo "$city ir  $country sparčiai augo "; ?>  </li>
    </ul>
</body>
    
</html>