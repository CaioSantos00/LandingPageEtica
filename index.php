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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ética | Cidadania</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/mediaQueries/init.css">
</head>
<body>
     <header id='header'>
     <img src="./img/logo.png" id="logo" alt="">
        <nav id='menu-pc'>
        <ul id="lista">
            <li><a href="#home">Home</a></li>
            <li><a href="./Quiz.php">Quiz</a></li>
            <li><a href="#publications">Publicações</a></li>
        </ul>
        </nav>   
    </header>
    <section id="home">
        <div id="container">
            <div id="box">
                <div class="title"><h1>Ética e  Cidadania</h1></div>
                <div id="text">
                    A ética e a moral são ponto de discussão da filosofia desde quando a filosofia foi criada, pois ambas são justamente o que rege aquilo que é bom e mau, mas há uma certa diferença. Todos os nossos conceitos de ações certas e erradas são baseados ou na ética e na moral, inclusive leis. O que é uma ação ruim? Por que ela é ruim? É justamente essa a proposição de ambas e como elas afetam nosso dia a dia.
                </div>
                <button id="veja">Veja mais sobre</button>
            </div>
            <div id="divVideo"><img id="capetinha" src="./img/capetinha2.png" alt="Certo ou Errado"></div>
        </div>
    </section>
    <section id="publications">
        <div class="title" id="publi"><h1>Publicações</h1></div>
        <div class="containerCard">
            <div class="cardsInfos">
                <div class="divImg">
                    <img class="imgsCards" src="./img/capetinha.png" alt="">
                </div>
                <div class="cardsDescri">
                    <div class="cardTitle">A história da ética</div>
                <div class="cardDescri">Veja como surgiu a ética!</div>
                <a href="./pages/publicacaoPronta.php"><button class="btnVeja">Veja mais Sobre</button></a>
                </div>
            </div>
        </div>                    
    </section>
    <footer>
        Copyright ©<br>
    </footer>
    
    
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