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
		$this->userName = "";
		$this->password = "";
		$this->dbName = "";

		$conn = new mysqli($this->serverName,$this->userName,$this->password,$this->dbName);

		return $conn;
	}

}