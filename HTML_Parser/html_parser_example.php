<?php

//Step1: Get the information from the website.
$url_to_parse= "https://journals.sagepub.com/editorial-board/TAI";

$curl_init= curl_init();
//opt url to parse.
curl_setopt($curl_init, CURLOPT_URL, $url_to_parse); 
//set curlopt_returntransfer true to save response to a variable.
curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, TRUE); 
//execute

$html_to_parse= curl_exec($curl_init);
//dump the data.
var_dump($html_to_parse);


?>