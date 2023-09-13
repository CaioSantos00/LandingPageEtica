<?php
	if(isset($_POST['submit'])){
		require_once "../php/UserCadaster.php";
		
		$cad = new UserCadaster($_POST['nome'], $_POST['email'],$_POST['senha']);
		$cad->registry();		
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
    <script>
		let resul = <?= $cad ?>;
		
		if(resul == "false"){
			console.log("nem foi")
		}
	</script>
</head>
<body>
     <header id='header'>
     <img src="../img/logo.png" id="logo" alt="">
        <nav id='menu-pc'>
        <ul>
            <li><a href="./index.php#home">Home</a></li>
            <li><a href="./index.php#publications">Publicações</a></li>
        </ul>
        </nav>   
    </header>
    <section>
        <div id="divForms">
            <form action="registroUser.php" class="forms" method="POST">
                <h1 class="title">Cadastre-se</h1>
				<input type="text" placeholder="Nome" 	class="input" name="nome">
                <input type="text" placeholder="Email" 	class="input" name="email">
                <input type="text" placeholder="Senha" 	class="input" name="senha">                
                <input type="submit" class="btnForms" name="submit" value="Cadastrar">
                <a href="login.php" id="passEsque">já tem conta? Entre</a>
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