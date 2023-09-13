<?php
	if(isset($require)){
		require_once "{$require}admin/php/UserHandler/UserVerify.php";
	}else{
		if(isset($justData)){
			require_once "../admin/php/UserHandler/UserData.php";
		}else{
			require_once "admin/php/UserHandler/UserVerify.php";
			}		
	}	
?>