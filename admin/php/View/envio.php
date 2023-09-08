<?php   
   if(isset($_POST)){
      require_once "../Builder/DataReceiver.php";
      require_once "../UserHandler/UserVerify.php";
      
      $verifier = new UserVerify("Cookie");
      $receiver = new DataReceiver($_POST['data']);
      
      $data = $receiver->getParsedData();      
      
   }      
?>