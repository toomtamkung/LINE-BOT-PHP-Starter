<?php
$access_token = 'Gws5cL/6nX8kSSgjqMAtfbvAEP7WQ7VFgoWscqzUr7L3jc6qsnuZ7Zp9VNkcnvawrMKJ96xX1mmjI6Gx/4yl7sVK898GGy1DQifDoqHi/B4QIkQdauwyPXBAXXeR4FdbmYnIpZZ2Dzyly24PjDWUcwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
