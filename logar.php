<?php
include("conecta.php");

session_start();

if(isset($_POST["login"])){

    $email = $_POST["email"];
    $senha = $_POST["senha"];

$stm = $conexao ->prepare("SELECT * FROM usuario where email='$email' and senha='$senha'");
$stm -> execute();
$res = $stm->fetchAll(PDO::FETCH_ASSOC);

if($res){
    $_SESSION["id"] = $res[0]["id"];
    $_SESSION["email"] = $res[0]["email"];
    $_SSESSION["nome"] = $res[0]["nome"];
    header("Location:home.php");
}
else{
    header("Location:login.php");
}


}