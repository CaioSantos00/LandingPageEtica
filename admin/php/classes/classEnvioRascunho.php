<?php
    require_once "AuthorAuth.php";

    class Envio{
        private string $author;
        private string $postId;
        private string $content;
        private string $authorDir;

        private stdClass $post;
        private auth $auth;
        private PDO $conn;

        function __construct(array $post){
            $this->post = json_decode($post['dados']);

            $this->conn = new PDO('mysql:dbname=cms;host=localhost;charset=UTF8','root','');
            $this->auth = new AuthorAuth($this->post->autor, $this->conn);

            $this->author = $this->auth->getAuthorName();
            $this->content = $this->explodeContent($this->post->dados->paragrafos);

            $this->executeThem();
        }
        private function explodeContent(array $parags) :string{
            return json_encode($parags);
        }
        private function getPostId() :string{
            $query = "select (Id) from 'primaryData' where Titulo = '".$this->post->sideInfo->titulo."' and IdAutor = '".$this->auth->authorId."'";

            foreach($this->conn->query($query) as $cada) return $cada['Id'];
        }
        private function registerPost() :bool{
            try{
                $query = "insert into 'primaryData' (Titulo, Semititulo,IdAutor) values('".
                    $this->post->sideInfo->titulo."','".$this->post->sideInfo->semiTitulo."','".$this->auth->authorId
                ."')";
                $this->conn->query(query);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
        private function registerContentFile() :bool{
            $this->authorDir = $this->author."___".$this->auth->authorId;
            $route = "../../artigos/".$this->authorDir."/".$this->post->sideInfo->titulo."__".$this->postId.".txt";
            file_put_contents($route,$this->explodeContent());
        }
        private function verify() :bool{
            $condition = [$this->auth->authHe($this->author), $this->auth->getAutorDir()];
            $retorno = true;
            switch(true){
                case ($condition[0] && !$condition[1]):
                    mkdir("../../artigos/".$this->authorDir);
                break;
                case (!$condition[0] && $condition[1]):
                    $retorno = false;
                break;
                default:
                    $retorno = false;
            }
            return $retorno;
        }
        private function executeThem(){
            if($this->verify()){
                if($this->registerContentFile() && $this->registerPost()) return;
            }
        }
    }
    abstract class DatabaseManager{
        protected PDO $conn;
        function __construct(){
            $this->conn = new PDO('mysql:dbname=cms;host=localhost;charset=UTF8','root','');
        }
        abstract protected function verify();
    }

    class Envio extends DatabaseManager{

        private stdClass $post;
        private auth $auth;
        private array $authorData;

        function __construct(array $post){
            parent::__construct();

            $this->post = json_decode($post['dados']);
            $this->auth = new AuthorAuth($this->post->autor, $this->conn);
        }
        private function verify(string $nome) :bool{
            $query = parent::conn->prepare("select 'Id' from 'autores' where Nome = ?");
            foreach($query->execute([$nome]) as $cada){
                $this->authorId = $cada['Id'];
            }
            if(count($results['id']) == 1) return true;
            return false;
        }
        private function saveInFile(){
            
        }
    }
?>