<?php
    $action = 'getAllPosts';
    require_once "admin/php/View/manipulaPostagens.php";    
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
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#publications">Publicações</a></li>
            <li><a href="login.php">Login</a></li>
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
                    <div class="cardTitle">Title</div>
                <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
                <a href="./pages/pagesPublications/publicação.html"><button class="btnVeja">Veja mais Sobre</button></a>
                </div>
            </div>
        </div>                    
    </section>
    <footer>
        Copyright ©<br>
    </footer>
</body>
</html>