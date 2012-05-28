<?php
    //time = 4.92s
    $yes=FALSE;
    for ($i=20; !$yes; $i+=20) {
        for ($j=2; $j<20; $j++) {
            if ($i%$j==0) 
                $yes = TRUE;
            else {
                $yes = FALSE;
                break;
            }
        }
        if ($yes) {
            echo $i;
            break;
        }
    } 
?>
