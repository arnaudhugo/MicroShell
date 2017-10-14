<?php
// echo.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:35:49 2017 ARNAUD Hugo
// Last update Sat Oct 14 09:35:52 2017 ARNAUD Hugo
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