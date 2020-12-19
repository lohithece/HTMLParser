<?php

//Step1: Get the information from the website.
$url_to_parse= "https://journals.sagepub.com/editorial-board/TAI";

$ch= curl_init();
//opt url to parse.
curl_setopt($ch, CURLOPT_URL, $url_to_parse); 
//set curlopt_returntransfer true to save response to a variable.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
//execute

$html_to_parse= curl_exec($ch);
//dump the data.
var_dump($html_to_parse);



?>