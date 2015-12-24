<?php

	class Reservation_Model
	{
		
		private $conn;
		
		public function __construct()
		{
			$this->conn = new Database(DBUSER,DBPASS,DBNAME); 
		}
		
		public function get_seats($session)
		{
			return $this->conn->query("SELECT * FROM `seats` s,`booking_seats` bs WHERE s.`id_seat` = bs.`id_seat` AND bs.`id_session`=$session ORDER BY s.`numseries`, s.`num`")->resultset();
		}
		
		public function get_movie_info($session){
			return $this->conn->query("select s.`time`,s.`price`,m.`name` from `session` s,`movies` m where s.`id_session`= $session AND s.`id_mov` = m.`id_mov`")->resultset();
		}
		
		public function reserve_seat($seat,$seconds,$session)
		{
			$id_user = $_SESSION['id'];
			return $this->conn->query("UPDATE `booking_seats` SET `stat`='reserved',`id_user`=$id_user,`reserve_time`='$seconds' WHERE `id_seat`=$seat AND `id_session` = $session")->executedRowsCount();
		}
		
		public function order_seats($seconds,$session)
		{
			$id_user = $_SESSION['id'];
			return $this->conn->query("UPDATE `booking_seats` SET `stat`='ordered' WHERE `id_user`=$id_user AND `id_session` = $session AND `reserve_time`>'$seconds' AND `stat`='reserved'")->executedRowsCount();
		}
		
		public function free_seat($seat,$session)
		{
			$id_user = $_SESSION['id'];
			return $this->conn->query("UPDATE `booking_seats` SET `stat`='free',`id_user`=$id_user WHERE `id_seat`=$seat AND `id_session` = $session")->executedRowsCount();
		}
	}