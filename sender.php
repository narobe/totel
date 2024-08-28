<?php
$content = '';
foreach ($_POST as $key => $value) {
  if($value){
    $content .="<b>$key</b>: <i>$value</i>\n";
  }
  if(trim($content)){
    $content = "<b>Message from site:</b>\n".$content;
    $apiToken = "7256933927:AAFy19j4RNhJ_xsnOypGdafRqWMAY6LNX3Q";
    $data = [
      'Chat_id' => '-4523949478',
      'text' => '$content',
      'parse_mode' => 'HTML',
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
  }
}
?>
