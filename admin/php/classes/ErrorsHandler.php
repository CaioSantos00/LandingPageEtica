<?php
    class ErrorsHandler{
        private string logErrorsPath = "../logErrors.csv";
        private $arqv;
        function __construct(){
            $this->arqv = fopen($this->lorErrorsPath);
            var_dump($this->arqv)
        }
        
        private function setError(string $errorMsg){
            fputcsv([$errorMsg]);
        }
        
        function __destruct(){
            fclose($this->arqv);
        }
    }
?>