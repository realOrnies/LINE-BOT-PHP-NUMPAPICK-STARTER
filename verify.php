<?php
$access_token = '2L/dqzBLE8WYVSU/rktq/ak6+ygLTKqvTKq9ziQuGj7zBwMAZvgSm57p6yecAD8Dek+CQY5u1qZBDV72hLwITp7hna1dwENAIYV9+AoUlnmqsCCdsurc6Fh0D0ZZBKEZCGALePrVsEbV2CS23RH7uQdB04t89/1O/w1cDnyilFU=
';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
