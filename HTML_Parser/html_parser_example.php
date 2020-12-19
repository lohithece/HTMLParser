<?php

//Step1: Get the information from the website.
$url_to_parse= "https://journals.sagepub.com/editorial-board/TAI";

$ch= curl_init();
//opt url to parse.
curl_setopt($ch, CURLOPT_URL, $url_to_parse); 
//set curlopt_returntransfer true to save response to a variable.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

//execute

$html_to_parse= curl_exec($ch);
//dump the data.
//var_dump($html_to_parse);

//Get all the elements of h1.
$dom= new DOMDocument();
@ $dom->loadHTML($html_to_parse);

$all_h1= $dom->getElementsByTagName('h1');
$h1_array= array();
foreach($all_h1 as $h1){
	$h1_array[]= $h1->textContent;
	print_r($h1_array);
}




?>