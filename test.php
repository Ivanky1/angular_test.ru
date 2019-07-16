<?php

function getDayInt() {
    $number_day = 0;
    for ($i=1; $i<4; $i++) {
        $t = mktime(0,0,0,5,$i,2016);
        if (date('w', $t) != 0 && date('w', $t) != 6) {
            $number_day = $i;
            break;
        }
    }
    return $number_day;
}

echo (int)date('d'). '='. getDayInt();