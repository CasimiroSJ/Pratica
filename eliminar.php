<?php 


if(!empty($_GET["id"])){

    include_once("conecta.php");

    $id = $_GET["id"];

    $stm = $conexao->prepare("SELECT * FROM usuario WHERE id=$id");
    $stm->execute();
    $res = $stm->fetchAll(PDO::FETCH_ASSOC); 
    if($res[0]){
      
        $delete = ("DELETE FROM usuario WHERE id=$id");
        $Verdelete= $conexao ->query($delete);
    }
    header('Location: dados.php');

}

