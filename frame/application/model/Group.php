<?php
	class Group extends DomainObject{
		protected $table="framework_group";
		protected $modelName="group";
		//�������!!!
		private $group_number;
		private $group_spec;
		//������ � ������
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
		//������ � ��
		protected function insertObject(){
			$this->db->insertOneRow($this->table,$this->getArray());
		}
		protected function updateObject(){
			$this->db->updateRow($this->table,$this->modelName."_id",$this->id,$this->getArray());	
		}
		public function deleteSpec(){			
		//����� ������� ������ �� ������ ������� ���� ���������!!!
			$this->db->deleteAllRow('imi_students_mod',array('group_id'=>$this->id));				
		}
		//--��������� ������ � ������
		public function setObject($data){			
			$this->setGroupNumber($data['group_number']);		
			$this->setGroupSpec($data['group_spec']);
		}
		public function getArray(){
			return array("group_number"=>$this->getGroupNumber(),"group_spec"=>$this->getGroupSpec());
		}
	}
?>