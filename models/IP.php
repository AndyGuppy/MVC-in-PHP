<?php
  class IP {
    // we define 6 attributes
    // they are public so that we can access them using $image->category_id directly
    public $ipaddress;
    public $country;
    public $countryCode;
    public $region;
    public $city;
    public $longitude;
    public $latitude;
 

    public function __construct($ipaddress,$country,$countryCode, $region, $city, $longitude, $latitude) {
      $this->ipaddress = $ipaddress;
      $this->country = $country;
      $this->countryCode  = $countryCode;
      $this->region = $region;
      $this->city = $city;
      $this->longitude = $longitude;
      $this->latitude = $latitude;
    }

    public static function get_IP() {
      $ip_keys = array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR');
      foreach ($ip_keys as $key) {
          if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                   // trim for safety measures
                   $ip = trim($ip);
                  // attempt to validate IP
                      if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
                      // invalid
                          return 'Invalid';
                      }else
                      {
                       // return IP address
                          return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false;
                      }
                  }
           }
        }
      }

    }
?>