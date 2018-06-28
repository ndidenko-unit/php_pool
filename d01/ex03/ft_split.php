<?php
    function ft_split ($str)
    {
        $res = trim(preg_replace('| +|', ' ', $str));
        $array = explode(" ", $res);
        sort($array);
        return($array);
    }
?>