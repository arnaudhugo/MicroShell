<?php
// microshell.php for  in /home/arnaud/arnaud_h
//
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
//
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Fri Oct 13 10:08:42 2017 ARNAUD Hugo
//

function f_echo($commandTxt)
{
    $a = 5;
    $text = "";
    while (isset($commandTxt[$a]) != NULL)
    {
        $text = $text . $commandTxt[$a];
        $a = $a + 1;
    }
    echo $text, "\n";
}