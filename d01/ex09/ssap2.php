#!/usr/bin/php
<?php
function ft_weight($c)
{
    if (ctype_alpha($c))
        $res = ord(strtolower($c));
    elseif (ctype_digit($c))
        $res = ord($c) * 100;
    else
        $res = ord($c) * 1000;
    return ($res);
 }

function ft_cmp($a, $b)
{
    $i = 0;
    $len_a = strlen($a);
    $len_b = strlen($b);
    while ($i < $len_a or $i < $len_b)
    {
        $a_weight = ft_weight($a[$i]);
        $b_weight = ft_weight($b[$i]);
        if ($a_weight != $b_weight)
        {
            if ($a_weight >= $b_weight)
                return(1);
            else
                return(-1);
        }
        $i++;
    }
    return (0);
 }

if ($argc > 1)
{
    for ($i = 1; $i < $argc; $i++)
        $line .= " " . $argv[$i] . " ";
    $line = trim(preg_replace('| +|', ' ', $line));
    $array = explode(" ", $line);
    usort($array, 'ft_cmp');
    foreach($array as $elem)
        print("$elem\n");
}
?>