<?php
$access_token = 'W1QIiPq7srpgato3zUmMna26Z37yja97/RMPi6aDJC6AZ/w6xzBJmwzvz+PgWbHQek+CQY5u1qZBDV72hLwITp7hna1dwENAIYV9+AoUlnkhFHIdv0FLY/6VOlkojTtKxxip6m0EAaWaTNsquAOp4QdB04t89/1O/w1cDnyilFU='
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
