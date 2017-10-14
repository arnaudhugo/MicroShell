<?php
// printDraw.php for microshell in /home/arnaud/arnaud_h
// 
// Made by ARNAUD Hugo
// Login   <arnaud_h@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:37:45 2017 ARNAUD Hugo
// Last update Sat Oct 14 10:51:29 2017 ARNAUD Hugo
//

function printDrawStart()
{
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
}

function printDrawEnd()
{
  define("R", "\033[35;45m");
  define("N", "\033[0m");

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
  echo "     |____________________________________________________________________________|", "\n";
  echo "", "\n";
  echo "      ____________________________________________________________________________ ", "\n";
  echo "     |                                                                            |", "\n";
  echo "     |                  ", R, "######", N, "                                                    |", "\n";
  echo "     |                  ", R, "# ", N, " ", R, "  ", N, " ", R, " #", N, "                                                  |", "\n";
  echo "     |            ", R, "##", N, "   ", R, "#      #", N, "   ", R, "##", N, "                                              |", "\n";
  echo "     |             ", R, "##", N, "   ", R, "#    #", N, "   ", R, "##", N, "                 TEAM PIEUVRE                  |", "\n";
  echo "     |              ", R, "####      ####", N, "                                                |", "\n";
  echo "     |          ", R, "##", N, "     ", R, "#     #", N, "     ", R, "##", N, "                                             |", "\n";
  echo "     |           ", R, "##", N, "   ", R, "#  ##   #", N, "   ", R, "##", N, "                                              |", "\n";
  echo "     |            ", R, "##### #", N, "  ", R, "# ######", N, "                                               |", "\n";
  echo "     |             ", R, "#####", N, "    ", R, "######", N, "                                                |", "\n";
  echo "     |                                                                            |", "\n";
  echo "     |                                                               by arnaud_h  |", "\n";
  echo "     |____________________________________________________________________________|", "\n";
}