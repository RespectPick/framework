<?php
	require_once("City.php");
	class Material extends DomainObject{
		//определяем специфику объекта
		protected $table="calculator_material";
		protected $modelName="material";
		//определяем атрибуты
		private $material_name;
		private $material_mult;		
		private $city;
		//- Сеттеры и геттеры
		public function setName($material_name){
			$this->material_name=$material_name;
		}		
		public function getName(){
			return $this->material_name;
		}	
		public function setCity(City $city){
			$this->city=$city;
		}
		public function getCity(){
			return $this->city;
		}		
		public function setMult($mult){
			$this->material_mult=$mult;
		}
		public function getMult(){
			return $this->material_mult;
		}
		//-работа с БД
		protected function insertObject(){
			$this->db->insertOneRow($this->table,$this->getArray());
		}
		protected function updateObject(){
			$this->db->updateRow($this->table,$this->modelName."_id",$this->id,$this->getArray());	
		}
	
		//--подгрузка данных в объект
		public function setObject($data){
			$this->setName($data['material_name']);	
			$this->setMult($data['material_mult']);			
			$city=new City($this->db);
			$city->getObject($data['material_city_id']);
			$this->setCity($city);			
		}
		public function getArray(){
			return array("material_name"=>$this->getName(),"material_mult"=>$this->getMult(),"material_city_id"=>$this->getCity()->getId());
		}		
	}
?>