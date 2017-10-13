<?php
// microshell.php for  in /home/arnaud/arnaud_h
//
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
//
// Started on  Thu Oct 12 19:18:35 2017 ARNAUD Hugo
// Last update Fri Oct 13 10:08:42 2017 ARNAUD Hugo
//

function f_ls($commandTxt)
{
    $a = 3;
    $b = 0;
    $dirName = "./";
    $tab = array();
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
                $tab[$b] = $fichier . "@" . "\n";
            else if (is_dir($fichier))
                $tab[$b] = $fichier . "/" . "\n";
            else if (is_executable($fichier))
                $tab[$b] = $fichier . "*" . "\n";
            else
                $tab[$b] = $fichier . "\n";
            $b = $b + 1;
        }
    }
    closedir($dir);
    f_triTab($tab);
}

function f_triTab($tab)
{
    $tabLen = 0;
    while (isset($tab[$tabLen]))
    {
        $tabLen = $tabLen + 1;
    }
    while ($tabLen > 0)
    {
        $tabLen = $tabLen - 1;
        $a = 0;
        while ($a < $tabLen)
        {
            if ($tab[$a] > $tab[$a + 1])
            {
                $tmp = $tab[$a];
                $tab[$a] = $tab[$a + 1];
                $tab[$a + 1] = $tmp;
            }
            $a = $a + 1;
        }
    }
    $a = 0;
    while (isset($tab[$a]))
    {
        echo $tab[$a];
        $a = $a + 1;
    }
}