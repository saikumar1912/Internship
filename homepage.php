<?php
$curl=curl_init();
$frm=$_POST['frm'];
curl_setopt($curl , CURLOPT_URL , "https://api.exchangerate-api.com/v4/latest/$frm");
curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
$response=curl_exec($curl);
$error=curl_error($curl);

$objects=json_decode($response);
$to=$_POST['to'];
$ans=($objects->rates->$to)*$_POST['amt'];
echo "<p style='color:black;text-align:center;'>Your changed ".$frm." is equal to 
<p style='color:RED;text-align:center; font-weight:bold;text-decoration: underline;'>".$ans." ".$to."</p></p>";
?>