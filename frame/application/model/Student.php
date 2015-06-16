<?php
  
require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Group.php");
class Student extends DomainObject{
		protected $table="framework_students_mod";
		protected $modelName="student"; 
		
		//Атрибут!!!
		private $first_name;
		private $name;
		private $patronymic;
		private $birth_date;
		private $course_number;
		private $group;
		
		
        
            
		public function setGroup($group){
			$this->group = $group;
		}
		
		public function getGroup(){
			return $this->group;
		}
		
		public function setFirstName($first_name){
			$this->first_name = $first_name;
		}
		
		public function getFirstName(){
			return $this->first_name;
		}
		
		public function setName($name){
			$this->name = $name;
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function setPatronymic($patronymic){
			$this->patronymic = $patronymic;
		}
		
		public function getPatronymic(){
			return $this->patronymic;
		}
		
		public function setBirthDate($birth_date){
			$this->birth_date = $birth_date;
		}
		
		public function getBirthDate(){
			return $this->birth_date ;
		}
		
		public function setCourseNumber($course_number){
			$this->course_number = $course_number;
		}
		
		public function getCourseNumber(){
			return $this->course_number;
		}
		
		//Работа с БД
		protected function insertObject(){
			$this->db->insertOneRow($this->table,$this->getArray());
		}
		protected function updateObject(){
			$this->db->updateRow($this->table,$this->modelName."_id",$this->id,$this->getArray());	
		}
	
		//--подгрузка данных в объект
		public function setObject($data){			
			$this->setFirstName($data['student_first_name']);		
			$this->setName($data['student_name']);
			$this->setPatronymic($data['student_patronymic']);		
			$this->setBirthDate($data['student_birth_date']);
			$this->setCourseNumber($data['student_course_number']);
			$group = new Group();
			$group->getObject($data['student_group_id']);
			$this->setGroup($group);
			}
		public function getArray(){
			return array("student_group_id"=>$this->getGroup()->getId(),"student_first_name"=>$this->getFirstName(),"student_name"=>$this->getName(),"student_patronymic"=>$this->getPatronymic(),"student_birth_date"=>$this->getBirthDate(),"student_course_number"=>$this->getCourseNumber());
		}
		
}


?>