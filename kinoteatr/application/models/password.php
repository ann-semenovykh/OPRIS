<?php

	class Password_Model
	{
		
		private $conn;
		
		public function __construct()
		{
			$this->conn = new Database(DBUSER,DBPASS,DBNAME); //ѕараметры определены в config.php
		}
		

		public function check($user)
		{
			return $this->conn->query("SELECT `name`,`email`
                FROM `users`
                WHERE `account_name`='$user'
                LIMIT 1")->single();
		}

		public function pasrec($user,$mail,$name)
		{
			$simvols = array ("0","1","2","3","4","5","6","7","8","9",
									"a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
									"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
				  for ($key = 0; $key < 8; $key++)
					{
					  shuffle ($simvols);
					  $string = $string.$simvols[1];

					}

			
			//шлём пороль на это мыло'
			$title="Запрос на восcтановление пороля";
			$letter="Здравствуйте, $name! Ваш новый пороль : $string";
			$headers = "Content-type: text/plain; \nFrom:kinoteatrmail@gmail.com";
			$send =mail($mail, $title, $letter,$headers);
             $this->conn->query("UPDATE `users` SET `pashash`='$string' WHERE `account_name`='$user'  AND email = '$mail'")->single();
			return "<b>Пароль отправлен на вашу почту $mail!";
			if ($send)
			{
				return "<b>Пароль отправлен на вашу почту $mail!";
			}
			else
			{
				return "<b>Ошибка. Сообщение не отправлено!";
			}
		}
	}   








?>