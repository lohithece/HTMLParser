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

$html_tags_to_check= array("head","title","h1","p","a","img");

foreach($html_tags_to_check as $each_tag){
	$all_tag_data= $dom->getElementsByTagName($each_tag);
	$tag_array= array();
	foreach($all_tag_data as $tag_data){
		$tag_array[]= $tag_data->textContent;
	}
	if(count($tag_array) > 0){
		echo "<br>".strtoupper($each_tag)." Tag Contents are as below<br>";
		print_r($tag_array);
		"<br>";
	}else{
		echo "<br> No conntent found for ".strtoupper($each_tag)." Tag<br>";
	}
	
}




?>