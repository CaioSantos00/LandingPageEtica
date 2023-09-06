<?php
	class UserCadaster{
		private string $nome;
		private string $email;
		private string $senha;
		private PDO $pdo;
		
		function __construct(string $nome, string $email, string $senha){
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
			
			$this->pdo = new PDO('mysql:dbname=etica;host=localhost;charset=UTF8','root','');
		}
		function __toString() return "nn foi";
		
		function registry(){			
			$query = $this->pdo->prepare("INSERT INTO `usuarios` (`Id`, `Name`, `Email`, `Password`, `SavedPosts`, `FollowingAuthors`) VALUES (?,?,?,?,?,?)");			
			$registro = $query->execute(['null', $this->nome, $this->email, $this->senha, '','',]);						
			if($registro == 1) header('location: ./login.php');	return;
		}
	}
?>