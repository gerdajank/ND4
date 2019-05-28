<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "mmk");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo "Atsiprasome \n";
    echo 'Klaida:'. $mysqli->connect_error .'\n';
    exit();
}

//duomenu siuntimas i duomenu baze lentel klientai
mysqli_query($mysqli, "INSERT INTO STUDENTAI(vardas, email, message) VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[message]')"); 

//duomenu isvedimas i ekrana
//$sql = "SELECT * FROM klientai";
//$result = $mysqli->query($sql);
//$array = $result->fetch_assoc(); 
//var_dump($array);