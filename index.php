<?php
$file = fopen("apikey.txt", "r");
while(! feof($file)) {
  $readarr = fgets($file);
  // $readarr = explode('|',$readarr);
  $api = $readarr;
  // print_r($api);
  $ny511 = file_get_contents("https://api.511ny.org/api/GetCameras?key=".$api."&format=json");
  $nyData = json_decode($ny511, true);
  $assets = array();
  // print_r($nyData);
}
	// print_r($nyData);
	for($dataCount = 0; $dataCount < count($nyData); $dataCount++){
		// array_push($assets, $nyData[$dataCount]);
		print_r($assets, $nyData[$dataCount]['RoadwayName']);

	}
	// print_r($assets);



// for ($i=0; $i< count($data1['layoutModules']); $i++){
//     for ($x=0; $x < count($data1['layoutModules'][$i]['contents']); $x++){
//         array_push($assets, $data1['layoutModules'][$i]['contents'][$x]['id']);
//     }
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	// var nyKey = "<?php echo $key?>";
	// var pull511ny = new XMLHttpRequest();
	// pull511ny.onload = reqListener;
	// pull511ny.open("get", "https://api.511ny.org/api/GetCameras?key="+nyKey+"&format=json", true);
	// pull511ny.send();
	// var pull511ny = "<?php echo $data ?>"
	// console.log(pull511ny);
	// function reqListener(e) {
	//     nyData = JSON.parse(this.responseText);
	//     console.log(feedData);
	// }
	</script>
</head>
<body>

</body>
</html>