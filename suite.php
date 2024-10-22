<?php

$i = 0;
while ($i < 100) {
    if ($i < 10) {
        echo "0". $i . ", ";
        $i++;
    } else {
        echo $i . ", ";
        $i++;
    }
}