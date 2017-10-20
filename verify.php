<?php
$access_token = '6HIBflXu2vlniI4JKQaiitIOyRpn2gP+NYSBdmiM2Y1Qf9EoOUQWhypMEAjbayMw0lrbLzc0A/sL/PU7legz0ouclSd6Kr3ILDtlFRoh0rzX4nP4Q5aseoGViP1oe+N2x2nVibI9xEU+JkEo9dofTQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
