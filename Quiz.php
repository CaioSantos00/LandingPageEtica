<?php
	$foi = 'nem';
	if(isset($_POST['submit'])){
		$respostas = ['A moral é o conjunto de normas, valores e princípios que orientam o comportamento humano em sociedade. É individual e variável, e é definida através da cultura e criação de cada um.',
        'A ética é o estudo da moral de forma geral, enquanto a moral é a prática da ética no dia a dia. A ética é mais universal e objetiva, enquanto a moral é mais individual e subjetiva',
        'É moral aquilo que vai de acordo com os valores de alguém ou um grupo. Por exemplo, doar para os necessitados é considerado moral em muitas culturas.',
        'É imoral aquilo que vai contra os valores de alguém ou um grupo. Por exemplo, para os muçulmanos, não usar burca é imoral.',
        'É amoral aquele que desconhece a moral ou ações que são neutras perante a moral. Por exemplo, o gato é amoral, ele não sabe que não pode derrubar o vaso da cozinha.'];
		if($_POST['quest1'] == $respostas[0]){
			if($_POST['quest2'] == $respostas[1]){
				if($_POST['quest3'] == $respostas[2]){
					if($_POST['quest4'] == $respostas[3]){
						if($_POST['quest5'] == $respostas[4]){
								$foi = true;
						}
					}
				}
			}
		}

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
    </head>
<body>
     <header id='header'>
     <img src="img/logo.png" id="logo" alt="">
        <nav id='menu-pc'>
        <ul>
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#publications">Publicações</a></li>
        </ul>
        </nav>
    </header>

    <section>
        <div id="divForms">
        <form action="Quiz.php" class="forms" method="POST">
                <h1 class="title" id="titleLogin"><?php
									if($foi == "nem") {
										echo "Quiz";}else if($foi == true) {
											echo "Parabens";
											}
								?></h1>
                <input type="text" placeholder="O que é moral?" class="input" name="quest1">
                <input type="text" placeholder="Qual é a diferença entre ética e moral?" class="input" name="quest2">
                <input type="text" placeholder="O que é considerado moral?" class="input" name="quest3">
                <input type="text" placeholder="O que é considerado imoral?" class="input" name="quest4">
                <input type="text" placeholder="O que é considerado amoral?" class="input" name="quest5">
                <button class="btnForms" name="submit">Entrar</button>
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
  </script>
</body>
</html>