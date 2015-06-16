<?php
/*!----------------------------------------------------------Отображение формы добавления эвента-------------------------------------------------------!*/

class FormEvent extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){

        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Event.php");

		$event=new Event();
		$events=array();
        
        
        $collection1=Event::getCollection(Init::init()->getDB(),"framework_events","Event",array("event_id"=>$_GET['event_id']),"event",array());
        
        
        
        if(isset($_GET['event_id'])){
		if ($collection1->getQuantity()>0){	
            foreach ($collection1 as $event){
              
                

				array_push($events,array("event_id"=>$event->getID(),"event_name"=>$event->getEventName(),"event_period_start"=>$event->getEventPeriodStart(),"event_period_end"=>$event->getEventPeriodEnd(),"event_type_id"=>$event->getEventTypeId()));
		      
             }
        }
        else{
            array_push($events,array("event_id"=>0));
        }
        }

        
        
        $this->init->getSmarty()->assign('Event',$events[0]);
        echo json_encode($result    );
	}

}
?>