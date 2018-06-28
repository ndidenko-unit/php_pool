<?php
	function auth($login, $passwd) {
		if (!file_exists("../private/passwd")){ 
			return false;
		}
		$data = unserialize(file_get_contents("../private/passwd"));
		$pass_hash = hash("whirlpool", $passwd);
		foreach ($data as $key => $value) 
		{
			if ($value["login"] === $login && $value["passwd"] === $pass_hash) 
			{
				return true;
			} 
			else 
			{
				return false;
			}
		}
	}
?>