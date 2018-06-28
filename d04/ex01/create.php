<?php

    $big_key = -1;
    if (!$_POST['login'] or !$_POST['passwd'] or $_POST['submit'] !== "OK") {
        echo "ERROR\n";
        exit;
    }
    if (!file_exists('../private')) {
        mkdir('../private');
    }
    if (file_exists('../private/passwd')) {
        $str = file_get_contents('../private/passwd');
        $unstr = unserialize($str);
        foreach ($unstr as $key => $value)
        {
            if ($value['login'] === $_POST['login']){
                echo "ERROR\n";
                exit;
            }
            $big_key = $key > $big_key ? $key : $big_key;
        }
    }
    $unstr[$big_key + 1]["login"] = $_POST["login"];
	$unstr[$big_key + 1]["passwd"] = hash("whirlpool", $_POST["passwd"]);
	file_put_contents('../private/passwd', serialize($unstr));
	echo "OK\n";
?>