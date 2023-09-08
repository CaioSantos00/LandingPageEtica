<?php
    require_once "php/LoginVerifier.php";    
    $verify = new LoginVerifier('','');
    $resul = $verify->verifyPrevious();    
    
    if($resul){
        //ta logado        
       if(is_array($resul)){
        //é autor
        }
    }
    //é porra nenhuma
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ética | Cidadania</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
     <header id='header'>
     <img src="./img/logo.png" id="logo" alt="">
        <nav id='menu-pc'>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#publications">Publicações</a></li>
            <li><a href="#">Projetos</a></li>
        </ul>
        </nav>   
    </header>
    <section id="home">
        <div id="container">
            <div id="box">
                <div class="title"><h1>Ética e  Cidadania</h1></div>
                <div id="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis expedita alias quos reiciendis. Ullam assumenda dolorum molestiae architecto laboriosam rerum cupiditate earum. Accusamus nobis doloremque commodi officia nihil, reiciendis natus.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum dicta sed, optio saepe quas ipsam eos, consequuntur, atque nihil esse dolor tempore aperiam debitis beatae rerum. Laudantium quaerat tempora commodi.
                </div>
                <button id="veja">Veja mais sobre</button>
            </div>
            <div id="divVideo"><img id="capetinha" src="./img/capetinha2.png" alt="Certo ou Errado"></div>
        </div>
    </section>
    <section id="publications">
        <div class="title" id="publi"><h1>Publicações</h1></div>
        <div id="containerCard">
            <div class="cardsInfos">
                <div class="divImg">
                    <img class="imgsCards" src="./img/capetinha.png" alt="">
                </div>
                <div class="cardsDescri">
                    <div class="cardTitle">Title</div>
                <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
                <button class="btnVeja">Veja mais Sobre</button>
                </div>
            </div>
            <div class="cardsInfos">
                <div class="divImg">
                    <img class="imgsCards" src="./img/capetinha.png" alt="">
                </div>
                <div class="cardsDescri">
                    <div class="cardTitle">Title</div>
                <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
                <button class="btnVeja">Veja mais Sobre</button>
                </div>
            </div>
            <div class="cardsInfos">
                <div class="divImg">
                    <img class="imgsCards" src="./img/capetinha.png" alt="">
                </div>
                <div class="cardsDescri">
                    <div class="cardTitle">Title</div>
                <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
                <button class="btnVeja">Veja mais Sobre</button>
                </div>
            </div>
            <div class="cardsInfos">
                <div class="divImg">
                    <img class="imgsCards" src="./img/capetinha.png" alt="">
                </div>
                <div class="cardsDescri">
                    <div class="cardTitle">Title</div>
                <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
                <button class="btnVeja">Veja mais Sobre</button>
                </div>
            </div>
            <div class="cardsInfos">
                <div class="divImg">
                    <img class="imgsCards" src="./img/capetinha.png" alt="">
                </div>
                <div class="cardsDescri">
                    <div class="cardTitle">Title</div>
                <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
                <button class="btnVeja">Veja mais Sobre</button>
                </div>
            </div>
            <div class="cardsInfos">
                <div class="divImg">
                    <img class="imgsCards" src="./img/capetinha.png" alt="">
                </div>
                <div class="cardsDescri">
                    <div class="cardTitle">Title</div>
                <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
                <button class="btnVeja">Veja mais Sobre</button>
                </div>
            </div>
            <div class="cardsInfos">
                <div class="divImg">
                    <img class="imgsCards" src="./img/capetinha.png" alt="">
                </div>
                <div class="cardsDescri">
                    <div class="cardTitle">Title</div>
                <div class="cardDescri">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maxime aspernatur velit sed non earum inventore, consequuntur vitae officiis minus aut, corporis soluta reprehenderit vero dolorem molestias harum officia laudantium!</div>
                <button class="btnVeja">Veja mais Sobre</button>
                </div>
            </div>
        </div>
    </section>
    <footer>
        Copyright ©<br>
        <a href="pages/login.php">Login</a>
    </footer>
</body>
</html>