<?php
// echo.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Fri Oct 13 20:47:44 2017 ARNAUD Hugo
// Last update Fri Oct 13 20:48:18 2017 ARNAUD Hugo
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