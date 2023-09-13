<?php
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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ética | Cidadania</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/login.css" />
  <link rel="stylesheet" href="../css/perfilUser.css">
  <link rel="stylesheet" href="../css/mediaQueries/perfil.css">
</head>

<body>
  <header id="header">
    <img src="../img/logo.png" id="logo" alt="" />
    <nav id="menu-pc">
      <ul>
        <li><a href="../index.php#home">Home</a></li>
        <li><a href="../index.php#publications">Publicações</a></li>
      </ul>
    </nav>

  </header>
  <section class="section">
    <div class="divBoxTudo">
      <div class="boxPerfil">
        <div class="boxInfos">
          <div class="fotoUser">
            <div class="imgUs"></div>
          </div>
          <div class="boxText">
            <div class="nomeUser">Jhon Doe</div>
            <div class="emailUser">example@gmail.com</div>
          </div>
        </div>
        <button class="btnEdit">Editar</button>
        
      </div>
      <div class="divBtnCriaPubli">
        <a href="cadastroCard.html"><button class="btnPubli">Criar Publicação </button></a>
        <a href="vejaPubli.html"><button class="btnPubli">Minhas Publicações</button></a>
        <a href="cadastroAdm.php"><button class="btnPubli">Cadastrar ADM</button></a>
      </div>
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