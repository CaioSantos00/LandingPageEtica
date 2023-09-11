<?php
	require_once "admin/php/Namer/Traits.php";

	class UserPostManage{
		use DatabaseConnection;

		public 	string $response;
		private string $action;
		private string|array $savedPosts;
		private string $userId;

		function __construct(string $action, string $postToManipulate = ''){
			$this->connec();
			$this->response = $postToManipulate;
			$this->switchActions($action);
		}
		private function getUserId(){
			$this->userId = explode('_',hex2bin($_COOKIE['AuthCode']))[0];
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
			$posts->fetchAll();

			$this->savedPosts = $posts->execute([$this->userId]);
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