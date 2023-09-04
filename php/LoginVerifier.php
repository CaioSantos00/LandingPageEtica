<?php
	class LoginVerifier{
		private string $email;
		private string $senha;
		private string $id;
		private string $response = "true";
		private PDO $pdo;
		
		function __construct(string $email, string $senha){
			$this->senha = $senha;
			$this->email = $email;
			
			$this->pdo = new PDO('mysql:dbname=etica;host=localhost;charset=UTF8','root','');
		}
		function __toString(){
			return $this->response;
		}
		function verify(){			
			$query1 = "select Id from usuarios where Email = '{$this->email}' and Password = '{$this->senha}'";
			$query2 = "select Id from autores where Email = '{$this->email}' and Password = '{$this->senha}'";
			
			
			foreach($this->pdo->query($query1) as $cada1){
				$resul['normal'][] = $cada1;
			}
			foreach($this->pdo->query($query2) as $cada2){
				$resul['autor'][] = $cada2;
			}
			
			if(isset($resul)){
				if(isset($resul['autor'])) header('location: ../admin/cadastroPostagem.php');
				if(isset($resul['normal'])) header('location: ../');
				
				$this->response = "false";
			}
			
		}
	}
?>