#!/usr/bin/php
<?php
    if ($argc == 1)
        return;
    $res = (string)trim(preg_replace('| +|', ' ', $argv[1]));
    $array = explode(" ", $res);
    for ($i = 1; $i < sizeof($array); $i++)
        echo $array[$i] . ' ';
    echo $array[0] . "\n";
?>