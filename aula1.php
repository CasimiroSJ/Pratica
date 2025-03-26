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
    
<form action="dados.php" method="post">
    <h1>Formulario</h1>
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="apelido" placeholder="Apelido">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="senha" placeholder="Senha">

    <button type="submit">Cadastrar</button>
    <a href="login.php">Fazer login</a>

</form>

</body>
</html>


<?php

echo '<marquee>
<span>
hello world
</span>
</marquee>';