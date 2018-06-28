#!/usr/bin/php
<?php
$stdin = fopen('php://stdin', 'r');
while (stdin && !feof($stdin))
{
    echo ("Enter a number: ");
    if($line = trim(fgets($stdin)))
    {
        if(is_numeric($line))
        {
            if ($line % 2 != 0)
                echo ("The number $line is odd\n");
            else if ($line % 2 == 0)
                echo ("The number $line is even\n");
        }
        else
            echo ("'$line' is not a number\n");
    }
    else
    {
        if ((string)$line == "") 
            echo ("'' is not a number\n");
        else
            echo ("The number 0 is even\n");
    }
}
fclose($stdin);
echo "\n";
?>