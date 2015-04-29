<?php

/*
include(dirname(__FILE__)."/include/initializer.php");

$url = "https://mobile.fmcsa.dot.gov/qc/services/carriers/44110?webKey=".WEB_KEY_API;



$APIresilt = @file_get_contents($url);

if($APIresilt === FALSE){

	echo "error while query to API";

}

else{

	$parsedata = json_decode($APIresilt, true);
	var_dump($parsedata);
	var_dump($parsedata['content']['carrier']['cargoInsuranceOnFile']);
	var_dump($parsedata['content']['carrier']['bipdInsuranceOnFile']);
	
	

}
*/


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://safer.fmcsa.dot.gov/query.asp');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'searchtype=ANY&query_type=queryCarrierSnapshot&query_param=MC_MX&query_string=1515');
//curl_setopt($ch, CURLOPT_POSTFIELDS, 'searchtype=ANY&query_type=queryCarrierSnapshot&query_param=USDOT&query_string=44110');
$result = curl_exec($ch);
//2 steps parsing. cause of greedy / ungreedy algorythm
//preg_match('#(Carrier">Legal Name.*<TD.*>.*<\/TD>.*<\/TR>)#sU', $result, $tmp);
//preg_match('#<TD.*>([\w\s]+).*<\/TD>#s', $tmp[1], $tmp2);
//$legalName = $tmp2[1];
//var_dump($legalName);
//serahing address
preg_match('#(PhysicalAddress">Physical Address.*<TD.*>.*<\/TD>.*<\/TR>)#sU', $result, $tmp);
var_dump($tmp[1]);
//preg_match('#<TD.*>([\w\s]+).*<\/TD>#s', $tmp[1], $tmp2);
//$addr = $tmp2[1];
//var_dump($addr);
?>