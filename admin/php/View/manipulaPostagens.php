<?php
	if(isset($_GET['action'])){
		require_once "admin/php/Builder/UserPostManage.php";

		$args = match($_GET['action']){
			'getAllSavedPosts' 	=> 	['getSavedPosts'],
			'saveAPost'			=> 	['saveAPost',$_GET['postToSave']],
			'openSpecificPost'	=>	['openAPost', $_GET['postToOpen']],
		};
		$Manager = new UserPostManage(...$args);
		echo $Manager->response;
	}
?>