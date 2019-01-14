<?php
/**
 * Copyright 2018 Suleiman A. Mamman AKA-TheLastCodeBender  (email : suleimamman@gmail.com)
 *
 * See license.txt for full license information.
 */

namespace app\models;

class User extends DbConnection
{
	
	protected function getAllUsers(){
		$sql = "SELECT * FROM users ";
		$result= $this->connect()->query($sql);
		$countRows = $result->num_rows;
		if ($countRows > 0) {
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
	}

	public function showAllUsers(){
		$datas = $this->getAllUsers();
		foreach ($datas as $data) {
			echo "User Name is ".$data['userName']."<br>";
		}
	}
}