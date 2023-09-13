<?php
    require_once "admin/php/Namer/Traits.php";
    class PostManager{
        use DatabaseConnection;
        private string $postId;
        function __construct(string $action, string $postId = ''){
            $this->connec();            
        }
        private function switchByActions(string $action){
            switch($action){
                case "getAll";
                    
                    break;
                case "especifico";
                    
                    break;
            }
        }
    }
?>