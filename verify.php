<?php
$access_token = 'WpU/RYEmb0k4QQy2982hTuTIIP8+s9OZWzwf0Q4wBwt51Aa60D4oT6I4guFi27+0ek+CQY5u1qZBDV72hLwITp7hna1dwENAIYV9+AoUlnm8b3yj5s8R1AU66dw6Ui2Cqg0WsheZessppVVh4mQwzwdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
