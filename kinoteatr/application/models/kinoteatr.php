<?php

	class Kinoteatr_Model
	{
		
		private $conn;
		
		public function __construct()
		{
			$this->conn = new Database(DBUSER,DBPASS,DBNAME); //Параметры определены в config.php
		}
		
		//Все фильмы в выбранный день
		public function get_all_movies($day)
		{
			return $this->conn->query('SELECT `id_mov`, `name` FROM `movies` WHERE 1')->resultset();
		}
	}