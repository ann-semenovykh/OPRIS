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

		public function edit($name,$surname,$stamp,$email,$phonenum)
		{
			$id_user = $_SESSION['id'];
			$month = date( 'm', $stamp );
			$day = date( 'd', $stamp );
			$year = date( 'Y', $stamp );
			$birthdate = $year."-".$month."-".$day;
			return $this->conn->query("UPDATE `users` SET `name`='$name',`surname`='$surname',`birthdate`='$birthdate',".
					"`email`='$email',`phonenum`='$phonenum' WHERE `id_user` = $id_user")->executedRowsCount();
		}
	}