<?php
//Connecting the geoPlugin API using PHP

//Function to get the user's IP Address
function get_user_IP(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$user_ip = get_user_IP();

//Code to contain country, city
$ip = '5.193.21.5';

//Connecting the API
$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

