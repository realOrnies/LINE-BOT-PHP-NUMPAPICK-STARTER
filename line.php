 <?php
  

function send_LINE($msg){
 echo "kaolaew\n";
 $access_token = 'WpU/RYEmb0k4QQy2982hTuTIIP8+s9OZWzwf0Q4wBwt51Aa60D4oT6I4guFi27+0ek+CQY5u1qZBDV72hLwITp7hna1dwENAIYV9+AoUlnm8b3yj5s8R1AU66dw6Ui2Cqg0WsheZessppVVh4mQwzwdB04t89/1O/w1cDnyilFU='; 

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
