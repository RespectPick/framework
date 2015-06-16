<?php
	class LoginProcess extends Command{
		public function publicPage(){
			return true;
		}
		public function getLocation(){
			return "LoginPage";
		}
		public function execute(){
			//�������� ������ �� �����
			$login=$_POST['login'];
			$password=$_POST['password'];

			//�������� ����������� � ��
			$this->init=Init::init();
			$db=$this->init->getDB();
			if ($db->getNumRow($this->init->getConfig()->getValue(db_prefix).'_user',array('user_login'=>$login,'user_password'=>$password))>0){//��������� ������������� ���������� �����/������
				//�������� ������ ������������ �� ��
				$userData=$db->getAllRow($this->init->getConfig()->getValue(db_prefix).'_user',array('user_login'=>$login,'user_password'=>$password));
				$userData=$userData[0];
				//����� ������ � ������
				$auth=Auth::getAuth($this->siteRoot);
				$auth->setUser($userData);				
				//�������� � ������ �������
				header("Location:".$this->siteRoot."/admin");
			}
			else{//������� ������� ���������� �����/������
				//������������ �� ����
				header("Location:".$this->siteRoot."/?errLog=1");
			}					
		}
	}
?>