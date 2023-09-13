<?php   
   //if(isset($_POST)){
      $require = '../../../';
      require_once "../Builder/DataReceiver.php";
      require_once "../UserHandler/UserVerify.php";
      
      $verifier = new UserVerify("Cookie");
      $receiver = new DataReceiver('[{"Titulo":"","SemiT":"","Descricao":""},[{"subTitulo":"","descricao":""}]]');      
      $data = $receiver->getParsedData();      
      print_r($data);
   //}      
?>