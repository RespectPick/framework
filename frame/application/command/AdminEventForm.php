<?php 
/*=================================Ajax Заполнение модалки для изменения события, передача id эвента в скрытые поля=======*/
class AdminEventForm extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){
		  
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Event.php");
		$event=new Event();
        
        $event->getObject($_POST['event_id']);
        $a =  $event->getArray();
   
        $a = iconv("cp1251","UTF-8",$event->getEventName()); //имя эвента

        $b = explode("-",$new_start = $event->getEventPeriodStart()); // начало эвента
        $new_start = $b[2].".".$b[1].".".$b[0];
        
        $c = explode("-",$new_end = $event->getEventPeriodEnd());// конец эвента
        $new_end = $c[2].".".$c[1].".".$c[0];

        
        $events=array("event_id"=>$event->getId(),"event_name"=>$a,"event_type_id"=>$event->getEventTypeId(),"event_period_start"=>$new_start,"event_period_end"=>$new_end); 
        
       
        echo json_encode($events);
        
        
          
}
}
?>