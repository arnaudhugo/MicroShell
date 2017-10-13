#!/usr/bin/env php
<?php
// microshell.php for  in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Fri Oct 13 20:56:46 2017 ARNAUD Hugo
//

include_once("goodCommand.php");
include_once("echo.php");
include_once("ls.php");
include_once("clear.php");
include_once("pwd.php");
include_once("env.php");
include_once("cat.php");


echo "\033c";
echo "", "\n";
echo "      ____________________________________________________________________________ ", "\n";
echo "     |                                                                            |", "\n";
echo "     |              #   #  ######  #     #####  #####  ## ##  #####               |", "\n";
echo "     |              #   #  #       #     #      #   #  # # #  #                   |", "\n";
echo "     |              #   #  ###     #     #      #   #  #   #  ###                 |", "\n";
echo "     |              # # #  #       #     #      #   #  #   #  #                   |", "\n";
echo "     |              ## ##  ######  ##### #####  #####  #   #  #####               |", "\n";
echo "     |                                                                            |", "\n";
echo "     |      ## ##  #  #####  #####  #####  #####  #   #  #####  #      #          |", "\n";
echo "     |      # # #     #      #   #  #   #  #      #   #  #      #      #          |", "\n";
echo "     |      #   #  #  #      ####   #   #  #####  #####  ###    #      #          |", "\n";
echo "     |      #   #  #  #      #   #  #   #      #  #   #  #      #      #          |", "\n";
echo "     |      #   #  #  #####  #   #  #####  #####  #   #  #####  #####  #####      |", "\n";
echo "     |                                                                            |", "\n";
echo "     |                                                               by arnaud_h  |", "\n";
echo "     |____________________________________________________________________________|", "\n";
echo "", "\n";


$env = $_SERVER;
$commandTxt = "";
$command = "";
$com = "";

while ($commandTxt != "exit")
{
  echo "$> ";
  $commandTxt = readline("");
  if (isset($commandTxt) && $commandTxt != "exit" && ($commandTxt >= 'a' && $commandTxt <= 'z'))
    {
      preg_match_all("([\w]+)", $commandTxt, $com);
      $command = $com[0][0];
      if ((f_goodCommand($command)) == true)
	{
	  $func = "f_" . $command;
	  $func($commandTxt);
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

/*
echo "\033c";
echo "", "\n";
echo "      ____________________________________________________________________________ ", "\n";
echo "     |                                                                            |", "\n";
echo "     |               #####  #####  #####  ####   ####   #   #  #####              |", "\n";
echo "     |               #      #   #  #   #  #   #  #   #   # #   #                  |", "\n";
echo "     |               #  ##  #   #  #   #  #   #  ####     #    ###                |", "\n";
echo "     |               #   #  #   #  #   #  #   #  #   #    #    #                  |", "\n";
echo "     |               #####  #####  #####  ####   ####     #    #####              |", "\n";
echo "     |                                                                            |", "\n";
echo "     |      ## ##  #  #####  #####  #####  #####  #   #  #####  #      #          |", "\n";
echo "     |      # # #     #      #   #  #   #  #      #   #  #      #      #          |", "\n";
echo "     |      #   #  #  #      ####   #   #  #####  #####  ###    #      #          |", "\n";
echo "     |      #   #  #  #      #   #  #   #      #  #   #  #      #      #          |", "\n";
echo "     |      #   #  #  #####  #   #  #####  #####  #   #  #####  #####  #####      |", "\n";
echo "     |                                                                            |", "\n";
echo "     |                                                               by arnaud_h  |", "\n";
echo "     |____________________________________________________________________________|", "\n";
echo "", "\n";
*/