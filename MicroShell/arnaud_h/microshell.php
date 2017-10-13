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
    echo "$> ";
    $command_txt = readline("");
    if ($command_txt && ($command_txt >= 'a' && $command_txt <= 'z'))
    {
        preg_match_all("([\w]+)", $command_txt, $com);
        $command = $com[0][0];
        if ($command == "echo") // GOOD
        {
            echo f_echo($command_txt);
        }
        else if ($command == "clear") // BONUS GOOD
            echo "\033c";
        else if ($command == "pwd") // getenv() GOOD
            echo getenv("PWD"), "\n";
        else if ($command == "cd") // A FAIRE
        {
        }
        else if ($command == "ls")  // A DEBUG
        {
            f_ls($command_txt);
/*
            $a = 3;
            $dirName = "./";
            while (isset($command_txt[$a]) != NULL)
            {
                $dirName = $dirName . $command_txt[$a];
                $a = $a + 1;
            }
            $dir = opendir($dirName);
            while ($fichier = readdir($dir))
            {
                //if ($fichier != '.' && $fichier != '..')
                //{
                    if (is_dir($fichier))
                        echo $fichier, "/", "\n";
                    else if (is_executable($fichier))
                        echo $fichier, "*", "\n";
                    else if (is_link($fichier))
                        echo $fichier, "@", "\n";
                //}
            }
*/
        }
        else if ($command == "cat") // get_file_content() A DEBUG
        {
            $a = 4;
            $file = "";
            while (isset($command_txt[$a]) != NULL)
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
            //echo $file, "\n";
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