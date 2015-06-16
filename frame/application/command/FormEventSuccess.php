<?php
/*!----------------------------------------------------------Добавление и изменение события-------------------------------------------------------!*/
class FormEventSuccess extends Command{
    public function getLocation(){
		return "addEventForm";
	}
	public function publicPage(){
			return true;
		}
		public function execute(){
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Event.php");
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/EventsType.php");
			$my_event=new Event();
            $event_type = new EventsType();


        if(empty($_POST['event_id'])){
            
            $event_name=htmlspecialchars($_POST['event_name']);
            $event_type_id = htmlspecialchars($_POST['event_type_id']);
    		$event_period_start=htmlspecialchars($_POST['event_period_start']);
            $event_period_end=htmlspecialchars($_POST['event_period_end']);
            
            $event_name = iconv("UTF-8","cp1251",$event_name);
            
           
           
            
            $element=explode(".",$event_period_start);
            $element2=explode(".",$event_period_end);
			//Добавление события
			$my_event->setEventName($event_name);
            $my_event->setEventTypeId($event_type_id);
			$my_event->setEventPeriodStart($element[2].$element[1].$element[0]);
			$my_event->setEventPeriodEnd($element2[2].$element2[1].$element2[0]);
            $my_event->loadObject();
            $event_type->getObject($event_type_id);
            //print_r($event_type);
            
            $a = iconv("cp1251","UTF-8",$my_event->getEventName());
            
            $new_start = $my_event->getEventPeriodStart();
            $new_start = $new_start[6].$new_start[7].".".$new_start[4].$new_start[5].".".$new_start[0].$new_start[1].$new_start[2].$new_start[3];
            
            
            $new_end = $my_event->getEventPeriodEnd();
            $new_end = $new_end[6].$new_end[7].".".$new_end[4].$new_end[5].".".$new_end[0].$new_end[1].$new_end[2].$new_end[3];
        
           $eventTypeName=iconv("cp1251","UTF-8",$event_type->getEventsTypeName());
           $students=array("event_id"=>$my_event->getId(),"event_name"=>$a,"event_type_id"=>$my_event->getEventTypeId(),"event_type_name"=>$eventTypeName,"event_period_start"=>$new_start,"event_period_end"=>$new_end); 
           header('Content-type:text/json; charset="utf-8;"');
           echo json_encode($students);
            
            
            
        }else{
  
 			$my_event->getObject($_POST['event_id']);
                       
            $event_name=htmlspecialchars($_POST['event_name']);
            $event_type_id = htmlspecialchars($_POST['event_type_id']);
    		$event_period_start=htmlspecialchars($_POST['event_period_start']);
            $event_period_end=htmlspecialchars($_POST['event_period_end']);
            
            
            
            $element=explode(".",$event_period_start);
            $element2=explode(".",$event_period_end);
			//Добавление студента
			$my_event->setEventName($event_name);
            $my_event->setEventTypeId($event_type_id);
			$my_event->setEventPeriodStart($element[2].$element[1].$element[0]);
			$my_event->setEventPeriodEnd($element2[2].$element2[1].$element2[0]);
            
            
            $my_event->loadObject();
            
            header("Location:/frame/admin");
                
            
			}
			
    
    
    

            
		
	}

}


			
		
?>