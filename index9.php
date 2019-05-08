<?php
$ceu  = ["Italija" => "Roma",
         "Liuksemburgas" => "Liuksemburgas",
         "Belgija" => "Briuselis",
         "Danija" => "Kopenhaga",
         "Suomija" => "Helsinkis",
         "Pranzūzija" => "Paryžius",
         "Slovakija" => "Bratislava",
         "Slovenija" => "Liublijana",
         "Vokietija" => "Berlynas",
         "Graikija" => "Atėnai",
         "Airija" => "Dublinas",
         "Nyderlandai" => "Amsterdamas",
         "Portugalija" => "Lisabona",
         "Ispanija" => "Madridas",
         "Švedija" => "Stokholmas",
         "Didžioji Britanija" => "Londonas",
         "Kipras " => "Nikosija",
         "Lietuva" => "Vilnius",
         "Čekija" => "Praha",
         "Estija" => "Talinas",
         "Vengrija" => "Budapeštas",
         "Latvija" => "Ryga",
         "Malta" => "Valeta",
         "Austrija" => "Viena",
         "Bulgarija" => "Sofija",
         "Rumunija" => "Bukareštas",
         "Lenkija" => "Varšuva",
        ];
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

    <body>
       <?php
        asort($ceu);
        //print_r($ceu);

        foreach ($ceu as $valstybe => $sostine)
        {
            echo "$valstybe : $sostine " ;
            echo "<br>";
        }
        ?>

    </body>
    
</html>
