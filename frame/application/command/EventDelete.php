<?php /*Удаление эвентов из 3х таблиц по id эвента */
class EventDelete extends Command{
    	public function publicPage(){
			return true;
		}	
	public function execute(){

		$event_id=htmlspecialchars($_POST['event_id']);
		$db=$this->init->getDB();
		$arr=array("event_id"=>$event_id);
        $arr1=array("points_event_id"=>$event_id);
        $arr2=array("history_event_id"=>$event_id);
		$data=$db->deleteAllRow("framework_events",$arr);
        $data=$db->deleteAllRow("framework_points",$arr1);
        $data=$db->deleteAllRow("framework_history",$arr2);
		header("Location:/frame/admin");
	}
}
?>