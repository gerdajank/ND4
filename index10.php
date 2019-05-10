<?php
$a = 3.4;
$b = 4;
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staciakampio plotas</title>
</head>

<body>
    
    <?php
    function plotas($krastine1, $krastine2)
    {
       $pl = $krastine1*$krastine2;
        return $pl;
    }
    echo 'stačiakampio plotas: '. plotas($a,$b);
    
    ?>
    
</body>
</html>
