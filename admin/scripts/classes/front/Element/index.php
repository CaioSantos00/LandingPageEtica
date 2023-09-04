<?php
	require '../../../../../vendor/autoload.php';
	use MatthiasMullie\Minify;
	$cacheFile = '../../../../cache/MinifiedElement.js';	
		
	if(file_exists($cacheFile) && (filemtime($cacheFile)+3600) >time()){
		header('Content-Type: application/javascript');		
		readfile($cacheFile);
	}else{		
		
		$minifier = new Minify\JS();	
		$dir = array_diff(scandir("./"), [".","..","index.php"]);
		foreach($dir as $file){
			$minifier->add($file);
		}
		$minified = $minifier->minify();
		file_put_contents($cacheFile, $minified);			
		header('Cache-Control: public, max-age=3600');
		header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');    
		header('Content-Type: application/javascript');				
		echo $minified;
	}
?>