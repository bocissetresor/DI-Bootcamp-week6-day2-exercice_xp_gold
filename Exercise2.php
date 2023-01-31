<?php
    $char = "*";

    for ($i=0; $i < 5; $i++) {
        echo $char ."<br/>";
        for ($i=0; $i < 5; $i++) { 
            $char .= "*";
            echo $char ."<br/>";
        }
    }
?>