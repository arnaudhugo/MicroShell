#!/usr/bin/env php
<?php
// microshell.php for  in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Thu Oct 12 21:35:19 2017 ARNAUD Hugo
//

$command_txt = "";
$command = "";
$com = "";
$matches = "";
$text = "";
$a = 0;
$l = 0;

while ($command_txt != "exit")
  {
    $command_txt = readline("$> ");
    if ($command_txt && ($command_txt >= 'a' && $command_txt <= 'z'))
      {
	preg_match_all("([\w]+)", $command_txt, $com);
	$command = $com[0][0];
	if ($command == "echo")
	  {
	    $a = 0;
	    while (isset($command_txt[$a + 5]) != NULL)
	      {
		$text = $text . $command_txt[$a + 5];
		$a = $a + 1;
	      }
	    echo $text, "\n";
	    $text = "";
	  }
	else if ($command == "pwd") // getenv()
	  {
	  }
	else if ($command == "cd")
	  {
	  }
	else if ($command == "ls")
	  {
	  }
	else if ($command == "cat")
	  {
	  }
	else if ($command == "env")
	  {
	  }
	else if ($command == "setenv")
	  {
	  }
	else if ($command == "unsetenv")
	  {
	  }
	else if ($command == "exit")
	  {
	  }
	else
	  echo "{$command}: Command not found", "\n";
      }
    else if ($command_txt == "")
      {
      }
    else
      echo "{$command_txt}: Command not found", "\n";
  }