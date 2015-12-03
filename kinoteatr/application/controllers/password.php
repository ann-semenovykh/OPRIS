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
			if ($_POST['recovery']){
				$data['errors'] = $this->check_fields();
				if (!isset($data['errors'])){
					$data['errors'] = $this->recovery();
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
		
		
		function recovery(){
		// проверяем, есть ли юзер в таблице с таким же логином
			$conn = new Database(DBUSER,DBPASS,DBNAME);
			$username=$_POST['username'];
			$result = $conn->query(
				"SELECT `id_user`
                FROM `users`
                WHERE `account_name`='{$username}'
                LIMIT 1")->resultset();
			if (mysql_num_rows($result)==1)
			{
			//если есть
			//генерируем пороль        
			$simvols = array ("0","1","2","3","4","5","6","7","8","9",
									"a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
									"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
				  for ($key = 0; $key < 6; $key++)
					{
					  shuffle ($simvols);
					  $string = $string.$simvols[1];

					}

			//перегоняем в md5 хэш
			$pass = md5(md5($string));

			//переписываем пороль в базе уже хэшированый

			$conn->query("UPDATE `users`
								SET
									`pashash`='{$pass}'
															   WHERE `account_name`='{$username}' ");

			//получаем мыло из базы для нашего пользователя

			$result = $conn->query("SELECT `email`
							FROM `users`
											 WHERE
							`account_name`='{$username}'
							LIMIT 1")->resultset();
			$mail = $result['email'];
			//шлём пороль на это мыло
			mail($mail, "Запрос на востонавление пороля", "Здравствуйте $username ваш новый пороль : $string");
			}
		}
		
	}