<?php

	class Personal_Model
	{
		
		private $conn;
		
		public function __construct()
		{
			$this->conn = new Database(DBUSER,DBPASS,DBNAME); 
		}
		
		public function get_info()
		{
			$id_user = $_SESSION['id'];
			return $this->conn->query("SELECT * FROM `users` WHERE `id_user`= $id_user")->resultSet();
		}
	}