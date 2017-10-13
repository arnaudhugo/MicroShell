<?php
// microshell.php for  in /home/arnaud/arnaud_h
//
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
//
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Fri Oct 13 10:08:42 2017 ARNAUD Hugo
//

function f_ls($commandTxt) // Pb: '*''/''@' dans dossier
{
    $a = 3;
    $dirName = "./";
    while (isset($commandTxt[$a]) != NULL)
    {
        $dirName = $dirName . $commandTxt[$a];
        $a = $a + 1;
    }
    $dir = opendir($dirName);
    while ($fichier = readdir($dir))
    {
        if ($fichier[0] != '.' && $fichier[0] != '..')
        {
            if (is_link($fichier))
                echo $fichier, "@", "\n";
            else if (is_dir($fichier))
                echo $fichier, "/", "\n";
            else if (is_executable($fichier))
                echo $fichier, "*", "\n";
            else
                echo $fichier, "\n";
        }

    }
}