<?php
    
    /**
     * @param [number] $year
     * @return void
     */
    function century($year) {
        $century = ceil($year / 100);
        echo $century."th century";
    }

    century(2005);

?>