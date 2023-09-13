<?php
	//require_once "admin/php/Namer/Traits.php";
	$toRequire = isset($realPath) ? "{$realPath}/admin/php/Namer/Traits.php" : "admin/php/Namer/Traits.php";
	require_once $toRequire;
	class UserPostManage{
		use DatabaseConnection;

		public 	string $response;
		private string $action;
		private string $savedPosts;
		private string $userId;

		function __construct(string $action, string $postToManipulate = ''){
			$this->connec();
			$this->response = $postToManipulate;
			if($this->getUserId()) $this->switchActions($action);			
		}
		private function getUserId() :bool{
			try{
				if(!isset($_COOKIE['AuthCode'])) throw new Exception();
				$this->userId = explode('_',hex2bin($_COOKIE['AuthCode']))[0];
				return true;
			}catch(Exception $e){
				return false;
			}
		}
		private function incrementValueInJsonArray(string $valueToAdd, string $jsonString) :string{
			$returnValue	= json_decode($jsonString);
			$returnValue[]	= $post;

			return json_encode($returnValue);
		}
		private function switchActions(string $action){
			switch($action){
				case "getSavedPosts";
					$this->getSavedPosts();
					$this->response = $this->savedPosts;
					break;

				case "savePost";
					$this->getSavedPosts();
					$this->savePost($this->response);
					break;

				case "openAPost";
					$this->response = $this->getSpecificPost($this->response);
					$this->response = json_encode($this->response);
					break;
			}
		}
		private function getSavedPosts(){
			$posts = $this->conn->prepare('select `SavedPosts` from `usuarios` where `Id` = ?');			
			$posts->execute([$this->userId]);
			$this->savedPosts = json_encode($posts->fetchAll());
		}
		private function getSpecificPost(string $postId) :array{
			$post = $this->conn->prepare('select `Title`, `WrittedBy`, `IsDone` from `posts` where `Id` = ?');
			$post->fetchAll();
			$post = $post->execute([$postId]);
			return $post;
		}
		private function savePost(string $postId){
			$this->savedPosts = $this->incrementValueInJsonArray($postId, $this->savedPosts);

			$query = $this->conn->prepare('update `usuarios` set `SavedPosts` = ? where `Id` = ?');
			$query->fetchAll();
			if($query->execute([$this->savedPosts, $this->userId]) == 1){
				$this->response = "true";
				return;
			}
			$this->response = "false";
		}
	}
?>