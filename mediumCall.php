<?php

// Set the response headers for the document
header('Content-Type: application/json');

// Get the requested page url
$url = $_GET['q'] . '?format=json';

// Get the callback function's name
$callback = $_GET['callback'];

// Start our curl request to the third-party (medium.com) page
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$json = curl_exec($ch); 
curl_close($ch);     

// Strip out the extra code
$json = str_replace('])}while(1);</x>','', $json);

// Wrap the JSON response (ie. create a JSONP response)
if (isset($callback) && !empty($callback)) {
  $json = $callback . '(' . $json . ');';  
}

// Output/return the code
echo $json;