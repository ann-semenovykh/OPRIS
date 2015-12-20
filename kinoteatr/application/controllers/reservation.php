<?php

	class Reservation extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('reservation');
			$this->template = $this->load_lib('template');
			
			$data = array(
				'title' => 'Бронирование',
			);
			
		}
		
		public function index($session_id)
		{
			$now = date('Y-m-d H:i:s');
			$end = date('Y-m-d H:i:s',strtotime("$now+300 second"));
			$data['time'] = $now;
			$data['seats'] = $this->model->get_seats($session_id);
			$data['session'] = $session_id;
			$movies = $this->model->get_movie_info($session_id);
			$data['movie'] = array_shift($movies);
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			$this->template->init('default',$blocks,$data);
			$this->template->set_view('reservation_index');
			$this->template->render($data);
		}
		
		public function reserve()
		{
			if (isset($_POST["reserve"])){
				$now = date('Y-m-d H:i:s');
				$seconds = $_POST["seconds"];
				$end = date('Y-m-d H:i:s',strtotime("$now+$seconds second"));
				$data['time'] = $now;
				$data['session'] = $_POST["session"];
				$result = $this->model->reserve_seat($_POST["reserve"],$end,$_POST["session"]);
			}
			$data['seats'] = $this->model->get_seats($_POST["session"]);
			$blocks = array(
				'index' => 'index',
			);
			$this->template->init('default',$blocks,$data);
			$this->template->set_view('reservation_seats');
			$this->template->render($data);
		}
		
		public function free()
		{
			if (isset($_POST["free"])){
				$now = date('Y-m-d H:i:s');
				$seconds = $_POST["seconds"];
				$end = date('Y-m-d H:i:s',strtotime("$now+$seconds second"));
				$data['time'] = $now;
				$data['session'] = $_POST["session"];
				$result = $this->model->free_seat($_POST["free"],$_POST["session"]);
			}
			$data['seats'] = $this->model->get_seats($_POST["session"]);
			$blocks = array(
				'index' => 'index',
			);
			$this->template->init('default',$blocks,$data);
			$this->template->set_view('reservation_seats');
			$this->template->render($data);
		}
		
		public function order()
		{
			if (isset($_POST["session"])){
				$now = date('Y-m-d H:i:s');
				$seconds = $_POST["seconds"];
				$end = date('Y-m-d H:i:s',strtotime("$now+$seconds second"));
				$data['time'] = $now;
				$data['session'] = $_POST["session"];
				$result = $this->model->order_seats($now,$_POST["session"]);
			}
			$data['seats'] = $this->model->get_seats($_POST["session"]);
			$blocks = array(
				'index' => 'index',
			);
			$this->template->init('default',$blocks,$data);
			$this->template->set_view('reservation_seats');
			$this->template->render($data);
		}
	}