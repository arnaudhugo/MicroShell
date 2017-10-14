<?php
// env.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:36:39 2017 ARNAUD Hugo
// Last update Sat Oct 14 10:12:56 2017 ARNAUD Hugo
//

include_once("microshell.php");

function functenv()
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