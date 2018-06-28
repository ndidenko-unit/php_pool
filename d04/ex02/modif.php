<?php
	if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"] || $_POST["submit"] != 'OK' || !file_exists("../private/passwd"))
	{
		echo "ERROR\n";
		exit();
	}
	$pass_hash = hash("whirlpool", $_POST['oldpw']);
	$data = unserialize(file_get_contents("../private/passwd"));
	foreach ($data as $key => $value) 
	{	
		if ($value['login'] === $_POST['login'] && $pass_hash === $value["passwd"])
		{
				$data[$key]["passwd"] = hash("whirlpool", $_POST['newpw']);
				file_put_contents("../private/passwd", serialize($data));
				echo "OK\n";
				exit();
		} 
	}
	echo "ERROR\n";
	exit();
?>