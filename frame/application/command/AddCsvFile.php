<?php
/* ВСТАВКА ИЗ CSV ФАЙЛА В БАЗУ ДАННЫХ*/
class AddCsvFile extends Command{
	public function publicPage(){
			return true;
		}	
    
public function execute(){
$filename="test.csv";
$file_array = file($filename);
header('Content-Type: text/html; charset=utf-8');

       $base="imi_bd";//Имя вашей базы
	   $user="root";//имя пользователя
	   $pswd="";//пароль
	   $host="localhost";//хост 
	   $DBH=new PDO("mysql:host=".$host.";dbname=".$base,$user,$pswd);
	   $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
       $DBH->prepare("set character_set_client='cp1251'")->execute();
       $DBH->prepare("set character_set_results='cp1251'")->execute();
       $DBH->prepare("set collation_connection='cp1251_general_ci'")->execute();
        

foreach($file_array as $file){
	$element=explode(";",$file);
	//Создаём элемент
    
    foreach($file_array as $element[0]){
    
        $fio=explode(" ",$element[0]);
        $first_name = ($fio[0]);
        $name = ($fio[1]);
        $patronymic = ($fio[2]);
        
       print_r($patronymic);
    }
    
   	$group=trim($element[1]);
	$course_number=trim($element[2]);
	$STH=$DBH->prepare("INSERT INTO `framework_students_csv` (`students_csv_first_name`,`students_csv_name`,`students_csv_patronymic`,`students_csv_group_number`,`students_csv_course_number`) values ('".$first_name."','".$name."','".$patronymic."','".$group."','".$course_number."')");               
    //$STH->execute();
    print_r($STH);
      
    }
     
echo "complete";
}
}
?>