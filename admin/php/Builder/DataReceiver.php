<?php
	require_once "../Namer/Interfaces.php";
	require_once "../Namer/Traits.php";

	class DataReceiver implements Receiver{		
		private array $post;
		
		function __construct(string $rawPostData){
			$this->post = json_decode($rawPostData, JSON_OBJECT_AS_ARRAY);
			print_r($this->post);
		}
		
		function getParsedData() :ParsedData{
			return new class($this->post) implements ParsedData{
				private array $Principal;
				private array $sideArticles = [];
				private bool $hasArticles = false;
				
				function __construct(array $post){
					if(isset($post[0])){
					$this->hasArticles 		= true;
					$this->Principal 		= $post[0];
					$this->sideArticles 	= $post[1];
					return;	
					}
					$this->Principal 		= $post;					
				}
				function get(bool $principal = false) :array{
					if($principal) return $this->Principal;
					return $this->sideArticles;
				}
			};
		}
	}
?>