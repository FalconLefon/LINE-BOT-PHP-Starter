<?php
$access_token = '6HIBflXu2vlniI4JKQaiitIOyRpn2gP+NYSBdmiM2Y1Qf9EoOUQWhypMEAjbayMw0lrbLzc0A/sL/PU7legz0ouclSd6Kr3ILDtlFRoh0rzX4nP4Q5aseoGViP1oe+N2x2nVibI9xEU+JkEo9dofTQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data

curl -X POST \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer {$access_token}' \
-d '{
    "to": "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx",
    "messages":[
        {
            "type":"text",
            "text":"Hello, world1"
        },
        {
            "type":"text",
            "text":"Hello, world2"
        }
    ]
}' https://api.line.me/v2/bot/message/push

if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'รักนะ<3') {
			// Get text sent
			$text = $event['message']['รักเหมือนกันค่ะ<3'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			$userId = $event['source']['userId'];
			$id = $event['message']['id'];
			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $id,
				];
			
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			
	
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




$access_token = '6HIBflXu2vlniI4JKQaiitIOyRpn2gP+NYSBdmiM2Y1Qf9EoOUQWhypMEAjbayMw0lrbLzc0A/sL/PU7legz0ouclSd6Kr3ILDtlFRoh0rzX4nP4Q5aseoGViP1oe+N2x2nVibI9xEU+JkEo9dofTQdB04t89/1O/w1cDnyilFU=';
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:ImSMlF0rtGuUy1s';
