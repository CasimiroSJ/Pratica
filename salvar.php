<?php

include_once ("conecta.php");

if(isset($_POST["update"])){

$id = $_POST['id'];
$name = $_POST["nome"];
$apelido = $_POST["apelido"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$stm = $conexao->prepare("UPDATE usuario SET nome='$name', apelido='$apelido', email='$email', senha='$senha' WHERE id='$id'");
$stm->execute();

}
header("Location:dados.php");
