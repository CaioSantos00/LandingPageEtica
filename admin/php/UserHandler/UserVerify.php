<?php
	require_once "../Namer/Traits.php";

	class UserVerify{
		use DatabaseConnection;
		
		private bool $result;
		private array $loginArgs;
		
        function __construct(string $by){
			$this->switchAuthMethodsBy($by);
        }
		function setLoginArgs(string $email, string $senha){
			$this->loginArgs = [$email, $senha];
		}
		private function switchAuthMethodsBy(string $by){
			switch($by){
				case "Cookie":
					if(!isset($_COOKIE['AuthCode'])) exit('nn ta logado');
					$this->result = $this->authHeById($_COOKIE['AuthCode']);
					break;
				case "Login":
					$this->result = $this->authHeByLogin($this->loginArgs[0], $this->loginArgs[1]);
					break;
			}
		}
		private function changeAuth(string $id = "", string $admStatus = ""){
			if(!isset($_COOKIE['AuthCode']))	setcookie('AuthCode', bin2hex($id."_authenticated",strtotime('+30 days')));
			if(!isset($_COOKIE['AccStatus']))	setcookie('accStatus', bin2hex($admStatus."_admStatus", strtotime('+30 days')));
		}
        private function authHeById(string $encryptedIdToSearch) :bool{
			$encryptedIdToSearch = explode("_", hex2bin($encryptedIdToSearch))[0];
			
            $select = $this->conn->prepare("SELECT AccountStatus from 'usuarios' where Id = ?");
            foreach($select->execute([$encryptedIdToSearch]) as $cada){				
				$authorData['AccStatus'][] = $cada['AccountStatus'];
			}
			
            if(count($authorData['Name']) != 0){				
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
			$select = $this->conn->prepare("SELECT Id, AccountStatus from 'usuarios' where Email = ? and Password = ?");

			foreach($select->execute([$email, $senha]) as $cada){				
				$resul['Id'] = $cada['Id'];
				$resul['AccountStatus'] = $cada['AccountStatus'];
			}
			if(count($resul) == 2){
				$this->changeAuth($resul[0], $resul[1]);
				return true;
			}
			return false;
		}
	}
?>