<?php
	require_once "../Namer/Traits.php";

	class UserVerify{
		use DatabaseConnection;
		
		private bool $result;
		private array $loginArgs;
		private bool $isAdm;
		
        function __construct(string $by){
			$this->switchAuthMethodsBy($by);
        }
		function setLoginArgs(string $email, string $senha){
			$this->loginArgs = [$email, $senha];
		}
		private function switchAuthMethodsBy(string $by){
			switch($by){
				case "Cookie":
					$this->result = $this->authHeById($_COOKIE['AuthCode']);
					break;
				case "Login":
					$this->result = $this->authHeByLogin($this->loginArgs[0], $this->loginArgs[1]);
					break;
			}
		}		
        private function authHeById(string $encryptedIdToSearch) :bool{
			$encryptedIdToSearch = explode("_", hex2bin($encryptedIdToSearch))[0];
			
            $select = $this->conn->prepare("SELECT Id,AccountStatus from 'usuarios' where Id = ?");
            foreach($select->execute([$encryptedIdToSearch]) as $cada){
				$authorData['Id'][] = $cada['Id'];
				$authorData['AccStatus'][] = $cada['AccountStatus'];
			}
			
            if(count($authorData['Id']) != 0){
				if($authorData['AccountStatus'] == "1"){
					$this->isAdm = true;
				}
				return true;
			}
			$this->isAdm = false;
            return false;
        }		
		private function authHeByLogin(string $email, string $senha) :bool{
			$select = $this->conn->prepare("SELECT Id, AccountStatus from 'usuarios' where Email = ? and Password = ?");

			foreach($select->execute([$email, $senha]) as $cada){				
				$resul['Id'] = $cada['Id'];
				$resul['AccountStatus'] = $cada['AccountStatus'];
			}
			if(count($resul) == 2){
				setcookie('AuthCode', bin2hex($resul[0]."_authenticated",strtotime('+30 days')));
				setcookie('accStatus', bin2hex($resul[1]."_admStatus", strtotime('+30 days')));
				return true;
			}
			return false;
		}
	}
?>