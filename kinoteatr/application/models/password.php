<?php

	class Password_Model
	{
		
		private $conn;
		
		public function __construct()
		{
			$this->conn = new Database(DBUSER,DBPASS,DBNAME); //��������� ���������� � config.php
		}
		
		
	}   








?>