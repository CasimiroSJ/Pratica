<?php



if(!empty($_GET["id"])){
    include_once("conecta.php");

    $id = $_GET["id"];

    $stm = $conexao->prepare("SELECT * FROM usuario WHERE id=$id");
    $stm->execute();
    $res = $stm->fetchAll(PDO::FETCH_ASSOC);
    if($res[0]){
        
        foreach($res as $row){
    $id = $row['id'];
    $nome = $row['nome'];
    $apelido = $row['apelido'];
    $email = $row['email'];
    $senha = $row['senha'];
    }
//print_r($nome);
}
else{
    header("Location:dados.php");
}
}
else{
    header("Location: dados.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        span{
            color:red;
            font-size: 50px;
            margin: auto;
        }
        form{
            display: flex;
            flex-direction: column;
            width: fit-content;
            padding: 50px;
            gap:10px;
            margin:auto ;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
            align-items: center;
        }
        form input{
            height: 30px;
            width: 250px;
            outline: none;
           
        }
        button{
            background-color: green;
            color:white;
            width: 100px;
            padding: 10px;
            border: none;
            border-radius: 5px;

        }
        button:hover{
            background-color:greenyellow;
        }

    </style>
</head>
<body>
    <a href="dados.php">Voltar</a>
    
    <form action="salvar.php" method="POST">
    <h1>Formulario</h1>
    <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome ?>">
    <input type="text" name="apelido" placeholder="Apelido" value="<?php echo $apelido ?>">
    <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>">
    <input type="password" name="senha" placeholder="Senha" value="<?php echo $senha?>">

    <input type="hidden" name="id" value="<?php echo $id ?>">
    <button type="submit" name="update" id="update">Salvar</button>
</form>

</body>
</html>


