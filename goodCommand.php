<?php
// goodCommand.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Fri Oct 13 20:50:20 2017 ARNAUD Hugo
// Last update Fri Oct 13 20:51:09 2017 ARNAUD Hugo
//

function f_goodCommand($command)
{               //   ok  ,  ok  ,  ok ,   ok  ,   ok   ,  ok  ,  no ,  ok  ,    no   ,     no    =  7/10
  $array = array("exit", "pwd", "ls", "echo", "clear", "cat", "cd", "env", "setenv", "unsetenv");
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