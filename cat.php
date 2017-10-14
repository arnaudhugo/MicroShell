<?php
// cat.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:35:13 2017 ARNAUD Hugo
// Last update Sat Oct 14 10:20:53 2017 ARNAUD Hugo
//

function functcat($commandTxt)
{
  $a = 0;
  while (isset($commandTxt[$a]) != NULL)
    $a = $a + 1;
  if ($commandTxt[$a - 1] != " ")
    $commandTxt[$a] = " ";
  $a = 4;
  $file = "";
  while (isset($commandTxt[$a]) != NULL)
    {
      if ($commandTxt[$a] == " ")
	{
	  $open = fopen($file, "r");
	  echo fread($open, filesize($file)) . "\n";
	  fclose($open);
	  $file = "";
	}
      else
	$file = $file . $commandTxt[$a];
      $a = $a + 1;
    }
}