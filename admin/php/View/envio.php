<?php   
   //if(isset($_POST)){
      $require = '../../../';
      require_once "../Builder/DataReceiver.php";
      require_once "../UserHandler/UserVerify.php";
      require_once "../Builder/PostSaver.php";
      
      $verifier = new UserVerify("Cookie");
      $receiver = new DataReceiver($_POST['data']);      
      $data = $receiver->getParsedData();      
      //print_r($data);
      $saver = new PostSaver($data);
      $saver->saveThem();
      //PRINT_R($_FILES);
   //}      
?>