<?php 

$local = "localhost"; 
$banco = "casimiro";
$user = "root";
$pass = "";

try{
    $conexao = new PDO("mysql: host=$local; dbname=$banco;",$user, $pass);
}catch(err){

    echo "erro";
}


