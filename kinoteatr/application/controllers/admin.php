<?php

	class Admin extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('admin');
			$this->template = $this->load_lib('template');
			
			$data = array(
				'title' => 'Панель администратора',
			);
			
		}
		
		public function index()
		{
			$this->add_movie();
		}
		
		public function add_movie()
		{
			if (isset($_POST['submit_new'])){
				$data['errors'] = $this->checkMovieInfo();
				if (!isset($data['errors'])){
					$data['errors'] = $this->checkPoster();
				}
				if (!isset($data['errors'])){
					$data['errors'] = $this->model->add_movie();
				}
			}
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			$this->template->init('default',$blocks,$data);
			$this->template->set_view('admin_add_movie');
			$this->template->render($data);
		}
		
		public function edit_movie($id_movie){
			if (isset($_POST['submit_edit'])){
				$data['errors'] = $this->checkMovieInfo();
				if (!isset($data['errors'])){
					$data['errors'] = $this->model->edit_movie($id_movie);
				}
			}
			$data['movie'] = array_shift($this->model->getMovie($id_movie));
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			$this->template->init('default',$blocks,$data);
			$this->template->set_view('admin_edit_movie');
			$this->template->render($data);
		}
		
		public function add_session(){
			if (isset($_POST['submit_new'])){
				$data['errors'] = $this->checkSession();
				if (!isset($data['errors'])){	
					$mov = $_POST['movie_id'];
					$hall = $_POST['hall_id'];
					$date = $_POST['setDate'];
					$price = $_POST['price'];
					$data['errors'] = $this->model->add_session($mov,$hall,$date,$price);
				}
			}
			$data['movies'] = $this->model->getAll_Movies();
			$data['halls'] = $this->model->getAll_Halls();
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			$this->template->init('default',$blocks,$data);
			$this->template->set_view('admin_add_session');
			$this->template->render($data);
		}
		
		private function checkSession(){
			if (empty($_POST['movie_id']))
				return "Не выбран фильм";
			if (empty($_POST['hall_id']))
				return "Не выбран зал";
			if (empty($_POST['setDate']))
				return "Не выбрано время";
			if (empty($_POST['price']))
				return "Не выбрана цена";
		}
		
		private function checkMovieInfo()
		{
			if (empty($_POST['name'])){
				return "Не заполнено поле \"Название\"";
			}
			if (empty($_POST['genre'])){
				return "Не заполнено поле \"Жанр\"";
			}
			if (empty($_POST['article'])){
				return "Не заполнено поле \"Описание\"";
			}
			if (empty($_POST['year'])){
				return "Не заполнено поле \"Год\"";
			}
			if (empty($_POST['director'])){
				return "Не заполнено поле \"Режиссер\"";
			}
			if (empty($_POST['actors'])){
				return "Не заполнено поле \"Актеры\"";
			}
			if (empty($_POST['trailer'])){
				return "Не заполнено поле \"Трейлер\"";
			}
			if (empty($_POST['country'])){
				return "Не заполнено поле \"Страна\"";
			}
			if (empty($_POST['rateKP'])){
				return "Не заполнено поле \"Рейтинг кинопоиск\"";
			}
			if (empty($_POST['rateMPA'])){
				return "Не заполнено поле \"Рейтинг MPA\"";
			}
			if (empty($_POST['time'])){
				return "Не заполнено поле \"Продолжительность\"";
			}
		}
		
		private function checkPoster(){
			if (is_uploaded_file($_FILES['picture']['tmp_name'])) {
				if($_FILES['picture']['type'] != "image/jpeg"){
					return "Некорректный тип файла";
				} 
			}
			else {
			   return "Не загружен постер.";
			}
		}

	}