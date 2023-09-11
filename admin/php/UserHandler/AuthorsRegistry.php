<?php
	require_once "php/Namer/Traits.php";
	require_once "php/Namer/Interfaces.php";
	
	class AuthorsRegistry implements Register{
		use DatabaseConnection;

		private array $authorData;
		function __construct(string $id){
			$this->authorData = [$id];
		}
		function registryHe() :bool{
			$query = $this->conn->prepare("update 'usuarios' set AccountStatus = 1, where Id = ?");
			if($query->execute($this->authorData) == 1){
				mkdir('../postagens/'.$this->authorData[0]);
				return true;
			}
			return false;
		}
	}
?>