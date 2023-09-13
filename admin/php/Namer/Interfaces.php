<?php
	interface ParsedData{
		public function get(bool $a) :array;
	}
	interface Receiver{
		public function GetParsedData() :ParsedData;
	}	
	interface Register{
		public function registryHe() :bool;
	}
?>