<?php
	class LoginProcess extends Command{
		public function publicPage(){
			return true;
		}
		public function getLocation(){
			return "LoginPage";
		}
		public function execute(){
			//получаем данные из формы
			$login=$_POST['login'];
			$password=$_POST['password'];

			//получаем подключение к БД
			$this->init=Init::init();
			$db=$this->init->getDB();
			if ($db->getNumRow($this->init->getConfig()->getValue(db_prefix).'_user',array('user_login'=>$login,'user_password'=>$password))>0){//проверяем существование комбинации логин/пароль
				//получаем данные пользователя из БД
				$userData=$db->getAllRow($this->init->getConfig()->getValue(db_prefix).'_user',array('user_login'=>$login,'user_password'=>$password));
				$userData=$userData[0];
				//пишем данные в сессию
				$auth=Auth::getAuth($this->siteRoot);
				$auth->setUser($userData);				
				//посылаем в личный кабинет
				header("Location:".$this->siteRoot."/admin");
			}
			else{//неверно введена комбинация логин/пароль
				//Перекидываем на мейн
				header("Location:".$this->siteRoot."/?errLog=1");
			}					
		}
	}
?>