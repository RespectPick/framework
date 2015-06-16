<?php                                           
/*===========================================================Добавление нового типа события===============================*/
class AddExcelFile extends Command{
    public function getLocation(){
		return "addExcelFile";
	}
    
    	public function publicPage(){
			return true;
		}
        
        
        	public function execute(){
        	   
               require_once ('/assets/PHPExcel/IOFactory.php');
 
            print_r($_FILES['userfile']['name']);
               
            }
 }
?>