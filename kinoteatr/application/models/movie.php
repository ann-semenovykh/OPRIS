<?php

	class Movie_Model
	{
		
		private $conn;
		
		public function __construct()
		{
			$this->conn = new Database(DBUSER,DBPASS,DBNAME); //Параметры определены в config.php
		}
		
		public function get_movie_info($vars)
		{
			return $this->conn->query("SELECT `id_mov`, `name`, `age`, `genre`, `rateKP`, `ratelmdb`, `trailer`, `rateMPA`, `abstract`, `director`, `actors`, `year`, `time`, `poster`, `country` FROM `movies` WHERE `id_mov`='$vars'")->resultset();
		}
	}