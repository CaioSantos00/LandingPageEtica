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
		function __construct(){
			$this->pdo = new PDO('mysql:dbname=etica;host=localhost;charset=UTF8','root','');
		}
		function __toString(){
			return $this->response;
		}
		function verifyPrevious(){
			$query1 = "select Id from usuarios where Id = '{$_COOKIE['oUserChegouLogado']}'";
			$query2 = "select Id from autores where Id = '{$_COOKIE['admChegouLogado']}'";
			
			foreach($this->pdo->query($query1) as $cada1) $resul['normal'][] = $cada1;			
			foreach($this->pdo->query($query2) as $cada1) $resul['autor'][] = $cada1;
			
			if(isset($resul)){
				if(isset($resul['autor'])) return [true, "éAdmOHomi"];
				if(isset($resul['normal'])) return true;
			}
			return false;
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
				if(isset($resul['autor'])) 	$this->setLogin(true);
				if(isset($resul['normal'])) $this->setLogin();				
			}
		}
		private function setLogin(bool $eadm = false){
			if($eadm){				
				setcookie('admChegouLogado', $id);
				header('location: ../admin/cadastroPostagem.php');				
				return;
			}
			setcookie('oUserChegouLogado', $id);
			header('location: ../');
		}
	}
?>