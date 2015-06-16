<?php 
class AdminStudPointsAll extends Command{
	public function publicPage(){
			return true;
		}
        
        public function execute(){
            
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Student.php");
        require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/Event.php");
        $event = new Event();
		$student=new Student();
            
         $student->getObject($_POST['student_id']);
         $id = $student->getId();
         
         $db=$this->init->getDB();
         $db->setQuery("SELECT `framework_students_mod`.`student_id` , `framework_students_mod`.`student_first_name` , `framework_students_mod`.`student_name` , `framework_students_mod`.`student_patronymic` , `framework_group`.`group_number` , SUM( `framework_points`.`points_points` ) AS Summa
                        FROM `framework_students_mod` , `framework_group` , `framework_points`
                        WHERE `framework_students_mod`.`student_group_id` = `framework_group`.`group_id`
                        AND `framework_points`.`points_student_id` = '$id'
                        AND `framework_students_mod`.`student_id` = '$id'");
         $data=$db->execute();
         
         $data1=array();
         
         foreach($data as $elem){
            $first_name = iconv("cp1251","UTF-8",$student->getFirstName());
            $name = iconv("cp1251","UTF-8",$student->getName());
            $patronymic = iconv("cp1251","UTF-8",$student->getPatronymic());
            $group_number = iconv("cp1251","UTF-8",$elem["group_number"]);
            array_push($data1,array("student_id"=>$id,"first_name"=>$first_name,"name"=>$name,"patronymic"=>$patronymic,"group_number"=>$group_number,"points"=>$elem["Summa"]));
         }
         
         $allPoints=array("student_id"=>$data1,"first_name"=>$data1,"name"=>$data1,"patronymic"=>$data1,"group_number"=>$data1,"points"=>$data1);
         echo json_encode($allPoints);
            
  }
 }