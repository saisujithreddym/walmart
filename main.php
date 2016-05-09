<?php
$inputs=$_GET["userinput"];

$curl = curl_init();
// Set some options - we are passing in a useragent too here
$url='http://api.walmartlabs.com/v1/nbp?apiKey=zq77hufq24mf4rx29bkqbm8h&itemId='.$inputs;
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 10,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
echo $resp;

?>