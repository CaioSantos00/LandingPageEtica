<?php
	require_once "../Namer/Interfaces.php";
	require_once "../Namer/Traits.php";

	class DataReceiver implements Receiver{
		use DatabaseConnection;
		private array $post;
		function __construct(string $rawPostData){
			$this->post = json_decode($rawPostData, JSON_OBJECT_AS_ARRAY);
			var_dump( $this->post);
		}
		function getParsedData() :ParsedData{
			return new class($this->post) implements ParsedData{
				private array $elements;
				private array $sideInformation;

				function __construct(array $post){
					$this->elements 		= $post['elements'];
					$this->sideInformation 	= $post['sideInfo'];
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