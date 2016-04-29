<?php
/****************
JSON PROXY FOR NY511 TRAFFIC DATA
BY: JKTEOH
UPDATED: 3/3/15
*****************/

    // $filename = 'newcams.json';
    date_default_timezone_set('America/New_York');
    header('Content-Type: application/json');

        $ny511 = file_get_contents("newcams.json");
        echo $ny511;

?>