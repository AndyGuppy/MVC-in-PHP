<?php
// $ip = "94.174.222.164";
$ip = $_SERVER['REMOTE_ADDR'];

// $ip_data = get_ip_info($ip);



$arr = (array)json_decode( file_get_contents("http://ip-api.com/json/" . $ip), true);



// foreach ($arr as $key => $value){
//     echo $key;
//       echo "------";
//     echo $value;
  
//     echo "<br/>";

// }


echo('IP Address --- '. $arr['query']. '<br>');

echo('Hostname --- '. $arr['isp']. '<br>');

echo('IP Country --- '. $arr['country']. '<br/>');

echo('IP Country Code --- '. $arr['countryCode']. '<br/>');

echo('IP City --- '. $arr['city']. '<br/>');

echo('IP Region --- '. $arr['regionName']. '<br/>');

echo('IP Latitude --- '. $arr['lat']. '<br/>');

echo('IP Longitude --- '. $arr['lon']. '<br/>');

echo('Organization --- '. $arr['as']. '<br/>');


?>