<?php
	$error = null;
	session_start(); 
	if(isset($_POST['logout'])){
		unset($_SESSION['id']);
		SetCookie("password", "");
		SetCookie("userId", "");
	}
	else if (isset($_SESSION['id'])){
		if(isset($_COOKIE['userId']) && isset($_COOKIE['password'])){
			setcookie ("userId", $_COOKIE['userId'], time() + 86400);
			setcookie ("password", $_COOKIE['password'], time() + 86400);
		}
		else{
			setcookie ("userId", $_COOKIE['userId'], time() + 86400);
			setcookie ("password", $_COOKIE['password'], time() + 86400);
		}
	}
	else if(isset($_COOKIE['userId']) && isset($_COOKIE['password'])){
		$_SESSION['id'] = $_COOKIE['userId'];
		setcookie ("userId", $_COOKIE['userId'], time() + 86400);
		setcookie ("password", $_COOKIE['password'], time() + 86400);
	}
	else if(isset($_POST['submit_auth'])){
		login();
	}
	else if(isset($_POST['recovery'])){
		recovery();
	}
	
	function login(){
		if ($_POST['login'] != "" && $_POST['password'] != ""){
			$login = $_POST['login']; 
			$password = $_POST['password'];
			$conn = new Database(DBUSER,DBPASS,DBNAME);
			$result = $conn->query("SELECT * FROM `users` WHERE `account_name`='$login' AND `pashash`='$password'")->resultset();
			if (is_null($result[0])){
				$error = "Неверный пароль";
			}
			else{
				setcookie ("userId", $result[0]->id_user, time() + 86400);
				setcookie ("password", $result[0]->pasHash, time() + 86400);
				$_SESSION['id'] = $result[0]->id_user;
			}
		}
		else{
			$error = "Не все поля заполнены";
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
	