
<?php 
include_once("conecta.php");

if(isset($_POST['nome'])){


$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$stm = $conexao->prepare("INSERT INTO usuario (nome, apelido, email, senha)values('$nome', '$apelido', '$email', '$senha')");
$stm->execute();
}

$stm = $conexao->prepare("select * from usuario");
$stm->execute();
$res = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            
            
        }
        div.show{
            width: fit-content;
            padding: 8px;
            font-size: 20px;
            box-shadow: 0px 0px 2px black;
            display: flex;
            flex-direction: column;
            gap: 20px;
            border-radius: 5px;
            
        }
        a{
            text-decoration: none;
            background-color:#BC2020;
            padding: 5px;
            border-radius:5px;
            color: white;
            width: fit-content;
        }

        a:hover{
            background-color: red;
           
        }
        div.show:hover{
            
            box-shadow: 0px 0px 10px black;
        }
    </style>
</head>
<body>


<?php 
foreach ($res as $row) {

    $id = $row['id'];
    $nome = $row['nome'];
    $apelido = $row['apelido'];
    $email = $row['email'];
    $senha = $row['senha'];

    echo "<div class='show'>Nome: $nome\n 
    <br>Apelido: $apelido\n
    <br>Email: $email\n 
    <br> Senha: $senha ".
    
   " <div> <a href='eliminar.php?id=$id' onclick='delet()'>Eliminar</a> 
    
    <a href='editar.php?id=$id'>Editar</a></div> </div>";
    echo "<br><br>";
}

?>

<script>
   
   function delet(){

       alert("tens a certeza que queres eliminar?")
 
    }

</script>

</body>
</html>



