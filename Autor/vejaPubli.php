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
  <link rel="stylesheet" href="../css/vejaPubli.css">
  <link rel="stylesheet" href="../css/mediaQueries/vejaPublicacao.css">
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
  <section id="section">
    <div id="variasPubli">
        <div class="cardMinhasPubli">
            <div class="divTitleAndCheck">
                <div class="cardTitle">Title</div>
                <button class="btnExclu">Excluir</button>
            </div>
            <div class="descriViewPubli">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
            
            <a href="../pages/pagesPublications/publicação.html"><button class="btnVeja">Observe</button></a>
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