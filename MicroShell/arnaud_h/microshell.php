#!/usr/bin/env php
<?php
// microshell.php for  in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Fri Oct 13 10:08:42 2017 ARNAUD Hugo
//

include_once("echo.php");
include_once("ls.php");
include_once("clear.php");
include_once("pwd.php");

/*
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
*/

$commandTxt = "";
$command = "";
$com = "";

while ($commandTxt != "exit")
{
    echo "$> ";
    $commandTxt = readline("");
    if ($commandTxt && ($commandTxt >= 'a' && $commandTxt <= 'z'))
    {
        preg_match_all("([\w]+)", $commandTxt, $com);
        $command = $com[0][0];
        if ($command == "echo") // GOOD
        {
            f_echo($commandTxt);
        }
        else if ($command == "clear") // BONUS GOOD
            f_clear();
        else if ($command == "pwd") // getenv() GOOD
            f_pwd();
        else if ($command == "ls")  // Pb: '*''/''@' dans dossier
        {
            f_ls($commandTxt);
        }
        else if ($command == "cat") // get_file_content() A DEBUG
        {
            f_cat($commandTxt);
        }
        else if ($command == "env") // $_SERVER
        {
        }
        else if ($command == "setenv")
        {
        }
        else if ($command == "unsetenv")
        {
        }
        else if ($command == "cd") // A FAIRE
        {
        }
        else if ($command == "exit")
        {
        }
        else
            echo "{$command}: Command not found", "\n";
    }
    else if ($commandTxt == "")
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
echo "     |               # ###  #   #  #   #  #   #  ####     #    ###                |", "\n";
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