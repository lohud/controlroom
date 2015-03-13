<?php
/****************
JSON PROXY FOR NY511 TRAFFIC DATA
BY: JKTEOH
UPDATED: 3/3/15
*****************/

    $filename = 'roadways.json';
    date_default_timezone_set('America/New_York');
    header('Content-Type: application/json');

    //Get time file was written
    $filetime = filemtime($filename);

    //Compare values, if filetime is over a minute then ping api to get new data
    if (time() - $filetime >= 60){
        //Older than a minute, requery the api
        /*DEBUG*/
        // echo "FRESH";
        /*DEBUG*/
            
        $apikey = "4201d1d252a2427fbb77572afe2a5782";
        $ny511 = file_get_contents("https://api.511ny.org/api/GetCameras?key={$apikey}&format=json");
        file_put_contents('roadways.json', $ny511);
        echo $ny511;
    }
    else{
        //Not older, safe to serve up cached data
        /*DEBUG*/
        // echo "CACHED";
        /*DEBUG*/
        $ny511 = file_get_contents("roadways.json");
        echo $ny511;
    }

?>