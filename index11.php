<?php
    function plotas($krastine1, $krastine2)
    {
        return ($krastine1*$krastine2);
    }
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
    if(isset($_POST['sub'])) 
    {
        if( ($_POST['krastine1']) && ($_POST['krastine2']) ) 
        {
            if((preg_match('/^[0-9]*$/', $_POST['krastine1'] )) && (preg_match('/^[0-9]*$/', $_POST['krastine2'] )))
            {
                    $val1 = $_POST["krastine1"];
                    $val2 = $_POST["krastine2"];
        
         echo 'staciakampio plotas:'. plotas($val1,$val2);
            }  
            else 
           {echo "Neteisingas duomenų formatas";}   
        }  
    else {echo "Užpildykite teisingai visus laukus";}
    
   }                                      
    else                
   {  
    ?>
          <form action="<?php $_PHP_SELF; ?>" method = "POST">
         Kraštinė1: <input type = "text" name ="krastine1" />
         Kraštinė2: <input type = "text" name ="krastine2" />
        <input type = "submit" name = "sub">
         </form>  
   <?php
    }  
    ?>
</body>
    
</html>
