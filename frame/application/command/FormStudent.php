<?php
/*!----------------------------------------------------------Отображение формы добавления студента-------------------------------------------------------!*/

class FormStudent extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){
		  
	   $db=$this->init->getDB();
       $db->setQuery("SELECT DISTINCT `student_course_number` FROM `framework_students_mod`");
	   $data=$db->execute();
       
       $data1 = array();
       foreach($data as $elem){
        	array_push($data1,array("student_course_number"=>$elem["student_course_number"]));
       }
       
          
		require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Group.php");
		require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Student.php");

		$group=new Group();
		$student=new Student();
		$my_group = new Group();
		$my_student=new Student();
		$groups=array();
		$students = array();

		
		$collection=Group::getCollection(Init::init()->getDB(),"framework_group","Group",array(),"group",array());
			foreach ($collection as $group){
				array_push($groups,array("group_id"=>$group->getID(),"group_number"=>$group->getGroupNumber()));
				//print_r($groups);
		}
		$collection1=Student::getCollection(Init::init()->getDB(),"framework_students_mod","Student",array("student_id"=>$_GET['student_id']),"student",array());
        
        if(isset($_GET['student_id'])){
		if ($collection1->getQuantity()>0){	
            foreach ($collection1 as $student){
                

				array_push($students,array("student_id"=>$student->getID(),"student_group_id"=>$student->getGroup()->getId(),"student_first_name"=>$student->getFirstName(),"student_name"=>$student->getName(),"student_patronymic"=>$student->getPatronymic(),"student_course_number"=>$student->getCourseNumber(),"student_birth_date"=>$student->getBirthDate()));
		     }
        }
        else{
            array_push($students,array("student_id"=>0));
        }
        }
        
		$this->init->getSmarty()->assign('Group',$groups);
		$this->init->getSmarty()->assign('Student',$students[0]);
		$this->init->getSmarty()->assign('Course',$data1);
		

		}
	}

		
		
	


?>