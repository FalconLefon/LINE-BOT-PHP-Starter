<?php
$access_token = '6HIBflXu2vlniI4JKQaiitIOyRpn2gP+NYSBdmiM2Y1Qf9EoOUQWhypMEAjbayMw0lrbLzc0A/sL/PU7legz0ouclSd6Kr3ILDtlFRoh0rzX4nP4Q5aseoGViP1oe+N2x2nVibI9xEU+JkEo9dofTQdB04t89/1O/w1cDnyilFU=';
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:ImSMlF0rtGuUy1s';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<$access_token>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('<replyToken>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
	
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
	 		$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";



