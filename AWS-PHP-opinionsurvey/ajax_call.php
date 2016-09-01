<?php

$action = (isset($_POST['action'])) ? $_POST['action'] : (isset($_REQUEST["action"]))?$_REQUEST["action"]:'';   //action number
$placement = (isset($_POST['placement'])) ? $_POST['placement'] : (isset($_REQUEST["placement"]))?$_REQUEST["placement"]:'';    //advertiser placement
$actioncounter = (isset($_POST['actioncounter'])) ? $_POST['actioncounter'] : (isset($_REQUEST["actioncounter"]))?$_REQUEST["actioncounter"]:'';   //actioncounter number

$urlAddress = "https://impressions.crunchiemedia.com/?a=opinionsurvey&b=".$action."&c=".$placement."&d=".$actioncounter;


$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$urlAddress);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);

$result=curl_exec($ch);
curl_close($ch);
               
?>