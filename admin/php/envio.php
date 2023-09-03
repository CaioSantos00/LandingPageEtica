<?php
    if(isset($_POST['dados'])){
        require_once "classes/classEnvio.php";        
        $env = new Envio($_POST);    
    }
?>