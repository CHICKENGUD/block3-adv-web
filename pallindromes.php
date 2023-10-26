<?php

    $phraseToTest = "ad   a";

    //have 2 variables to track forwards and backwards

    $forwards = "";
    $backwards = "";

    //populate my 2 variables - use a loop
    //check for spaces
    //ignore or skip

    for ($i = 0; $i < strlen($phraseToTest); $i++) {
        echo $phraseToTest[$i];
        $forwards .= $phraseToTest[$i];
        if($phraseToTest[$i] == " ") {
            //echo "skip";
        } else {
            $forwards .= $phraseToTest[$i];
        }
    }

    echo $forwards

?>