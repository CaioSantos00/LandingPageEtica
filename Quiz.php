<?php
	$foi = 'nem';
	if(isset($_POST['submit'])){
		$respostas = ['moral e iss','','','',''];
		$foi = true;
		for($x = 1; $x != 6; $x++){
			if($respostas[$x] != $_POST['quest'.$x]){
				$foi = false;
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
	<script>
	let foi = '<?= $foi ?>';
	let questoes =
	['O que é moral?',
		'Qual é a diferença entre ética e moral?',
		'O que é considerado moral?',
		'O que é considerado imoral?',
		'O que é considerado amoral?'
	];	
	let inputs = document.getElementsByClassName('input');
	console.log(inputs)
	for(let x = 0;x != 5;x++){
		inputs[x].placeholder = questoes[x];
	}
	</script>
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
        <form action="Quiz.php" class="forms" method="POST">
                <h1 class="title" id="titleLogin">Login</h1>
                <input type="text" placeholder="" class="input" name="quest1">
                <input type="text" placeholder="" class="input" name="quest2">
                <input type="text" placeholder="" class="input" name="quest3">
                <input type="text" placeholder="" class="input" name="quest4">
                <input type="text" placeholder="" class="input" name="quest5">
                <button class="btnForms" name="submit">Entrar</button>
            </form>
        </div>
    </section>
</body>
</html>