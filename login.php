<?php
    $response = "false";

    if(isset($_POST['submit'])){
        require_once "admin/php/View/Login.php";
        $verify = new UserVerify();
        $verify->setLoginArgs($_POST['email'], $_POST['senha']);
        $response = $verify->getResponse('Login');
    }

    require_once "./admin/php/View/Login.php";

    $verify = new UserVerify();
    $status = "semLogin";
    if($verify->getResponse('Cookie')){
        $status = "Logado";
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
    <link rel="stylesheet" href="./css/mediaQueries/forms.css">
    <script>
        let response = '<?= $response ?>';
        if(response != 'false' && response == '1'){
            location.href = './PerfilUser/perfilUser.php';
        }
    </script>
</head>
<body>
     <header id='header'>
     <img src="img/logo.png" id="logo" alt="">
        <nav id='menu-pc'>
        <ul id="lista">
            <li><a href="../index.php#home">Home</a></li>
            <li><a href="../index.php#publications">Publicações</a></li>
            <li><a href="../login.php">Login</a></li>
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
    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');

    let lista = document.getElementById('lista');
        let itens = lista.innerHTML;
        let userStatus = '<?= $status ?>';
        if(userStatus == 'Logado'){
            itens += '<li><a href="">Perfil</a></li>';
        }else{
            itens += '<a href="./login.php">Login</a>';
        }
        lista.innerHTML = itens;
  </script>
</body>
</html>