 <?php
  

function send_LINE($msg){
 $access_token = '7gIHMJYwjdr+PVaedUU8rL4V2dy2+ybg1gT6UGApOlTpSBmBxVoJjmzmdZGBgbTnPKmzbgan5zJwDqxe4kGwGruCVUzcvoG4o9N3+gXp4W1I9MXgOMpXoJQoOPeY3+9lYSIWk/MdC87T7jg/bHFVHwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U2cbd13188b55f3f1ce4692b15913f915',
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
