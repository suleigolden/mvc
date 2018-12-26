<?php
/**
 * Copyright 2018 Suleiman A. Mamman AKA-TheLastCodeBender  (email : suleimamman@gmail.com)
 *
 * See license.txt for full license information.
 */
class User extends DbConnection
{
	
	protected function getAllUsers(){
		$sql = "SELECT * FROM users";
		$result= $this->connect()->query($sql);
		$countRows = $result->num_rows;
		if ($countRows > 0) {
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
	}
}