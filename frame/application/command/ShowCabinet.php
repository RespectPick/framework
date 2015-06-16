<?php	
	class ShowCabinet extends Command{
		public function publicPage(){
			return true;
		}	
		public function execute(){				
			require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Group.php");
			require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Student.php");
			require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/SportEvent.php");
			require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/CultureEvent.php");
			$my_group=new Group();
			$my_student=new Student();
			$my_sport_event = new SportEvent();
			$my_culture_event = new CultureEvent();
			/*
			 * добавляем новый
			$my_group->setGroupNumber("05221А");
			$my_group->setGroupSpec("Автоматостроение");
			$my_group->loadObject();
			*/			
			/*получаем объект
			$my_group->getObject(9);
			echo "obj num".$my_group->getGroupNumber();
			echo "<br>obj spec".$my_group->getGroupSpec();
			*/
			
			/*
			$collection=Group::getCollection(Init::init()->getDB(),"framework_group","Group",array(),"group",array());
			foreach ($collection as $group){
				echo $group->getGroupNumber()." ".$group->getGroupSpec();
				echo "<br>";
				
			}*/
			
			/*$collection=Student::getCollection(Init::init()->getDB(),"framework_students_mod","Student",array(),"student",array());
			foreach ($collection as $student){
				echo $student->getGroup()->getGroupNumber()." ". $student->getFirstName()." ".$student->getName();
				echo "<br>";
				
			}
			echo "<br><br>";*/
			/*
			//Добавление студента
			$my_group->getObject(30);
			
			$my_student->setGroup($my_group);
			$my_student->setFirstName("Иванов");
			$my_student->setName("Иван");
			$my_student->setPatronymic("Иванович");
			$my_student->setBirthDate("22.22.1992");
			$my_student->setCourseNumber(5);
			//print_r($my_student->getArray() );
			$my_student->loadObject();
			*/
			/*$update_student=new Student();
			$update_student->getObject(411);
			$update_student->setFirstName("Петров");
			$update_student->loadObject();*/
			//print_r($update_student);
			/*$collection=Group::getCollection(Init::init()->getDB(),"framework_group","Group",array("group_number"=>"05221"),"group",array());
			$group=$collection->next();*/
			//print_r($group);
			//echo $group->getId();
			
			
			/*$collection=Student::getCollection(Init::init()->getDB(),"framework_students_mod","Student",array("student_first_name"=>"Абашеева"),"student",array());
			if ($collection){
					echo $collection->getQuantity();
			}
			else{
				echo 0;
			}*/
			
			
			
			/*$my_culture_event->setCultureEventName("фывлпорывфлопа12312312");
			$my_culture_event->setEventPeriodStart("2014-11-11");
			$my_culture_event->setEventPeriodEnd("2014-11-12");
			print_r($my_culture_event->getArray() );
			$my_culture_event->loadObject();*/
			
			/*$update_culture_event=new CultureEvent();
			$update_culture_event->getObject(18);
			$update_culture_event->setCultureEventName("Петров");
			$update_culture_event->loadObject();*/
			
			/*$delete_culture_event=new CultureEvent();
			$delete_culture_event->getObject(18);
			$delete_culture_event->deleteSpec();*/
			
			
			
		}
	}
?>