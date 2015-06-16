<?php /* ajax тнплю дкъ щбемрнб б юдлхмйе */

class AdminStudForm extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){
		  
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Student.php");
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Group.php");
        $group = new Group();
		$student=new Student();
        $student->getObject($_POST['student_id']);
        $a =  $student->getArray();
        
        
       
       
       
   
        $newFirstName = iconv("cp1251","UTF-8",$student->getFirstName());

        
        $newName = iconv("cp1251","UTF-8",$student->getName());
        
        $newPatronymic = iconv("cp1251","UTF-8",$student->getPatronymic());
        
        $newGroup = iconv("cp1251","UTF-8",$student->getGroup()->getId());
        
        $newCourseNumber = iconv("cp1251","UTF-8",$student->getCourseNumber());

        $newBirthDate = explode("-",$newBirthDate = $student->getBirthDate());
        $newBirthDate1 = $newBirthDate[2].".".$newBirthDate[1].".".$newBirthDate[0];


        
        $students=array("student_id"=>$student->getId(),"student_first_name"=>$newFirstName,"student_name"=>$newName,"student_patronymic"=>$newPatronymic,"student_group"=>$newGroup,"student_course_number"=>$newCourseNumber,"student_birth_date"=>$newBirthDate1); 
        
        
        echo json_encode($students);
        
        
          
}
}
?>