<?php
	if(!isset($require)){
		require_once "admin/php/Namer/Traits.php";
	}else{
		require_once "{$require}admin/php/Namer/Traits.php";
	}	
	class UserVerify{
		use DatabaseConnection;

		private bool $result;
		private array $loginArgs;

        function __construct(){
			$this->connec();
		}
		function setLoginArgs(string $email, string $senha){
			$this->loginArgs = [$email, $senha];
		}
		function getResponse(string $by) :bool{
			$this->switchAuthMethodsBy($by);
			return $this->result;
		}
		private function switchAuthMethodsBy(string $by){
			//echo $by."<br>";
			//var_dump($by);
			switch($by){
				case "Cookie":
					if(!isset($_COOKIE['AuthCode'])){
						$this->result = false;
						return;
					}
					$this->result = $this->authHeById($_COOKIE['AuthCode']);
					break;
				case "Login":
					$this->result = $this->authHeByLogin($this->loginArgs[0], $this->loginArgs[1]);
					break;
				default:
					$this->result = false;
			}
		}
		private function changeAuth(string $id = "", string $admStatus = ""){
			if(!isset($_COOKIE['AuthCode']))	setcookie('AuthCode', bin2hex($id."_authenticated"),strtotime('+30 days'),'../');
			if(!isset($_COOKIE['AccStatus']))	setcookie('accStatus', bin2hex($admStatus."_admStatus"), strtotime('+30 days'),'../');
		}
        private function authHeById(string $encryptedIdToSearch) :bool{
			$encryptedIdToSearch = explode("_", hex2bin($encryptedIdToSearch))[0];			
            $select = $this->conn->prepare("SELECT `AccountStatus` from `usuarios` where `Id` = ?");
			$select->execute([$encryptedIdToSearch]);
			$query = $select->fetchAll();			
            if(is_array($query)){				
				foreach($query as $cada){
					$authorData['AccStatus'] = $cada['AccountStatus'];
				}
				if($authorData['AccStatus'] == "1"){
					$this->changeAuth('',"1");
					return true;
				}
				$this->changeAuth('','0');
				return true;
			}
            return false;
        }
		private function authHeByLogin(string $email, string $senha) :bool{
			$select = $this->conn->prepare("SELECT `Id`, `AccountStatus` from `usuarios` where Email = ? and Password = ?;");
			$select->execute([$email, $senha]);
			$query = $select->fetchAll();			
			if(is_array($query)){				
				foreach($query as $cada){
					$resul['Id'] = $cada['Id'];
					$resul['AccountStatus'] = $cada['AccountStatus'];
				}
				if(isset($resul['Id']) and isset($resul['AccountStatus'])){
					$this->changeAuth($resul['Id'], $resul['AccountStatus']);
					return true;	
				}
			return false;	
			}
			
		}		
	}
?>