<?php

	class Personal extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('personal');
			$this->template = $this->load_lib('template');
			
			$data = array(
				'title' => 'Личный кабинет',
			);
			
		}
		
		public function index()
		{
			if ($_POST['submit_edit']){
				$data['errors'] = $this->check_fields();
				if (!isset($data['errors'])){
					$data['errors'] = $this->editInfo();
				}
			}
			if ($_POST['upload_image']){
				if($_FILES['picture']['type'] != "image/jpeg"){
					$data['errors'] = "Некорректный тип файла";
					echo $_FILES['picture']['type'];
				} 
				else{
					do{
						$filename = uniqid().$_FILES[picture]['name'];
					}while(file_exists($filename));
					if (move_uploaded_file($_FILES['picture']['tmp_name'],_IMAGEFOLDER_.$filename)){
						$this->model->upload_image($filename);
					}
					else{
						$data['errors'] = "Не удалост загрузить файл";
					}
				}
			}
			$persons = $this->model->get_info();
			$data['person'] = array_shift($persons);
			$data['actions'] = $this->model->get_actions();
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			$this->template->init('default',$blocks,$data);
			$this->template->set_view('personal_index');
			$this->template->render($data);
		}
		
				
		private function check_fields()
		{
			if (empty($_POST['name'])){
				return "Не заполнено поле \"Имя\"";
			}
			if (empty($_POST['surname'])){
				return "Не заполнено поле \"Фамилия\"";
			}
			if (!empty($_POST['birthdate'])){
				$stamp = strtotime($_POST['birthdate']);
				if (!is_numeric($stamp)){
					return "Некорректная дата";
				}
				$month = date( 'm', $stamp );
				$day = date( 'd', $stamp );
				$year = date( 'Y', $stamp );
				if (!checkdate($month,$day,$year)){
					return "Некорректная дата";
				}
			}
			if (empty($_POST['email'])){
				return "Не заполнено поле \"E-mail\"";
			}
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				return "Не верный E-mail";
			}
			if (!empty($_POST['phonenum'])){
				if(!preg_match("/^8[0-9]{10,10}+$/", $_POST['phonenum'])){
					return "Не верный номер телефона";
				}
			}
		}
		
		private function editInfo(){
			$birthdate = strtotime($_POST['birthdate']);
			$result = $this->model->edit($_POST['name'],$_POST['surname'],$birthdate,$_POST['email'],$_POST['phonenum']);
		}
	}