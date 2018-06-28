#!/usr/bin/php
<?php
    if ($argc != 2)
        return;
    $res = trim(preg_replace('| +|', ' ', $argv[1]));
    echo($res);
    echo ("\n");
?>