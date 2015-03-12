<?php
/****************
JSON PROXY FOR NY511 TRAFFIC DATA
BY: JKTEOH
UPDATED: 3/3/15
*****************/

    $apikey = "4201d1d252a2427fbb77572afe2a5782";
    $ny511 = file_get_contents("https://api.511ny.org/api/GetCameras?key={$apikey}&format=json");
    $ny511encoded = json_encode($ny511);
    $encodeJSON = file_put_contents('roadways.json', $ny511encoded);
    echo $ny511;
    header('Content-Type: application/json');

?>