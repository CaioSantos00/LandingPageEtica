<?php
    $response = "false";

    if(isset($_POST['submit'])){
        require_once "admin/php/View/Login.php";
        $verify = new UserVerify();
        $verify->setLoginArgs($_POST['email'], $_POST['senha']);
        $response = $verify->getResponse('Login');
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ética | Cidadania</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <script>
        let response = '<?= $response ?>';
        if(response != 'false' && response == '1'){
            location.href = './PerfilUser/perfilUser.html'
        }
    </script>
</head>
<body>
     <header id='header'>
     <img src="img/logo.png" id="logo" alt="">
        <nav id='menu-pc'>
        <ul>
            <li><a href="index.html#home">Home</a></li>
            <li><a href="index.html#publications">Publicações</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        </nav>
    </header>

    <section>        
        <div id="divForms">
        <form action="login.php" class="forms" method="POST">
                <h1 class="title" id="titleLogin">Login</h1>
                <input type="text" placeholder="Email" class="input" name="email">
                <input type="text" placeholder="Senha" class="input" name="senha">
                <button class="btnForms" name="submit">Entrar</button>
                <a href="" class="textsForms">Esqueceu sua senha ?</a>
                <a href="registroUser.php" class="textsForms">Não é um autor ? Cadastre-se</a>
            </form>
        </div>
    </section>
</body>
</html>