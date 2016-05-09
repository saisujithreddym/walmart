<?php
$in=$_GET["productId"];
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 10,
    CURLOPT_URL => 'http://api.walmartlabs.com/v1/reviews/'.$in.'?format=json&apiKey=zq77hufq24mf4rx29bkqbm8h',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
echo $resp;

?>