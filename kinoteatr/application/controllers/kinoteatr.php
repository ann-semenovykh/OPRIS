<?php

	class Kinoteatr extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('kinoteatr');
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
			$data['movies'] = $this->model->get_all_movies(date("Y-m-d"));
			foreach ($data['movies'] as $movie)
			{
				 $data['halls'.$movie->id_mov] = $this->model->get_all_sessions($movie->id_mov);
				 echo $data['halls1'];
			}
			$this->template->set_view('kinoteatr_index');
			$this->template->render($data);
		}
		
	}