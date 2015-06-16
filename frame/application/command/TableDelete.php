<?php
class TableDelete extends Command{
    	public function publicPage(){
			return true;
		}	
	public function execute(){

		$student_id=htmlspecialchars($_POST['student_id']);
		$db=$this->init->getDB();
		$arr=array("student_id"=>$student_id);
		$data=$db->deleteAllRow("framework_students_mod",$arr);
		header("Location:/frame/adminstud");
	}
}
?>