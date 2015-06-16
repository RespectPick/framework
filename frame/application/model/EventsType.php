<?php
class EventsType extends DomainObject{
		protected $table="framework_events_type";
		protected $modelName="events_type";
		
		
		
		private $events_type_name;

		
		public function setEventsTypeName($events_type_name){
		$this->events_type_name = $events_type_name;
		}
		
		public function getEventsTypeName(){
		return $this->events_type_name;
		}

	
		//Работа с БД
		protected function insertObject(){
			$this->db->insertOneRow($this->table,$this->getArray());
		}
		protected function updateObject(){
			$this->db->updateRow($this->table,$this->modelName."_id",$this->id,$this->getArray());	
		}
		public function deleteSpec(){			
			$this->db->deleteAllRow('framework_events_type',array('events_type_id'=>$this->id));				
		}
		
		//--подгрузка данных в объект
		public function setObject($data){			
			$this->setEventsTypeName($data['events_type_name']);				
			}
			
			public function getArray(){
			return array("events_type_name"=>$this->getEventsTypeName());
		}	
		}
		
		
		
		


			
		



?>