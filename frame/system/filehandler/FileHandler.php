<?php
	/*
	 * »спользовать только с инициализатором!
	 * */
	class FileHandler{
		public static function loadFile($filePost,$fileDir=""){
			$init=Init::init();//пришлось подцепл€ть инициализатор			
			if ($fileDir==""){
				$fileDir=$init->getConfig()->getValue("defaultFileDir");
			}			
			$fileDir=$fileDir;
			$tmp=$filePost['tmp_name'];			
			if (@file_exists($tmp)){
				$info=@getimagesize($tmp);				
				if(preg_match('(image/(.*))is',$info['mime'],$p)){
					$fnameClean=time().".".$p[1];
					$fname=$_SERVER['DOCUMENT_ROOT'].$fileDir.$fnameClean;													
					if(move_uploaded_file($tmp, $fname)){
							chmod($fname,0765);							
							return $fnameClean;
						}
						else{
							
							return false;
						}
				}	
			}	
			else{
				//обработка ошибки
			}	
		}
		public static function fileDelete($url,$fileDir=""){
			$init=Init::init();
			if ($fileDir==""){
				$fileDir=$init->getConfig()->getValue("defaultFileDir");
			}
			$url=$_SERVER['DOCUMENT_ROOT'].$fileDir.$url;
			if (@file_exists($url)){
				unlink($url);
			}
		}
	}
	//FileHandler::loadFile($_FILES['uploadedImage'],"/calculator/assets/img/background/");
	//FileHandler::FileDelete("/calculator/assets/img/background/1398079410.png");
?>