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
			return $this->conn->query('SELECT `id_mov`, `name` FROM `movies` WHERE 1')->resultset();
		}
	}