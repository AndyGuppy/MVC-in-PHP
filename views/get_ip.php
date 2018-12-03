<?php

function get_ip_address() {
    $ip_keys = array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR');
    foreach ($ip_keys as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                // trim for safety measures
                $ip = trim($ip);
                // attempt to validate IP
                if (validate_ip($ip)) {
                    return $ip;
                }
            }
        }
    }

    return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false;
}


/**
 * Ensures an ip address is both a valid IP and does not fall within
 * a private network range.
 */
function validate_ip($ip)
{
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        return false;
    }
    return true;
}


// $ip2 = IP::get_IP();

$ip = get_ip_address();

$arr = (array)json_decode( file_get_contents("http://ip-api.com/json/" . $ip), true);

$flagid = strtolower($arr['countryCode']).'.png';


echo '<img src="/flags/'. $flagid .'" alt="Smiley face" height="14" width="22">';
// echo " -------------<br>" . $ip2 . " -------------<br>";


if($_SESSION["user_id"] <> ""){

 echo 'Hello ' . $_SESSION["user_id"] . ' from ' . $arr['city']. ', ' . $arr['regionName'] . '.... Your IP address is ' . get_ip_address() . '<br />';   
}
else{

 echo 'Welcome Guest from ' . $arr['city']. ', ' . $arr['regionName'] . '.... Your IP address is ' . get_ip_address() . '<br />';   
}
?>