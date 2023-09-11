<?php
	require_once "../admin/php/Namer/Traits.php";
	require_once "../admin/php/Namer/Interfaces.php";
	
	class UserRegistry implements Register{
		use DatabaseConnection;
		
		private array $userData;		
		function __construct(string $nome, string $email, string $senha){
			$this->userData = [$nome, $email, $senha];
			$this->connec();
		}		
		function registryHe() :bool{
			$query = $this->conn->prepare("insert into `usuarios` (`Name`, `Email`,`Password` ) values (?,?,?)");			
			$query->fetchAll();
			$query = $query->execute($this->userData);
			if($query == 1) return true;
			return false;
		}
	}
?>