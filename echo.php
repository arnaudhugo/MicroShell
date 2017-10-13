<?php
// microshell.php for  in /home/arnaud/arnaud_h
//
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
//
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Fri Oct 13 10:08:42 2017 ARNAUD Hugo
//

function f_echo($command_txt)
{
    $a = 5;
    $text = "";
    while (isset($command_txt[$a]) != NULL)
    {
        $text = $text . $command_txt[$a];
        $a = $a + 1;
    }
    $text = $text . "\n";
    //echo $text, "\n";
    return $text;
}