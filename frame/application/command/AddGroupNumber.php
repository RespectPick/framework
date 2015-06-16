<?php
/*===========================================================Добавление новой группы======================================*/
class AddGroupNumber extends Command{
    public function getLocation(){
		return "addGroupNumberForm";
	}
	public function publicPage(){
			return true;
		}	
		public function execute(){
		  
          $group_number = $_POST['group_number_new'];
          $db=$this->init->getDB();
          $db->setQuery("INSERT INTO `framework_group` (`group_number`) VALUES ('$group_number')");
          $db->execute();
          
          
		  
          
  }

}
  Header("Location:/frame/adminstud");


?>