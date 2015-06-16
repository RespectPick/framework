<?php
/*===========================================Заполнение таблицы эвентов adminCommand.tpl=================================*/
class AdminCommand extends Command{
	public function publicPage(){
			return true;
		}	
		public function execute(){
          require_once($_SERVER['DOCUMENT_ROOT'].$this->siteRoot."/application/model/EventsType.php");
          
          $event_type=new EventsType();
          $events_type = array();
          
          $db=$this->init->getDB();
          $db->setQuery("SELECT * FROM  `framework_events_type`");
          
          $data2=$db->execute();
          
          $data3=array();
          foreach($data2 as $elem1){
            array_push($data3,array("events_type_id"=>$elem1["events_type_id"],"events_type_name"=>$elem1["events_type_name"]));
          }

			   $db=$this->init->getDB();
			   $db->setQuery("SELECT `framework_events`.`event_name`,`framework_events_type`.`events_type_name`,`framework_events`.`event_id`,`framework_events`.`event_period_start`,`framework_events`.`event_period_end`
                                    FROM `framework_events`,`framework_events_type` 
                                        WHERE `framework_events`.`event_type_id` =   `framework_events_type`.`events_type_id`");
			   $data=$db->execute();
                     
		  $data1=array();
			   foreach($data as $elem){ // заполнение массива эвентов для передачи в AdminCommand.tpl
                        $event_period_start = explode("-",$elem["event_period_start"]);
            	        $new_event_period_start = $event_period_start[2].".".$event_period_start[1].".".$event_period_start[0];
                        $event_period_end = explode("-",$elem["event_period_end"]);
            	        $new_event_period_end = $event_period_end[2].".".$event_period_end[1].".".$event_period_end[0];
                        array_push($data1,array("events_type_id"=>$elem1["events_type_id"],"event_id"=>$elem["event_id"],"event_name"=>$elem["event_name"],"events_type_name"=>$elem["events_type_name"],"event_period_start"=>$new_event_period_start,"event_period_end"=>$new_event_period_end));
			   }
               
           $db=$this->init->getDB();
		   $db->setQuery("SELECT `framework_students_mod`.`student_id` , `framework_students_mod`.`student_first_name` , `framework_students_mod`.`student_name` , `framework_students_mod`.`student_patronymic` , `framework_group`.`group_number` , `framework_students_mod`.`student_birth_date` , `framework_group`.`group_id`
                                FROM `framework_students_mod` , `framework_group`
                                        WHERE `framework_students_mod`.`student_group_id` = `framework_group`.`group_id`");
           $data4=$db->execute();  
           
            $data5=array();
			   foreach($data4 as $elem){// заполнение массива студентов для передачи в AdminCommand.tpl  
				   $birth_date = explode("-",$elem["student_birth_date"]);
				   $new_birth_date = $birth_date[2].".".$birth_date[1].".".$birth_date[0];
					array_push($data5,array("student_id"=>$elem["student_id"],"student_first_name"=>$elem["student_first_name"],"student_name"=>$elem["student_name"],"student_patronymic"=>$elem["student_patronymic"],"student_group"=>$elem["group_number"],"student_birth_date"=>$new_birth_date,"student_course_number"=>$elem["student_course_number"],"student_group_id"=>$elem["group_id"]));
			   }

            $this->init->getSmarty()->assign('StudentArray',$data5);   
            $this->init->getSmarty()->assign('EventsType',$data3);
			$this->init->getSmarty()->assign('AbitArray',$data1);
            
          
		} 
 }
 ?>