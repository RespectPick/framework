<?php 

class AdminHistory extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){
		  
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Student.php");
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Event.php");
        $event = new Event();
		$student=new Student();
        $student->getObject($_POST['student_id']);
        
        $id = $student->getId();
     
        
        $db=$this->init->getDB();
         $db->setQuery("SELECT DISTINCT `history_event_id` FROM `framework_history` WHERE `history_student_id`='$id' ");
        $data=$db->execute();
         
         $data1=array();
         
         foreach($data as $elem){
            $event_id = $elem['history_event_id'];
            $event->getObject($event_id);
             $name = iconv("cp1251","UTF-8",$event->getEventName());
            array_push($data1,array("history_student_id"=>$id,"history_event_id"=>$event_id,"history_event_name"=>$name));
            
         }
        
        
        $history_event_id=array("history_student_id"=>$data1,"history_event_id"=>$data1,"history_event_name"=>$data1); 
        
       
        echo json_encode($history_event_id);
        
        
          
}
}
?>