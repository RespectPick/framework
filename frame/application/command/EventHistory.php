<?php 

class EventHistory extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){
		  
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Student.php");
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Event.php");
        $event = new Event();
		$student=new Student();
        $event->getObject($_POST['event_id']);
        $student->getObject($_POST['student_id']);
        
        $student_id1 = $student->getId();        
        $event_id1 = $event->getId();
  
     
        
        $db=$this->init->getDB();
         $db->setQuery("SELECT `history_points`,`history_date`,`history_comment`,`history_event_id`
                        FROM `framework_history` WHERE `history_student_id`='$student_id1' 
                            AND `history_event_id`='$event_id1'");
        $data=$db->execute();
         
         $data1=array();
         
         foreach($data as $elem){
             $comment = iconv("cp1251","UTF-8",$elem['history_comment']);
            array_push($data1,array("history_event_id"=>$elem['history_event_id'],"history_points"=>$elem['history_points'],"history_date"=>$elem['history_date'],"history_comment"=>$comment));
            
         }
        
        
        $history=array("history_event_id"=>$data1,"history_points"=>$data1,"history_date"=>$data1,"history_comment"=>$data1); 
        
       
        echo json_encode($history);
        
        
          
}
}
?>