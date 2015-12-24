<?php

	class Admin_Model
	{
		
		private $conn;
		
		public function __construct()
		{
			$this->conn = new Database(DBUSER,DBPASS,DBNAME); //Параметры определены в config.php
		}
		
		public function add_movie()
		{
			$name = $_POST['name'];
			$genre = $_POST['genre'];
			$article = $_POST['article'];
			$year = $_POST['year'];
			$actors = $_POST['actors'];
			$director = $_POST['director'];
			$trailer = $_POST['trailer'];
			$country  = $_POST['country'];
			$rateKP = $_POST['rateKP'];
			$rateMPA = $_POST['rateMPA'];
			$time = $_POST['time'];
			do{
				$filename = uniqid().$_FILES[picture]['name'];
			}while(file_exists($filename));
			move_uploaded_file($_FILES['picture']['tmp_name'],_IMAGEFOLDER_.$filename);
			return $this->conn->query("INSERT INTO `movies`(`name`, `genre`, `rateKP`, `trailer`, `rateMPA`,".
				" `abstract`, `director`, `actors`, `year`, `time`, `poster`, `country`)".
				" VALUES ('$name', '$genre', '$rateKP','$trailer','$rateMPA', '$article', '$director','$actors','$year','$time','template\\\default\\\images\\\\$filename','$country')")->executedRowsCount();
		}
		
		
		public function getMovie($id_movie){
			return $this->conn->query("SELECT * FROM `movies` WHERE `id_mov` = $id_movie")->resultSet();
		}
		
		public function edit_movie($id_movie,$name,$genre,$article,$year,$actors,$director,$trailer,$country,$rateKP,$rateMPA,$time){
			if (is_uploaded_file($_FILES['picture']['tmp_name'])){
				do{
					$filename = uniqid().$_FILES[picture]['name'];
				}while(file_exists($filename));
				$this->conn->query("UPDATE `movies` SET `poster`='$filename' WHERE `id_mov` = $id_movie")->executedRowsCount();
			}
			move_uploaded_file($_FILES['picture']['tmp_name'],_IMAGEFOLDER_.$filename);
			return $this->conn->query("UPDATE `movies` SET`name`='$name',`genre`='$genre',`rateKP`='$rateKP',`ratelmdb`='rateImdb',".
				"`trailer`='$trailer',`rateMPA`='$rateMPA',`abstract`='$article',`director`='$director',`actors`='$actors',`year`='$year',".
				"`time`='$time',`country`='$country' WHERE `id_mov` = $id_movie")->executedRowsCount();
		}
		
		public function deleteMovie($id_movie){
			$this->conn->query("DELETE FROM `session` WHERE `id_mov` = $id_movie")->executedRowsCount();
			$this->conn->query("DELETE FROM `movies` WHERE `id_mov` = $id_movie")->executedRowsCount();
		}
		
		public function getAll_Movies(){
			return $this->conn->query("SELECT * FROM `movies`")->resultSet();
		}
		
		public function getAll_Halls(){
			return $this->conn->query("SELECT * FROM `hall`")->resultSet();
		}
		
		public function getSession($id_session){
			return $this->conn->query("SELECT * FROM `session` WHERE `id_session` = $id_session")->resultSet();
		}
		
		public function getAll_Sessions(){
			return $this->conn->query("SELECT s.`id_session`,m.`name`,s.`time`,h.`name` as `hall` FROM `session` s,`movies` m,`hall` h".
			" WHERE s.`id_mov` = m.`id_mov` AND s.`id_hall` = h.`id_hall`")->resultSet();
		}
		
		public function deleteSession($id_session){
			return $this->conn->query("DELETE FROM `session` WHERE `id_session` = $id_session")->resultSet();
		}
		
		public function add_session($mov,$hall,$date,$price){
			echo "INSERT INTO `session`(`id_mov`, `id_hall`, `time`, `price`) ".
				"VALUES ('$mov','$hall','$date','$price')";
			return $this->conn->query("INSERT INTO `session`(`id_mov`, `id_hall`, `time`, `price`) ".
				"VALUES ('$mov','$hall','$date','$price')")->executedRowsCount();
		}
		
		
	}