<?php 

$weatherApi = "http://api.openweathermap.org/data/2.5/weather?q=Lleida&appid=1190757424d6d05aab4cb8447d8acfc3";

$var1 = curl_init();

curl_setopt($var1, CURLOPT_HEADER, 0);
curl_setopt($var1, CURLOPT_RETURNTRANSFER, 1);
curl_settpt($var1, CURLOPT_URL, $weatherApi);
curl_settpt($var1, CURLOPT_VERBOSE, 0);
curl_settpt($var1, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($var1);

curl_close($var1);
$data = json_decode($response);
echo "Temperatura actual a Lleida: " . $data->main->temp . " ºC";

?>