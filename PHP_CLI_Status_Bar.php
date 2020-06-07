<?php
/**
 * Comte de X
 *
 * Date: 07/06/2020
 *
 * @copyright Copyright (c) 2020 Xavier GUENEL
 * @author Comte de X (comtedex@gmail.com)
 */
const RED="\033[31m";
const YELLOW="\033[33m";
const GREEN="\033[32m";
const BLUE="\033[34m";
const WHITE="\033[37m";
const COLOR_NONE="\e[0m";

    function statusBar($nbLignes,$i,$nbCarStatusBar) {
    $message='';
    $avancement = ($i / $nbLignes)*100;
    if ($avancement<20) {
        $message .= RED;
    } else if ($avancement<40) {
        $message .= YELLOW;
    } else if ($avancement<60) {
        $message .= GREEN;
    } else if ($avancement<80) {
        $message .= BLUE;
    } else if ($avancement<101) {
        $message .= WHITE;    
    } else {
        $message .= COLOR_NONE;
    }

    $message .= str_pad($i,strlen($nbLignes)+1," ",STR_PAD_LEFT) .'/'. $nbLignes;
    $message .= ' [';
    $message .= str_pad(str_repeat('#', ceil($i/$nbLignes *$nbCarStatusBar)) ,$nbCarStatusBar,'.');
    $message .= '] ';
    $message .= str_pad(number_format($avancement, 2),6," ",STR_PAD_LEFT). " %";
    $message .= "\r";

   return $message;
}

$nbCarStatusBar = 20;
$nbLignes = 100;
for ($i = 0; $i <= $nbLignes; $i++) {
    echo statusBar($nbLignes,$i,$nbCarStatusBar);
    for ($j=0;$j < 100000;$j++)
    {
        $a = 0;
    }
}
 echo   "\n";

 


