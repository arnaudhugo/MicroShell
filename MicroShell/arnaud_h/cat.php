<?php
// microshell.php for  in /home/arnaud/arnaud_h
//
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
//
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Fri Oct 13 10:08:42 2017 ARNAUD Hugo
//

function f_cat($commandTxt)
{
    $a = 0;
    while (isset($commandTxt[$a]) != NULL)
        $a = $a + 1;
    if ($commandTxt[$a] != " ")
        $commandTxt[$a] = " ";
    $a = 4;
    $file = "";
    while (isset($commandTxt[$a - 1]) != NULL)
    {
        if ($commandTxt[$a] == " ") // && $commandTxt[$b - 1] != " ")
        {
            $open = fopen($file, "r");
            echo fread($open, filesize($file)) . "\n";
            fclose($open);
            $file = "";
        } else
            $file = $file . $commandTxt[$a];
        $a = $a + 1;
    }
}