<?php
    class PostSaver{
        private $postFile;
        private array $dadosPostagens;
        function __construct(string $pathToPostArqv, array $dadosPostagens){
            $this->pathToPostArqv = fopen($pathToPostArqv, 'a+');
            $this->dadosPostagens = $dadosPostagens;
        }
        function writeData(){
            foreach($this->dadosPostagens as $dados){
                fputcsv($this->pathToPostArqv,json_encode($dados));
            }
        }
        function __destruct(){
            fclose($this->pathToPostArqv);
        }
    }
?>