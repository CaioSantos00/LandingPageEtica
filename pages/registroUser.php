<?php
	$cad = "'nada'";
	if(isset($_POST['submit'])){
		require_once "../php/UserCadaster.php";
		
		$cad = new UserCadaster($_POST['nome'], $_POST['email'],$_POST['senha']);
		$cad->registry();		
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ética | Cidadania</title>
    <link rel="stylesheet" href="../css/minifiers/miniLogin.php">
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
            <li><a href="../index.html#home">Home</a></li>
            <li><a href="../index.html#publications">Publicações</a></li>
            <li><a href="#">Projetos</a></li>
        </ul>
        </nav>   
    </header>
    <section>
        <div id="divForms">
            <form action="registroUser.php" id="formLogin" method="POST">
                <h1 class="title" id="titleLogin">Cadastre-se</h1>
				<input type="text" placeholder="Nome" 	class="input" name="nome">
                <input type="text" placeholder="Email" 	class="input" name="email">
                <input type="text" placeholder="Senha" 	class="input" name="senha">                
                <input type="submit" id="entrar" name="submit" value="Cadastrar">                                
                <a href="./login.php" id="passEsque">já tem conta?<br> Entre</a>
            </form>
        </div>
    </section>
</body>
</html>