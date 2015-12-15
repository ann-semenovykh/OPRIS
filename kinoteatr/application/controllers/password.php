<?php
class Password extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('password');
			$this->template = $this->load_lib('template');
			//Добавить загрузку сессии
			
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			
			$data = array(
				'title' => 'Кинотеатр',
				'page_name' => 'Главная',
			);
			$this->template->init('default',$blocks,$data);
			
		}

		
		public function index()
		{
			//if ($_POST['recovery']){
			//	$data['errors'] = $this->check_fields();
			//	if (!isset($data['errors'])){
			//		$data['errors'] = $this->recovery();
			//	}
			//}
			$this->template->set_view('password_index');
			$this->template->render($data);
		}

		
		
		
	}