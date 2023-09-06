<?php   
   if(isset($_POST)){
      require_once "../Builder/DataReceiver.php";
      $receiver = new DataReceiver($_POST['data']);
      $data = $receiver->getParsedData();
      
      var_dump($data);
   }      
?>