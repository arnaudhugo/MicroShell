#!/usr/bin/env php
<?php
// microshell.php for  in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Thu Oct 12 23:29:38 2017 ARNAUD Hugo
//

$command_txt = "";
$command = "";
$com = "";
$matches = "";
$text = "";
$file = "";
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
	    $a = 5;
	    while (isset($command_txt[$a]) != NULL)
	      {
		$text = $text . $command_txt[$a];
		$a = $a + 1;
	      }
	    echo $text, "\n";
	    $text = "";
	  }
	else if ($command == "clear") // BONUS
	    echo "\033c";
	else if ($command == "pwd") // getenv()
	    echo getenv("PWD"), "\n";
	else if ($command == "cd")
	  {
	  }
	else if ($command == "ls")
	  {
	  }
	else if ($command == "cat")
	  {
	    $a = 4;
	    $file = "";
	    while (isset($command_txt[$a]))
	      {
		if ($command_txt[$a] == " " || $command_txt[$a] == "\t")
		  {
		    echo $file, "\n";
		    $file = "";
		  }
		else
		  $file = $file . $command_txt[$a];
		$a = $a + 1;
	      }
	    echo $file, "\n";
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