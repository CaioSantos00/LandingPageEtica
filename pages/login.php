<?php
    $response = "false";
    
    if(isset($_POST['submit'])){
        require_once "../php/LoginVerifier.php";        
        $verify = new LoginVerifier($_POST['email'], $_POST['senha']);
        
        $verify->verify();
    } 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ética | Cidadania</title>
    <link rel="stylesheet" href="../css/minifiers/miniLogin.php">    
</head>
<body>
     <header id='header'>
     <img src="../img/logo.png" id="logo" alt="">
        <nav id='menu-pc'>
        <ul>
            <li><a href="../index.html#home">Home</a></li>
            <li><a href="../index.html#publications">Publicações</a></li>
            <li><a href="#">Projetos</a></li>
        </ul>
        </nav>   
    </header>
    <section>
        <div id="divForms">
            <form action="login.php" id="formLogin" method="POST">
                <h1 class="title" id="titleLogin">Login</h1>
                <input type="text" placeholder="Email" class="input" name="email">
                <input type="text" placeholder="Senha" class="input" name="senha">
                <input type="submit" id="entrar" name="submit" value="Entrar">                
                <a href="" id="passEsque">Esqueceu sua senha ?</a>
                <a href="./registroUser.php" id="passEsque">Não tem conta? Cadastre-se</a>
            </form>
        </div>
    </section>
</body>
</html>