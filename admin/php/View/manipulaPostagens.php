<?php
	if(isset($_GET['action'])){
		require_once "admin/php/Builder/UserPostManage.php";
		
				
		$Manager = match($_GET['action']){
			'getAllSavedPosts' 	=> 	new UserPostManage('getSavedPosts'),
			'saveAPost'			=> 	new UserPostManage('saveAPost',$_GET['postToSave']),
			'openSpecificPost'	=>	new UserPostManage('openAPost', $_GET['postToOpen']),			
		};
		
		echo $Manager->response;
	}
?>