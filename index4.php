<?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    $cities[] = 'Tokijas';

    $cities2  = ["Tokijas" => 13.6, "Vasingtonas" => 0.6, "Maskva" => 11.5];
    $cities2["Londonas"] =  8.6;

    print_r($cities);
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <ul>
        <li> <?php echo "$cities[1]"; ?></li>
    </ul>  

    <ul> 
        <?php foreach ($cities2 as $miestas => $dydis)
                {echo " <li> Gyventojų skaičius:  $dydis  mln.  </li> ";} 
        ?>
    </ul> 
    
</body>
    
</html>
