<?php
	require_once "../Namer/Traits.php";

	class PostSaver{
		use DatabaseConnection;

		private ParserData $dados;
		private string $postPath;
		private string $authorId;
		function __construct(ParsedData $dados){
			$this->dados = $dados;
			$this->connec();

			$this->authorId = explode("_", hex2bin($_COOKIE['AuthCode']))[0];
			$this->postPath = "../../../postagens/{$this->authorId}/{$this->conn->lastInsertId()}";
		}
		private function savePrincipais(array $principais){
			$principais = fopen($this->postPath."/principais.txt", 'wb');
			fwrite($principais, json_encode($principais));
			fclose($principais);
		}
		private function saveArticles(array $articles){
			$artigos = fopen($this->postPath."artigos.txt", 'wb');			
			fwrite($artigos, json_encode($articles));
			fclose($artigos);
		}
		private function parsePictures(){
			//$_FILES['pics']
		}
		private function savePost(){
			$dado = $this->dados->get(true);
			$query = $this->conn->prepare('insert into `posts`(`Title`,`WrittedBy`,`IsDone`) values (?,?,?)');
			$query->execute([$dado['Titulo'],$this->authorId, 1]);
			echo $quey->fetchAll();
		}
	}
?>