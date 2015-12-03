<?php

	class Movie_Model
	{
		
		private $conn;
		
		public function __construct()
		{
			$this->conn = new Database(DBUSER,DBPASS,DBNAME); //ѕараметры определены в config.php
		}
		
		public function get_movie_info($vars)
		{
			return $this->conn->query("SELECT `id_mov`, `name`, `age`, `genre`, `rateKP`, `ratelmdb`, `trailer`, `rateMPA`, `abstract`, `director`, `actors`, `year`, `time`, `poster`, `country` FROM `movies` WHERE `id_mov`='$vars'")->resultset();
		}
		//Все сеансы на фильм и зал
		public function get_all_sessions($mov,$hall)
		{
			return $this->conn->query('SELECT `time`,`price` FROM `session` WHERE `session`.`id_hall`='.$hall.' AND `session`.`id_mov`='.$mov)->resultset();
		}
		
		//Все залы
		public function get_all_halls()
		{
			return $this->conn->query('SELECT * FROM hall')->resultset();
		}
	}