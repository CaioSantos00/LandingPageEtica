<?php
  if(!isset($_COOKIE['AuthCode'])) header('../');
  $action = 'getAllSavedPosts';
  $realPath = '../';
  require_once "../admin/php/View/manipulaPostagens.php";  

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
  <link rel="stylesheet" href="../css/mediaQueries/init.css">
  <script src="../js/SavedPostsCards.js" posts='<?= $Manager->response ?>'> </script>
</head>

<body>
  <header id="header">
    <img src="../img/logo.png" id="logo" alt="" />
    <nav id="menu-pc">
      <ul>
        <li><a href="../index.php#home">Home</a></li>
        <li><a href="../index.php#publications">Publicações</a></li>
        <li><a href="../login.php">Login</a></li>
      </ul>
    </nav>

  </header>
  <section>
    <div class="containerCard" id="cardes">
        <div class="cardsInfos">
            <div class="divImg">
                <img class="imgsCards" src="../img/capetinha.png" alt="">
            </div>
            <div class="cardsDescri">
                <div class="cardTitle">Title</div>
            <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
            <a href="../pages/pagesPublications/publicação.html"><button class="btnVeja">Veja mais Sobre</button></a>
            </div>
        </div>
        <div class="cardsInfos">
            <div class="divImg">
                <img class="imgsCards" src="../img/capetinha.png" alt="">
            </div>
            <div class="cardsDescri">
                <div class="cardTitle">Title</div>
            <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
            <a href="../pages/pagesPublications/publicação.html"><button class="btnVeja">Veja mais Sobre</button></a>
            </div>
        </div>
        <div class="cardsInfos">
            <div class="divImg">
                <img class="imgsCards" src="../img/capetinha.png" alt="">
            </div>
            <div class="cardsDescri">
                <div class="cardTitle">Title</div>
            <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
            <a href="../pages/pagesPublications/publicação.html"><button class="btnVeja">Veja mais Sobre</button></a>
            </div>
        </div>
        <div class="cardsInfos">
            <div class="divImg">
                <img class="imgsCards" src="../img/capetinha.png" alt="">
            </div>
            <div class="cardsDescri">
                <div class="cardTitle">Title</div>
            <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
            <a href="../pages/pagesPublications/publicação.html"><button class="btnVeja">Veja mais Sobre</button></a>
            </div>
        </div>
        <div class="cardsInfos">
            <div class="divImg">
                <img class="imgsCards" src="../img/capetinha.png" alt="">
            </div>
            <div class="cardsDescri">
                <div class="cardTitle">Title</div>
            <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
            <a href="../pages/pagesPublications/publicação.html"><button class="btnVeja">Veja mais Sobre</button></a>
            </div>
        </div>        
        <div class="cardsInfos">
            <div class="divImg">
                <img class="imgsCards" src="../img/capetinha.png" alt="">
            </div>
            <div class="cardsDescri">
                <div class="cardTitle">Title</div>
            <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
            <a href="../pages/pagesPublications/publicação.html"><button class="btnVeja">Veja mais Sobre</button></a>
            </div>
        </div>
        <div class="cardsInfos">
            <div class="divImg">
                <img class="imgsCards" src="../img/capetinha.png" alt="">
            </div>
            <div class="cardsDescri">
                <div class="cardTitle">Title</div>
            <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
            <a href="../pages/pagesPublications/publicação.html"><button class="btnVeja">Veja mais Sobre</button></a>
            </div>
        </div>
        <div class="cardsInfos">
            <div class="divImg">
                <img class="imgsCards" src="../img/capetinha.png" alt="">
            </div>
            <div class="cardsDescri">
                <div class="cardTitle">Title</div>
            <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
            <a href="../pages/pagesPublications/publicação.html"><button class="btnVeja">Veja mais Sobre</button></a>
            </div>
        </div>
        <div class="cardsInfos">
            <div class="divImg">
                <img class="imgsCards" src="../img/capetinha.png" alt="">
            </div>
            <div class="cardsDescri">
                <div class="cardTitle">Title</div>
            <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
            <a href="../pages/pagesPublications/publicação.html"><button class="btnVeja">Veja mais Sobre</button></a>
            </div>
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