<?php

    function count_lowercase($str) {
        echo preg_match_all("/[a-z]/", $str);
    }

    count_lowercase("TranSISI");
?>