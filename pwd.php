<?php
// pwd.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:38:00 2017 ARNAUD Hugo
// Last update Sat Oct 14 10:48:01 2017 ARNAUD Hugo
//

include_once("microshell.php");

function functpwd()
{
  global $env;
  $pwd = $env['PWD'];
  echo $pwd, "\n";
}