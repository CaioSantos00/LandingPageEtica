<?php
	if(isset($action)){
		$toRequire = isset($realPath) ? "{$realPath}/admin/php/Builder/UserPostManage.php" : "admin/php/Builder/UserPostManage.php";
		require_once $toRequire;						
		$Manager = match($action){
			'getAllSavedPosts' 	=> 	new UserPostManage('getSavedPosts'),
			'saveAPost'			=> 	new UserPostManage('saveAPost',$postToSave),
			'openSpecificPost'	=>	new UserPostManage('openAPost', $postToOpen),			
		};				
	}
?>