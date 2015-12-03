<?php

	class Movie extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('movie');
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

		
		public function info($vars)
		{
			$data['movies'] = $this->model->get_movie_info($vars);
			$data['halls']=$this->model->get_all_halls();
			foreach ($data['movies'] as $movie){
				foreach($data['halls'] as $hall)
			{
				 $data['sessions'.$movie->id_mov.$hall->id_hall] = $this->model->get_all_sessions($movie->id_mov,$hall->id_hall);
			
				}
			}
			$this->template->set_view('movie_info');
			$this->template->render($data);
		}
		
		
	}