<?php
class Event extends DomainObject{
		protected $table="framework_events";
		protected $modelName="event";
		
		
		
		private $event_name;
        private $event_type_id;
		private $event_period_start;
		private $event_period_end;
		
		
		public function setEventName($event_name){
		$this->event_name = $event_name;
		}
		
		public function getEventName(){
		return $this->event_name;
		}
        
		public function setEventTypeId($event_type_id){
		$this->event_type_id = $event_type_id;
		}
		
		public function getEventTypeId(){
		return $this->event_type_id;
		}
		
        
		public function setEventPeriodStart($event_period_start){
		$this->event_period_start = $event_period_start;
		}
		
		public function getEventPeriodStart(){
		return $this->event_period_start;
		}
		
		public function setEventPeriodEnd($event_period_end){
		$this->event_period_end = $event_period_end;
		}
		
		public function getEventPeriodEnd(){
		return $this->event_period_end;
		}
		
		//Работа с БД
		protected function insertObject(){
			$this->db->insertOneRow($this->table,$this->getArray());
		}
		protected function updateObject(){
			$this->db->updateRow($this->table,$this->modelName."_id",$this->id,$this->getArray());	
		}
		public function deleteSpec(){			
			$this->db->deleteAllRow('framework_events',array('event_id'=>$this->id));				
		}
		
		//--подгрузка данных в объект
		public function setObject($data){			
			$this->setEventName($data['event_name']);
            $this->setEventTypeId($data['event_type_id']);
			$this->setEventPeriodStart($data['event_period_start']);
			$this->setEventPeriodEnd($data['event_period_end']);		
			}
			
			public function getArray(){
			return array("event_name"=>$this->getEventName(),"event_type_id"=>$this->getEventTypeId(),"event_period_start"=>$this->getEventPeriodStart(), "event_period_end"=>$this->getEventPeriodEnd());
		}
			
			
		}
		
		
		
		


			
		



?>