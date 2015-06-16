<?php
/*===========================================================ƒобавление баллов=============================================*/
class AddPoints extends Command{
        public function getLocation(){
		return "addPointForm";
	}
	public function publicPage(){
			return true;
		}
        
        public function execute(){
           $stud_count = htmlspecialchars($_POST['stud_count']); // счетчик количества студентов
            
            for($i = 0;$i<$stud_count;$i++){ // получаем с поста данные
                     $event_id=htmlspecialchars($_POST['event_point_name2']);
                     $student_id = htmlspecialchars($_POST['student_id'.$i]);
                     $points_before = htmlspecialchars($_POST['student_points_before'.$i]);
                     $points = htmlspecialchars($_POST['student_points'.$i]);
                     $points2 = $points + $points_before;
                     $comment = htmlspecialchars($_POST['student_comment'.$i]);
                     $date = date("Y-m-d");
             

          $db=$this->init->getDB();
          $db1=$this->init->getDB();
          // есть ли строка в Ѕƒ и количество баллов больше 0, тогда вставл€ем баллы и историю
          if ($db->getNumRow('framework_points',array("points_student_id"=>$student_id,"points_event_id"=>$event_id))>0 && $points>0){ 
                $db->setQuery("INSERT INTO `framework_points`(`points_student_id`, `points_event_id`, `points_points`) 
                                VALUES ('$student_id','$event_id','$points2')");
                $db->execute();
         
                $db1->setQuery("INSERT INTO `framework_history`(`history_student_id`,`history_event_id`,`history_points`,`history_date`,`history_comment`)
                                    VALUES ('$student_id','$event_id','$points','$date','$comment')");
                $db1->execute();
         }
         else{
         // если нет строки вставл€ем баллы и историю
            $db->setQuery("INSERT INTO `framework_points`(`points_student_id`, `points_event_id`, `points_points`) 
                            VALUES ('$student_id','$event_id','$points2')");
            $db->execute();
            
            $db1->setQuery("INSERT INTO `framework_history`(`history_student_id`,`history_event_id`,`history_points`,`history_date`,`history_comment`)
                                VALUES ('$student_id','$event_id','$points','$date','$comment')");
            $db1->execute();
         }
            
         }
    Header("Location:admin");
    }  
}
       
        
        
        
        
 

?>