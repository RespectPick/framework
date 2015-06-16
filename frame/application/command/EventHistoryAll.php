<?php
class EventHistoryAll extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){
            require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Student.php");
            $student=new Student();
            $student->getObject($_POST['student_id']);
            $student_id = $student->getId();
            
            $db=$this->init->getDB();
            $db->setQuery("SELECT `history_points`,`history_date`,`history_comment` 
                                FROM `framework_history` 
                                    WHERE `history_student_id` = '$student_id' AND `history_event_id` = 0");
            $data=$db->execute();
            
            $data1 = array();
            foreach($data as $elem){
             $comment = iconv("cp1251","UTF-8",$elem['history_comment']);
            array_push($data1,array("history_points"=>$elem['history_points'],"history_date"=>$elem['history_date'],"history_comment"=>$comment));
            
         }
         
         $history=array("history_points"=>$data1,"history_date"=>$data1,"history_comment"=>$data1);
          echo json_encode($history);
        
        
    }
  }
		  
 ?>