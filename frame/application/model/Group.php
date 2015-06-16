<?php
	class Group extends DomainObject{
		protected $table="framework_group";
		protected $modelName="group";
		//Атрибут!!!
		private $group_number;
		private $group_spec;
		//Сеттер и геттер
		public function setGroupNumber($group_number){
			$this->group_number=$group_number;
		}
		public function getGroupNumber(){
			return $this->group_number;
		}
		public function setGroupSpec($group_spec){
			$this->group_spec=$group_spec;
		}
		public function getGroupSpec(){
			return $this->group_spec;
		}
		//Работа с БД
		protected function insertObject(){
			$this->db->insertOneRow($this->table,$this->getArray());
		}
		protected function updateObject(){
			$this->db->updateRow($this->table,$this->modelName."_id",$this->id,$this->getArray());	
		}
		public function deleteSpec(){			
		//когда удаляем группу мы должны удалить ВСЕХ СТУДЕНТОВ!!!
			$this->db->deleteAllRow('imi_students_mod',array('group_id'=>$this->id));				
		}
		//--подгрузка данных в объект
		public function setObject($data){			
			$this->setGroupNumber($data['group_number']);		
			$this->setGroupSpec($data['group_spec']);
		}
		public function getArray(){
			return array("group_number"=>$this->getGroupNumber(),"group_spec"=>$this->getGroupSpec());
		}
	}
?>