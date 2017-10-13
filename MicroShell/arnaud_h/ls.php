<?php
// microshell.php for  in /home/arnaud/arnaud_h
//
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
//
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Fri Oct 13 10:08:42 2017 ARNAUD Hugo
//

function f_ls($command_txt)
{
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
        /*if ($fichier != '.' && $fichier != '..')
        {*/
        if (is_dir($fichier))
            return $fichier . "/" . "\n";
        else if (is_executable($fichier))
            return $fichier . "*" . "\n";
        else if (is_link($fichier))
            return $fichier . "@" . "\n";
        //}
    }
}