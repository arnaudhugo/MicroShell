<?php
// goodCommand.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Fri Oct 13 20:50:20 2017 ARNAUD Hugo
// Last update Sat Oct 14 09:21:10 2017 ARNAUD Hugo
//

function f_goodCommand($command)
{            //   ok  ,  ok ,   ok  ,   ok   ,  ok  ,  no ,  ok  ,    no   ,     no    =  6/9 + 1 bonus
  $array = array("pwd", "ls", "echo", "clear", "cat", "cd", "env", "setenv", "unsetenv");
  $a = 0;
  $goodCom = false;
  while (isset($array[$a]) != NULL && $goodCom != true)
    {
      if ($command == $array[$a])
	$goodCom = true;
      else
	$goodCom = false;
      $a = $a + 1;
    }
  return $goodCom;
}