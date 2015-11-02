<?php
	class Database{
	
		private $dbh; // connection handle
		private $stmt; // current statement
		
		public function __construct($user, $pass, $dbname) 
		{
			$this->dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		
		public function query($query) 
		{
			$this->stmt = $this->dbh->prepare($query);
			return $this;
		}
		
		public function execute() 
		{
			try {
				$result = $this->stmt->execute();
			}
			catch (PDOException $e) {
				echo $e->getMessage();
			}
			return $result;
		}
		public function resultset() 
		{
			$this->execute();
			try {
				$result = $this->stmt->fetchAll(PDO::FETCH_OBJ);
			}
			catch (PDOException $e) {
				echo $e->getMessage();
			}
			return $result;
		}
		public function single() 
		{
			$this->execute();
			try {
				$result = $this->stmt->fetchAll();
			}
			catch (PDOException $e) {
				echo $e->getMessage();
			}
			return $result;
		}
		
		public function disconnect()
		{
			$this->dbh = null;
		}
		
		public function __destruct()
		{
			$this->disconnect();
		}
	}