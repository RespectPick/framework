<?php
	
	class City extends DomainObject{
		//определяем специфику объекта
		protected $table="calculator_city";
		protected $modelName="city";
		//определяем атрибуты
		private $city_name;
		private $city_status;				
		//- Сеттеры и геттеры
		public function setName($city_name){
			$this->city_name=$city_name;
		}		
		public function getName(){
			return $this->city_name;
		} 
		public function setStatus($city_status){
			$this->city_status=$city_status;
		}		
		public function getStatus(){
			return $this->city_status;
		}				
		//-работа с БД
		protected function insertObject(){
			$this->db->insertOneRow($this->table,$this->getArray());
		}
		protected function updateObject(){
			$this->db->updateRow($this->table,$this->modelName."_id",$this->id,$this->getArray());	
		}
		public function deleteSpec(){					
			$this->db->deleteAllRow('calculator_floor',array('floor_city_id'=>$this->id));		
			$this->db->deleteAllRow('calculator_streets',array('street_city_id'=>$this->id));
			$this->db->deleteAllRow('calculator_material',array('material_city_id'=>$this->id));
			$this->db->deleteAllRow('calculator_house_type',array('house_type_city_id'=>$this->id));
			//удаляем описание города через объект, так как описание города может содержать ссылку на бэкграунд
			$data=$this->db->getAllRow('calculator_city_info',array('city_info_city'=>$this->id));
			require_once($_SERVER['DOCUMENT_ROOT'].Init::init()->getSiteRoot()."/application/model/CityInfo.php");
			$cityInfo=new CityInfo();
			$cityInfo->getObject($data[0]['city_info_id']);
			$cityInfo->deleteObject();
			//дёргаем все состояния квартир
			require_once($_SERVER['DOCUMENT_ROOT'].Init::init()->getSiteRoot()."/application/model/State.php");
			$collection=State::getCollection(Init::init()->getDB(),"calculator_state","State",array("state_city_id"=>$this->getId()),"state");
			if ($collection instanceof Collection){
				foreach($collection as $state){
					$this->db->deleteAllRow('calculator_state_mult',array('state_id'=>$state->getId()));
				}
			}
			$this->db->deleteAllRow('calculator_state',array('state_city_id'=>$this->id));			
			$this->db->deleteAllRow('calculator_rooms',array('rooms_city_id'=>$this->id));						
		}
		//--подгрузка данных в объект
		public function setObject($data){
			$this->setName($data['city_name']);	
			$this->setStatus($data['city_status']);		
			
		}
		public function getArray(){
			return array("city_name"=>$this->getName(),"city_status"=>$this->getStatus());
		}		
	}
?>