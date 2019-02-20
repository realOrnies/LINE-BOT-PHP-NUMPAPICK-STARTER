 <?php
  

function send_LINE($msg){
 $access_token = '2L/dqzBLE8WYVSU/rktq/ak6+ygLTKqvTKq9ziQuGj7zBwMAZvgSm57p6yecAD8Dek+CQY5u1qZBDV72hLwITp7hna1dwENAIYV9+AoUlnmqsCCdsurc6Fh0D0ZZBKEZCGALePrVsEbV2CS23RH7uQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'Userid' => 'Udd92f4b6498f77ef5e9d0f31326a8f9f',
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
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
