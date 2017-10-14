#!/usr/bin/env php
<?php
// microshell.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:37:30 2017 ARNAUD Hugo
// Last update Sat Oct 14 11:47:56 2017 ARNAUD Hugo
//

include_once("goodCommand.php");
include_once("echo.php");
include_once("ls.php");
include_once("clear.php");
include_once("pwd.php");
include_once("env.php");
include_once("cat.php");
include_once("cd.php");
include_once("setenv.php");
include_once("unsetenv.php");
include_once("printDraw.php");

printDrawStart();

$env = $_SERVER;
$commandTxt = "";
$command = "";
$com = "";

while ($commandTxt != "exit")
{
  $commandTxt = readline("$> ");
  readline_add_history($commandTxt);
  if (isset($commandTxt) && $commandTxt != "exit" && ($commandTxt >= 'a' && $commandTxt <= 'z'))
    {
      preg_match_all("([\w]+)", $commandTxt, $com);
      $command = $com[0][0];
      if ((functgoodCommand($command)) == true)
	{
	  $funct = "funct" . $command;
	  $funct($commandTxt);
	}
      else
	echo "{$command}: Command not found", "\n";
    }
  else if ($commandTxt == "" || $commandTxt == "exit" || $commandTxt == " ")
    {
    }
  else
    echo "{$commandTxt}: Command not found", "\n";
}

printDrawEnd();