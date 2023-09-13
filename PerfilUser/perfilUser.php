<?php
  if(!isset($_COOKIE['AuthCode'])) header('location: ../');
  $justData = true;
  require_once "../admin/php/View/Login.php";
  $data = new UserData($_COOKIE['AuthCode']);  
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
        <li><a href="../index.html#home">Home</a></li>
        <li><a href="../index.html#publications">Publicações</a></li>
        <li><a href="../pages/login.php">Login</a></li>
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
            <div class="nomeUser"><?= $data->userData['nome'] ?></div>
            <div class="emailUser"><?= $data->userData['Email'] ?></div>
          </div>
        </div>
        <button class="btnEdit">Editar</button>
        
      </div>
      <div class="divBtnCriaPubli">
        <a href="publicacoesSalvas.html"><button class="btnPubli">Publicações Salvas</button></a>
      </div>
    </div>

  </section>
</body>

</html>