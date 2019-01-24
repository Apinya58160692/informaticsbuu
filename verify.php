<?php
$access_token = 'dgxJpduOXBUzB5JKiXD2xv5P/8w+bcI5dH99VbnMQlWHQ+RP4aXSY1FggIrXEpjF9Xqm15hZa22qPN/ImFo6uTFnc12eerWy6pFTO22IeXXhUDOof2YjCIHREOn5qsnTRaXHAmPQVbJS/veQsTqlXQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
