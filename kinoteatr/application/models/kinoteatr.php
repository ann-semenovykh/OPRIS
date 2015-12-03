<?php

	class Kinoteatr_Model
	{
		
		private $conn;
		
		public function __construct()
		{
			$this->conn = new Database(DBUSER,DBPASS,DBNAME); //��������� ���������� � config.php
		}
		
		//��� ������ � ��������� ����
		public function get_all_movies($day)
		{
			return $this->conn->query('SELECT `id_mov`, `name`, `genre`, `age`, `poster`  FROM `movies`')->resultset();
		}
		//��� ������ �� ����� � ���
		public function get_all_sessions($mov,$hall)
		{
			return $this->conn->query('SELECT `time`,`price` FROM `session` WHERE `session`.`id_hall`='.$hall.' AND `session`.`id_mov`='.$mov)->resultset();
		}
		
		//��� ����
		public function get_all_halls()
		{
			return $this->conn->query('SELECT * FROM hall')->resultset();
		}
	}