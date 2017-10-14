<?php
// env.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Fri Oct 13 20:48:38 2017 ARNAUD Hugo
// Last update Sat Oct 14 09:20:40 2017 ARNAUD Hugo
//

include_once("microshell.php");

function f_env()
{
  global $env;
  $a = 0;
  $str = array_keys($env);
  while (isset($env[$str[$a]]) != NULL)
    {
      if (is_string($env[$str[$a]]))
	{
	  $newEnv = $str[$a] . "=" . $env[$str[$a]];
	  echo $newEnv, "\n";
	}
      $a = $a + 1;
    }
}