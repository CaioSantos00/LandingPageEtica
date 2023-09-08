<?php
	interface ParsedData{
		public function GetFrontElements();
		public function GetSideInformation();
		public function GetSheets();
	}
	interface Receiver{
		public function GetParsedData() :ParsedData;
	}	
	interface Register{
		public function registryHe() :bool;
	}
?>