<?php

/**
 * Copyright 2018 Suleiman A. Mamman AKA-TheLastCodeBender  (email : suleimamman@gmail.com)
 *
 * See license.txt for full license information.
 */

namespace app\models;

class DbConnection {
	
	private $serverName;
	private $userName;
	private $password;
	private $dbName;

	protected function connect(){
		$this->serverName = "localhost";
		$this->userName = "root";
		$this->password = "";
		$this->dbName = "golden_chat";

		$conn = mysqli_connect($this->serverName,$this->userName,$this->password);
		mysqli_select_db($conn, $this->dbName); 

		return $conn;
	}

}