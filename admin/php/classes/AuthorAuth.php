<?php
    require_once "Iauth.php";

    class AuthorAuth implements auth{
        private PDO $conn;
        private string $author;
        public string $authorId;

        function __construct(string $nome, PDO $conn){
            $this->author   = $nome;
            $this->conn     = $conn;
        }
        function __call($oq){
            return $this->$oq;
        }
        function authHe() :bool{            
            $select = $conn->prepare("SELECT Id from 'autores' where Nome = ?");
            foreach($select->execute([$this->author]) as $cada) $this->authorId = $cada['Id'];

            if($this->authorId != "") return true;
            return false
        }
    }
?>