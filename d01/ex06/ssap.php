#!/usr/bin/php
<?php

    function ft_split ($str)
    {
        $res = (string)trim(preg_replace('| +|', ' ', $str));
        $array = explode(" ", $res);
        sort($array);
        return($array);
    }

    if ($argc == 1)
        return;
    for ($i = 1; $i < $argc; $i++)
        $res .= " " . $argv[$i] . " ";
    $array = ft_split($res);
    foreach ($array as $value)
    {
        echo $value;
        echo ("\n");
    }
?>
