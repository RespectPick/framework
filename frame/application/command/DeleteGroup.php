<?php /*Удаление группы  */
class DeleteGroup extends Command{
    	public function publicPage(){
			return true;
		}	
	public function execute(){

		$group_id=htmlspecialchars($_POST['groups']);
        $db=$this->init->getDB();
        
                
         $db->setQuery("SELECT `student_id`
                        FROM `framework_students_mod`
                            WHERE `student_group_id` = '$group_id'");
         $data=$db->execute();
         foreach($data as $elem){
             $db1=$this->init->getDB();
             $db1->setQuery("DELETE FROM `framework_history` WHERE `history_student_id` = ".$elem['student_id']."");
             $db1->execute();
         }
		$arr=array("group_id"=>$group_id);
        $arr1=array("student_group_id"=>$group_id);
		$data=$db->deleteAllRow("framework_group",$arr);
        $data=$db->deleteAllRow("framework_students_mod",$arr1);

         
        header("Location:/frame/adminstud");
	}
}
?>