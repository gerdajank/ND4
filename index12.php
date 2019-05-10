<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma</title>
</head>

<body>
    <?php
    if(isset($_POST['sub'])) 
    {
        if( ($_POST['vardas']) && ($_POST['pavarde']) ) 
        {
            if((preg_match("/[^A-Za-z'-]/", $_POST['vardas'] )) && (preg_match("/[^A-Za-z'-]/", $_POST['pavarde'] )))
            {
                    $val1 = $_POST["vardas"];
                    $val2 = $_POST["pavarde"];
        
         echo 'Vardas: '.$val1 . '<br> Pavarde: '. $val2;
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
        Vardas: <input type = "text" name ="vardas" />
        Pavardė: <input type = "text" name ="pavarde" />
        <input type = "submit" name = "sub">
         </form>  
   <?php
    }  
    ?>
</body>
    
</html>
