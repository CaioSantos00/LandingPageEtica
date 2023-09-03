<?php
	class LoginVerifier{
		private string $email;
		private string $senha;
		private string $id;
		
		private PDO $conn;

		function __construct(string $email, string $senha){
			$this->email	 =$email;
			$this->senha	 =$senha;

			$this->conn = new PDO('mysql:dbname=etica;host=localhost;charset=UTF8','root');
		}

		function getVerification() :bool{
			try{
			$query = 'select Id from autores where Email = "'.$this->email.'" and Password = "'.$this->senha.'"';
			foreach($this->conn->query($query) as $cada){
				$resul[] = $cada;
			}
			if(count($resul) == 1){
				$this->id = $resul[0];
				return true;
			}
			return false;
			}catch(TypeError $e){
				if($e->getType == "TypeError") echo "mo fita";
			}
		}
	}
?>