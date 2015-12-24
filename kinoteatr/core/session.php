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
				if ($result[0]->isadmin == "Y")
					$_SESSION['isadmin'] = $result[0]->id_user;
				$_SESSION['id'] = $result[0]->id_user;
			}
		}
		else{
			$error = "Не все поля заполнены";
		}
	}
	