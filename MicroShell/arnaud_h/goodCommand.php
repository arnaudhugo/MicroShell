<?php
// microshell.php for  in /home/arnaud/arnaud_h
//
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
//
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Fri Oct 13 10:08:42 2017 ARNAUD Hugo
//

function f_goodCommand($command)
{
    $array = array("pwd", "ls", "echo", "clear", "car");
    $a = 0;
    $goodCom = false;
    while (isset($array[$a]) && $goodCom != true)
    {
        if ($command == $array[$a])
            $goodCom = true;
        else
            $goodCom = false;
        $a = $a + 1;
    }
    return $goodCom;
}