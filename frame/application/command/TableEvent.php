<?php
/*!----------------------------------------------------------мюонкмемхе рюакхжш хг ад-------------------------------------------------------!*/

class TableEvent extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){
		  
    
          
          
			   $db=$this->init->getDB();
			   $db->setQuery("SELECT  `framework_students_mod`.`student_id` ,  `framework_students_mod`.`student_first_name` ,  `framework_students_mod`.`student_name` , `framework_students_mod`.`student_patronymic` ,  `framework_group`.`group_number` , SUM(  `framework_points`.`points_points` ) AS Summa 
                                FROM  `framework_students_mod` ,  `framework_group` ,  `framework_points` 
                                    WHERE  `framework_students_mod`.`student_group_id` =  `framework_group`.`group_id` 
                                        AND  `framework_points`.`points_student_id` =  `framework_students_mod`.`student_id` 
                                            GROUP BY (`framework_students_mod`.`student_id`)
                                                ORDER BY SUM(`framework_points`.`points_points`) DESC");
			   $data=$db->execute();
                     
               

			   
			   
			   $data1=array();
			   foreach($data as $elem){   
				   $db->setQuery("SELECT  `event_name`,`event_id` FROM  `framework_events` WHERE 1");
				   $data2=$db->execute();
                   
				   $birth_date = explode("-",$elem["student_birth_date"]);
				   $new_birth_date = $birth_date[2]."-".$birth_date[1]."-".$birth_date[0];
					array_push($data1,array("student_id"=>$elem["student_id"],"student_first_name"=>$elem["student_first_name"],"student_name"=>$elem["student_name"],"student_patronymic"=>$elem["student_patronymic"],"student_group"=>$elem["group_number"],"student_birth_date"=>$new_birth_date,"student_course_number"=>$elem["student_course_number"],"points"=>$elem["Summa"],"event_name"=>$data2));
                   
				//	print_r($data1);
					
			   }

            $this->init->getSmarty()->assign('Group',$groups);
			$this->init->getSmarty()->assign('AbitArray',$data1);

		
	
}
}

?>