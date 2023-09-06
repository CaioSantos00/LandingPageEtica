<?php
	require_once "../Namer/Interfaces.php";

	class DataReceiver implements Receiver{
		private array $post;
		function __construct(string $rawPostData){
			$this->post = json_decode($rawPostData, JSON_OBJECT_AS_ARRAY);			
		}
		function getParsedData() :ParsedData{
			return new class($this->post) implements ParsedData{
				private array $elements;
				private array $sideInformation;
				private array $sheets;
				
				function __construct(array $post){
					$this->elements 		= $post['elements'];
					$this->sideInformation 	= $post['sideInfo'];
					$this->sheets 			= array("estilos" => $post['styleSheet'], "scrips" => $post['scriptSheet']);
				}

				function GetFrontElements() :array{
					return $this->elements;
				}
				function GetSideInformation() :array{
					return $this->sideInformation;
				}
				function GetSheets() :array{
					return $this->sheets;
				}
			};
		}
	}
?>