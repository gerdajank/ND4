<?php
    $metai = 1774;
    $cities3 = ["Tokijas" => [13.6, 1868, "Japonija"],
                "Vasingtonas" => [0.6, 1790, "JAV"],
                "Maskva" => [11.5, 1147, "Rusija"]
               ];
    $cities3["Londonas"]  = [8.6, 43, 'Anglija']; 
    $kint = $cities3['Vasingtonas'][1] - $metai;
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php if ($metai > $cities3["Vasingtonas"][1])
                {echo "Vasingtonas yra JAV sostine";}
                    elseif($metai == 1774) 
                    {echo "Jav sostine vis dar Filadelfijoje";}
                            else 
                            {echo "Liko ".$kint." metų iki Vašingtono įkūrimo";} 
    ?>
</body>
    
</html>
