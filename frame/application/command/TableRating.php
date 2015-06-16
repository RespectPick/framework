<?php
/*!----------------------------------------------------------Пользовательская часть-------------------------------------------------------!*/

class TableRating extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Student.php");

		$student=new Student();
		$students=array();
        

        $collection1=Student::getCollection(Init::init()->getDB(),"framework_students_mod","Student",array("student_id"=>$_GET['student_id']),"student",array());
        

        }

        
        
    
	
}
?>