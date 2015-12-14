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
		
		public function get_actions()
		{
			$id_user = $_SESSION['id'];
			return $this->conn->query("SELECT m.`name` as `moviename`,h.`name`, se.`numseries`,se.`num`, s.`time`,s.`price`".
				" FROM `booking_seats` bs,  `hall` h,`session` s, `movies` m, `seats` se".
				" WHERE bs.`stat`= \"ordered\" AND bs.`id_user` = '$id_user' AND bs.`id_session`= s.`id_session`".
				" AND s.`id_hall` = h.`id_hall` AND s.`id_mov` = m.`id_mov`AND bs.`id_seat` = se.`id_seat`  ".
				"ORDER BY bs.`reserve_time` limit 0,10")->resultSet();
		}
		
		public function upload_image($filename)
		{
			$id_user = $_SESSION['id'];
			return $this->conn->query("UPDATE `users` SET `picture`='template\\\default\\\images\\\\$filename' WHERE `id_user` = $id_user")->executedRowsCount();
		}
	}