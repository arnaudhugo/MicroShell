<?php
// pwd.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Fri Oct 13 20:57:02 2017 ARNAUD Hugo
// Last update Fri Oct 13 20:57:17 2017 ARNAUD Hugo
//

include_once("microshell.php");

function f_pwd()
{
  global $env;
  $pwd = $env['PWD'];
  echo $pwd, "\n";
}