<?php

if (isset($_POST['submit']))
{

//spausdiname visus duomenis is POST
//var_dump($_POST);
//narsykles lange matomas masyvas
//echo $_POST['vardas'].'<br>' .$_POST['email'] .'<br>' .$_POST['message'];

//kosmetinis spausdinimo pakeitimas
$vardas = trim($_POST['vardas']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

    if(!empty($vardas) &&  !empty($email)  && !empty($message))
    {
   // echo "<p> Vardas: $vardas </p> ";
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //echo "<p> pastas: $email </p> ";
            $from = "$email";
            $to = "gerda@vgtu.lt";
            $subject = "Nauja zinute";
            $autorius = 'Nuo: '. $vardas . ',' .$email;
            $zinute = htmlspecialchars($message);
            mail($to, $subject, $autorius, $zinute, $from  );
            echo "<script>alert('Dekojame, jusu zinute gauta'); </script>";
        }
   
   // echo "<p> zinute: htmlspecialchars($message) </p> ";
    }
    include('db.php');
}