<?php

	class Login_Model
	{
		
		private $conn;
		
		public function __construct()
		{
			$this->conn = new Database(DBUSER,DBPASS,DBNAME); //Параметры определены в config.php
		}
		
		public function check_existence($altername,$email)
		{
			return $this->conn->query("SELECT `account_name` FROM `users` WHERE `account_name`='$altername' AND `email`='$email'")->single();
		}
		
		public function user_register($name,$surname,$altername,$email,$pass)
		{
			return $this->conn->query("INSERT INTO `users`(`name`, `surname`, `account_name`, `email`, `pashash`)".
				" VALUES ('$name','surname','$altername','$email','$pass')")->execute();
		}
	}