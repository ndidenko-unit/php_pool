#!/usr/bin/php
<?php
if ($argc == 4)
{
    for ($i = 1; $i < $argc; $i++)
        $line[$i] .= trim($argv[$i], " \t");
    if (!is_numeric($line[1]) || !is_numeric($line[3]))
        return;
    if($line[2] == "+")
        $res = $line[1] + $line[3];
    else if($line[2] == "-")
        $res = $line[1] - $line[3];
    else if($line[2] == "*" or $line[2] == "do_op.php")
        $res = $line[1] * $line[3];
    else if($line[2] == "/")
    {
        if ($line[3] == 0)
            $res = "You can't divide by zero!";
        else if ($line[1] == 0)
            $res = "0";
        else
            $res = $line[1] / $line[3];
    }
    else if($line[2] == "%" && $line[3] == 0)
        $res = "Modulo by zero? Really?";
    else if($line[2] == "%" && $line[3] != 0)
        $res = $line[1] % $line[3];
    $res .= "\n";
    if($res != "\n")
        print($res);
}
?>