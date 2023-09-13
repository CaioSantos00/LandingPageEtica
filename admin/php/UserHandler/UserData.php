<?php
	require_once "../admin/php/Namer/Traits.php";
	class UserData{
		public array $userData;
		use DatabaseConnection;
		function __construct(string $cookie){
			$this->connec();
			$coo = $this->parseCookie($cookie);
			$this->getUserDataWithId($coo);
		}		
		private function parseCookie(string $cookie) :string{
			return explode('_',hex2bin($cookie))[0];
		}
		private function getUserDataWithId(string $id){
			$query = $this->conn->prepare("select `Name`, `Email` from `usuarios` where `Id` = ?");
			$query->execute([$id]);
			$query = $query->fetchAll();
			foreach($query as $cada){
				$this->userData['nome'] = $cada['Name'];
				$this->userData['Email'] = $cada['Email'];				
			}
		}		
	}
?>