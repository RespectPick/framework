<?php
class DeletePointsAll extends Command{
        public function getLocation(){
		return "deletePointsAllForm";
	}
	public function publicPage(){
			return true;
		}
        
        public function execute(){
        
        $student_id = htmlspecialchars($_POST['allPoint_id']);
        $points = htmlspecialchars($_POST['allPoint_DeletePoints']);
        $comment = htmlspecialchars($_POST['allPoint_Comment']);
        $date = date("Y-m-d");
        $points = $points*-1;
        
        $db=$this->init->getDB();
        $db->setQuery("INSERT INTO `imi_bd`.`framework_points` (`points_student_id` ,`points_event_id` ,`points_points`)
                        VALUES ('$student_id', '0', '$points')");
        $db->execute();
        
        $db1=$this->init->getDB();
        $db1->setQuery("INSERT INTO `imi_bd`.`framework_history` (`history_student_id` ,`history_event_id` ,`history_points`,`history_date`,`history_comment`)
                        VALUES ('$student_id', '0', '$points','$date','$comment')");
        $db1->execute();
        
        
        
        Header("Location:adminstud");
        
  }
}