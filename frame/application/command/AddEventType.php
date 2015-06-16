<?php                                           
/*===========================================================Добавление нового типа события===============================*/
class AddEventType extends Command{
    public function getLocation(){
		return "addEventTypeForm";
	}
	public function publicPage(){
			return true;
		}	
		public function execute(){
		  
          $event_type_name = $_POST['event_type_name_new'];
          $db=$this->init->getDB();
          $db->setQuery("INSERT INTO `framework_events_type` (`events_type_name`) VALUES ('$event_type_name')");
          $db->execute();
          
          
		  
          
  }

}
  Header("Location:/frame/admin");


?>