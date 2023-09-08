<?php
	require_once "../Namer/Traits.php";
	require_once "../Namer/Interfaces.php";
	
	class AuthorsRegistry implements Register{
		use DatabaseConnection;

		private array $authorData;
		function __construct(string $id){
			$this->authorData = [$id];
		}
		function registryHe() :bool{
			$query = $this->conn->prepare("update 'usuarios' set AccountStatus = 1, where Id = ?");
			if($query->execute($this->authorData) == 1) return true;
			return false;
		}
	}
?>