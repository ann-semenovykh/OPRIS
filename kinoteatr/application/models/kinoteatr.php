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
		//��� ������ �� �����
		public function get_all_sessions($mov)
		{
			return $this->conn->query('SELECT `session`.`id_hall`,`name`,`time`,`price` FROM `session`,`hall` WHERE `session`.`id_hall`=`hall`.`id_hall` AND `session`.`id_mov`='.$mov)->resultset();
		}
	}