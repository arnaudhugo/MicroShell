<?php
// microshell.php for  in /home/arnaud/arnaud_h
//
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
//
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Fri Oct 13 10:08:42 2017 ARNAUD Hugo
//

include_once("microshell.php");

function f_env()
{
    global $env;
    $a = 0;
    $str = array_keys($env);
    while (isset($env[$str[$a]]))
    {
        if (is_string($env[$str[$a]]))
        {
            $newEnv = $str[$a] . "=" . $env[$str[$a]];
            echo $newEnv, "\n";
        }
        $a = $a + 1;
    }
}