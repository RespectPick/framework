<?php
/*Повышение курса всех студентов на 1. Если у студента 4 курс - удаляем*/
class UpGroup extends Command{
    	public function publicPage(){
			return true;
		}

        public function execute(){
            $db=$this->init->getDB();
            $db1=$this->init->getDB();
            
            $db->setQuery("SELECT  `student_id` , `student_course_number`
                FROM `framework_students_mod`");
            
            $data=$db->execute();
            $data1 = array();
            foreach($data as $elem){
                //array_push($data1,array("student_course_number"=>$elem["student_course_number"]+1));
                
                $course_number = $elem["student_course_number"];
                $id = $elem["student_id"];
                
                if($course_number >=4){
                    $db1->setQuery("DELETE FROM `framework_students_mod`  WHERE `student_id`='$id'");
                    $db1->execute();
                }
                else{
                $course_number = $elem["student_course_number"]+1;
                
                

                
                $db1->setQuery("UPDATE `framework_students_mod` 
                                SET `student_course_number`= '$course_number'
                                    WHERE `student_id`='$id'");
                $db1->execute();
                }
                

            }
            Header("Location:/frame/adminstud");
    }
}

?>