<?php
	require_once "../Namer/Interfaces.php";
	require_once "../Namer/Traits.php";

	class DataReceiver implements Receiver{		
		private array $post;
		
		function __construct(string $rawPostData){
			$this->post = json_decode($rawPostData, JSON_OBJECT_AS_ARRAY);			
		}
		
		function getParsedData() :ParsedData{
			return new class($this->post) implements ParsedData{
				private array $Principal;
				private array $sideArticles;
				
				function __construct(array $post){
					$this->Principal 		= $post[0];
					$this->sideArticles 	= $post[1];
				}
				function get(bool $principal) :array{
					if($principal) return $this->Principal;
					return $this->sideArticles;
				}
			};
		}
	}
?>