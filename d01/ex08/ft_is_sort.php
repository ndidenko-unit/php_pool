<?php
    function ft_is_sort($array)
    {
        $sortarr = $array;
        sort($sortarr);
        if (array_diff_assoc($array, $sortarr) == NULL)
            return (TRUE);
        else
            return (FALSE);
    }
?>