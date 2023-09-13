<?php
	require_once "../Namer/Traits.php";

	class PostSaver{
		use DatabaseConnection;

		private ParsedData $dados;
		private string $postPath;
		private string $authorId;
		function __construct(ParsedData $dados){
			$this->dados = $dados;
			$this->connec();

			$this->authorId = explode("_", hex2bin($_COOKIE['AuthCode']))[0];			
			if(!is_dir("../../../autores/{$this->authorId}")) mkdir("../../../autores/{$this->authorId}");
			$this->postPath = "../../../autores/{$this->authorId}/{$this->conn->lastInsertId()}";
			if(!is_dir($this->postPath)) mkdir($this->postPath);
		}
		function saveThem(){
			$this->savePost();
			$this->savePrincipais($this->dados->get(true));
			$this->saveArticles($this->dados->get());
			$this->parsePictures();
		}
		private function savePrincipais(array $principais){
			$principais = fopen($this->postPath."/principais.txt", 'wb');
			fwrite($principais, json_encode($principais));
			fclose($principais);
		}
		private function saveArticles(array $articles){
			$artigos = fopen($this->postPath."artigos.txt", 'wb');			
			if(fwrite($artigos, json_encode($articles)) !== false){
				fclose($artigos);
				return true;
			}
			return false;
		}
		private function parsePictures(){
			$nroArqvs = count($_FILES['pics']['name']);
			if(!is_dir($this->postPath."/imgs")) mkdir($this->postPath."/imgs");
			if($nroArqvs > 1){
				for($x = 0; $x !=$nroArqvs; $x++){
					$ret[] = move_uploaded_file($_FILES['pics']['tmp_name'][$x], $this->postPath."/".$_FILES['pics']['name'][$x]);
				}
				return $ret;
			}
			return move_uploaded_file($_FILES['pics']['tmp_name'], $this->postPath."/".$_FILES['pics']['name']);
		}
		private function savePost(){			
			$dado = $this->dados->get(true);
			$query = $this->conn->prepare('insert into `posts`(`Title`,`WrittedBy`,`IsDone`) values (?,?,?)');
			return $query->execute([$dado['Titulo'],$this->authorId, 1]);			
		}
	}
?>