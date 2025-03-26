<?php 
include("conecta.php");

session_start();
if(isset($_SESSION["email"]))
    header("location: home.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        h1{ 
            color: white; 
            
        }
        body{
            background-color: rgb(16, 0, 30);

        }
        div.pai{
            display: flex;
            align-items: center;
            width: fit-content;
            height: fit-content;
            
           margin: 11% auto;
           gap: 50px;
        }
        form#logo{
            box-shadow: 0px 0px 10px rgb(139, 13, 236);
           
            width: fit-content;
            display: flex;
            flex-direction: column;
            padding: 50px;
            gap: 30px;
            border-radius: 10px;
            background-color: rgb(16, 0, 30);
        }
        form#logo input{
            width: 250px;
            height: 35px;
            outline: none;
            border-radius: 5px;
        border: none;
        
        }
        form#logo button{
            height: 40px;
            border-radius: 10px;
            border: none;
            color: white;
            background-color: rgb(4, 165, 4);
        }
    </style>
</head>
<body>
    <div class="pai">
<h1>Login BlackAccess</h1>
<form action="logar.php" method="POST" id="logo">

<input type="email" name="email" placeholder="Insira o email">

<input type="password" name="senha" placeholder="Insira a senha">
<button name="login">Login</button>

</form>
</div>

</body>
</html>