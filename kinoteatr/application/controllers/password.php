<?php
class Password extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('password');
			$this->template = $this->load_lib('template');
			
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			$data = array(
				'title' => 'Восстановление пароля',
			);
			$this->template->init('default',$blocks,$data);
		}

		
		public function index()
		{
			if ($_POST['recovery']){
				$data['errors'] = $this->check_fields();
				if (!isset($data['errors'])){
					$data['errors'] = $this->pasrecovery();
				}
			}
		
			$this->template->set_view('password_index');
			$this->template->render($data);
		}

		private function check_fields()
		{
			if (empty($_POST['username'])){
				return "Не заполнено поле \"Логин\"";
			}
			
		}
		
		private function pasrecovery(){
			$c=$this->model->check($_POST['username']);
			if ($c!=null)
			{
				return $this->model->pasrec($_POST['username'],$c[0]['email'],$c[0]['name']);
				
			}
			else return "Такого пользователя не существует!";
		}
		
		
	}