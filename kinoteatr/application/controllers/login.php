<?php

	class Login extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('login');
			$this->template = $this->load_lib('template');
			
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			
			$data = array(
				'title' => 'Авторизация/регистрация',
			);
			$this->template->init('default',$blocks,$data);
			
		}
		
		public function index()
		{
			if ($_POST['submit_reg']){
				$data['errors'] = $this->check_fields();
				if (!isset($data['errors'])){
					$data['errors'] = $this->user_register();
				}
			}
			$this->template->set_view('login_index');
			$this->template->render($data);
		}
		
		private function check_fields()
		{
			if (empty($_POST['name'])){
				return "Не заполнено поле \"Имя\"";
			}
			if (empty($_POST['surname'])){
				return "Не заполнено \"Фамилия\"";
			}
			if (empty($_POST['altername'])){
				return "Не заполнено \"Псевдоним\"";
			}
			if (empty($_POST['email'])){
				return "Не заполнено \"E-mail\"";
			}
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				return "Не верный E-mail";
			}
			if (empty($_POST['pass1'])){
				return "Не заполнено \"Пароль\"";
			}
			if (strlen($_POST['pass1'])<6){
				return "Слишком короткий пароль";
			}
			if (empty($_POST['pass2'])){
				return "Повторите пароль";
			}
			if ($_POST['pass1']!=$_POST['pass1']){
				return "пароли не совпадают";
			}
		}
		
		private function user_register()
		{
			$result = $this->model->check_existence($_POST['altername'],$_POST['email']);
			if ($result==null){
				$result = $this->model->user_register($_POST['name'],$_POST['surname'],$_POST['altername'],$_POST['email'],$_POST['pass1']);
				$this->enter();
			}
			else{
				return "Этот псевдоним уже занят";
			}
		}
		
		private function enter()
		{
			$postdata = http_build_query(
				array(
					'login' => '$_POST[\'email\']',
					'password' => '$_POST[\'pass1\']',
					'submit_auth' => ''
				)
			);

			$opts = array('http' =>
				array(
					'method'  => 'POST',
					'header'  => 'Content-type: application/x-www-form-urlencoded',
					'content' => $postdata
				)
			);

			$context  = stream_context_create($opts);

			$result = file_get_contents('http://kinoteatr/login', false, $context);
		}
	}