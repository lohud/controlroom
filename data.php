<?php
/****************
JSON PROXY FOR NY511 TRAFFIC DATA
BY: JKTEOH
UPDATED: 3/3/15
*****************/

    $apikey = "4201d1d252a2427fbb77572afe2a5782";
    $ny511 = file_get_contents("https://api.511ny.org/api/GetCameras?key={$apikey}&format=json");

    // if (array_key_exists('"Msg"', $ny511)) {
    // 	echo "Shit";
    // } else {
    // 	$encodeJSON = file_put_contents('roadways.json', $ny511);
    // 	echo "Hooray!";
    // }

    if (strpos($ny511,'Msg') !== false) {
        $encodeJSON = file_put_contents('roadways.json', $ny511);
    }


    // for ($i=0; $i<count($ny511);$i++){
    // 	if (array_key_exists('"Msg"', $ny511)) {
    // 		echo "Shit";
    // 	} else {
    // 		$encodeJSON = file_put_contents('roadways.json', $ny511);
    // 		echo "Hooray!";
    // 	}
    // }
    
    // echo $ny511;
    header('Content-Type: application/json');

?>