<?php
	//изменяем права доступа к файлу
	function hideConfig($filename){
		if (file_exists($filename)){
			if (chmod($filename,0600)){
				return true;
			}	
			else{
				return false;
			}
		}
		else{
			throw new Exception("Cannot find file!");
		}		
	}
	if (hideConfig('config.xml')&&hideConfig('route.xml')){
		echo "Evolution complete!";	
	}
	
?>