<?php /* ajax днаюбкемхе аюккнб дкъ ярсдемрнб б юдлхмйе */

class AdminStudentPoint extends Command{
	public function publicPage(){
			return true;
		}
        	
		public function execute(){
		  
        
         
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Student.php");
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Group.php");
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Event.php");
       
		$event = new Event();
        $event ->getObject($_POST['event_id']);
      
        
        
		$student=new Student();
        $student->getObject($_POST['student_id']);
        $group_number = $student ->getArray();
        $first_name =  $student->getArray();
        $name = $student->getArray();
        $patronymic = $student ->getArray();
        
        $group_number = $student->getGroup()->getId();
        
        $group_number2 =  iconv("cp1251","UTF-8",$student->getGroup()->getGroupNumber());
        
        $first_name = iconv("cp1251","UTF-8",$student->getFirstName());
        
        $name = iconv("cp1251","UTF-8",$student->getName());
        
        $patronymic = iconv("cp1251","UTF-8",$student->getPatronymic());
        
        $event_id=htmlspecialchars($_POST['event_id']);
        
        //echo "event_id=".$event_id;
        $db=$this->init->getDB();
          $db->setQuery("SELECT SUM(`points_points`) AS SUMMA
                            FROM `framework_points` WHERE `points_student_id` = ".$student->getId()."");
          $data=$db->execute();
          
            $data = $data->fetch();
          
   
       // $a = iconv("cp1251","UTF-8",$event->getEventName());

        
        $students=array("event_id"=>$event->getId(),"student_id"=>$student->getId(),"student_group"=>$group_number2,"student_first_name"=>$first_name,"student_name"=>$name,"student_patronymic"=>$patronymic,"student_points"=>$data['SUMMA']); 
        
        echo json_encode($students);
        
        
          
}
}
?>