<?php
/*!----------------------------------------------------------Добавление и изменение студента-------------------------------------------------------!*/
class FormStudentSuccess extends Command{
    public function getLocation(){
		return "addStudForm";
	}
	public function publicPage(){
			return true;
		}
		public function execute(){
		require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Group.php");
			require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Student.php");
			$my_group=new Group();
			$my_student=new Student();
			          
            
         if(empty($_POST['student_id'])){
     		$first_name=htmlspecialchars($_POST['student_first_name']);
    		$name=htmlspecialchars($_POST['student_name']);
    		$patronymic=htmlspecialchars($_POST['student_patronymic']);
    		$group_number=htmlspecialchars($_POST['groups']);
    		$course_number=htmlspecialchars($_POST['course_number']);
    		$birth_date=htmlspecialchars($_POST['birth_dates']);
    		
            
            $first_name = iconv("UTF-8","cp1251",$first_name);
            $name = iconv("UTF-8","cp1251",$name);
            $patronymic = iconv("UTF-8","cp1251",$patronymic);
            $group_number = iconv("UTF-8","cp1251",$group_number);
            $course_number = iconv("UTF-8","cp1251",$course_number);
            $element=explode(".",$birth_date);
            
			//Добавление студента
			$my_student->setGroup($my_group);
			$my_student->setFirstName($first_name);
			$my_student->setName($name);
			$my_student->setPatronymic($patronymic);
			$my_student->setBirthDate($element[2].$element[1].$element[0]);
			$my_student->setCourseNumber($course_number);
			$my_group->getObject($group_number);
			$my_student->loadObject();
            
            $newFirstName = iconv("cp1251","UTF-8",$my_student->getFirstName());
            $newName = iconv("cp1251","UTF-8",$my_student->getName());
            $newPatronymic = iconv("cp1251","UTF-8",$my_student->getPatronymic());
            $newGroup = $my_group->getId();
            $newGroup = iconv("cp1251","UTF-8",$my_group->getGroupNumber());
            $newCourseNumber = $my_student->getCourseNumber();
            $newBirthDate = $my_student->getBirthDate();
            $newBirthDate = $newBirthDate[6].$newBirthDate[7].".".$newBirthDate[4].$newBirthDate[5].".".$newBirthDate[0].$newBirthDate[1].$newBirthDate[2].$newBirthDate[3];
            
            $students=array("student_id"=>$my_student->getId(),"student_first_name"=>$newFirstName,"student_name"=>$newName,"student_patronymic"=>$newPatronymic,"student_group"=>$newGroup,"student_course_number"=>$newCourseNumber,"student_birth_date"=>$newBirthDate); 
            header('Content-type:text/json; charset="utf-8;"');
            echo json_encode($students);
         }   
        
        else{    
             			//$my_student->setId($_POST['student_id']);
 			$my_student->getObject($_POST['student_id']);
            $my_group->getObject($group_number);
            
           
            $first_name=htmlspecialchars($_POST['student_first_name']);
    		$name=htmlspecialchars($_POST['student_name']);
    		$patronymic=htmlspecialchars($_POST['student_patronymic']);
    		$group_number=htmlspecialchars($_POST['groups']);
    		$course_number=htmlspecialchars($_POST['course_number']);
    		$birth_date=htmlspecialchars($_POST['student_birth_date']);
    		$my_group->getObject($group_number);
			//Добавление студента
			$my_student->setGroup($my_group);
			$my_student->setFirstName($first_name);
			$my_student->setName($name);
			$my_student->setPatronymic($patronymic);
			$element=explode(".",$birth_date);
			$my_student->setBirthDate($element[2].$element[1].$element[0]);
			$my_student->setCourseNumber($course_number);
            
            $my_student->loadObject();
            header("Location:/frame/adminstud");
            }
			
			
	
    
    
    

            
		
	}

}


			
		
?>