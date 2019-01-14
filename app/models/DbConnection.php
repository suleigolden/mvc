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
		$this->serverName = "YourServerName";
		$this->userName = "YourUserName";
		$this->password = "YourPasword";
		$this->dbName = "YourDtabseName"; 

		$conn = mysqli_connect($this->serverName,$this->userName,$this->password);
		mysqli_select_db($conn, $this->dbName); 

		return $conn;
	}

}