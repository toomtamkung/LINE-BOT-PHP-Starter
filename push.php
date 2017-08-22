<?php

$strAccessToken = 'Gws5cL/6nX8kSSgjqMAtfbvAEP7WQ7VFgoWscqzUr7L3jc6qsnuZ7Zp9VNkcnvawrMKJ96xX1mmjI6Gx/4yl7sVK898GGy1DQifDoqHi/B4QIkQdauwyPXBAXXeR4FdbmYnIpZZ2Dzyly24PjDWUcwdB04t89/1O/w1cDnyilFU=';

$strUrl = "https://api.line.me/v2/bot/message/push";

$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

$arrPostData = array();
$arrPostData['to'] = "Ufbd30f103226d8df4c364e7b15d01060";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

?>
