<?php
/*===========================================Заполнение таблицы студентов adminStud.tpl=================================*/

class AdminStud extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){
			   $db=$this->init->getDB();
			   $db->setQuery("SELECT  `framework_students_mod`.`student_id` ,  `framework_students_mod`.`student_course_number`, `framework_students_mod`.`student_birth_date`,`framework_students_mod`.`student_first_name` ,  `framework_students_mod`.`student_name` , `framework_students_mod`.`student_patronymic` ,  `framework_group`.`group_number`,`framework_group`.`group_id` 
                                FROM  `framework_students_mod` ,  `framework_group`
                                    WHERE  `framework_students_mod`.`student_group_id` =  `framework_group`.`group_id`");
			   $data=$db->execute();
                     
			   $db->setQuery("SELECT  `group_id`,`group_number` 
                                FROM  `framework_group` WHERE 1");
		   	   $data2=$db->execute();
			   
               $data3=array();
			   foreach($data2 as $elem){
               	array_push($data3,array("student_group"=>$elem["group_number"],"student_group_id"=>$elem["group_id"]));
                }
			   $data1=array();
			   foreach($data as $elem){
				   $birth_date = explode("-",$elem["student_birth_date"]);
				   $new_birth_date = $birth_date[2]."-".$birth_date[1]."-".$birth_date[0];
		           array_push($data1,array("student_id"=>$elem["student_id"],"student_first_name"=>$elem["student_first_name"],"student_group"=>$elem["group_number"],"student_group_id"=>$elem["group_id"],"student_name"=>$elem["student_name"],"student_patronymic"=>$elem["student_patronymic"],"student_birth_date"=>$new_birth_date,"student_course_number"=>$elem["student_course_number"],"points"=>$elem["Summa"],"event_name"=>$data2));
			   }

            $this->init->getSmarty()->assign('Group',$data3);
			$this->init->getSmarty()->assign('AbitArray',$data1);

		
	
}
}