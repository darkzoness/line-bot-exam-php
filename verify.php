<?php
$access_token = 'Maxy4S5EuwTtx2NRzxZO88C5xhjCUtLxkrLV3VGNaLEb9lwUQlx4dI75yRVg8v+lqIU2em+gHOWxhBWX/Lx0A7E0390oJdjksKoAGGeZcyG8dSIwmmwvU77VCbh9+BIPLcSRh1tt0RtUxbukiSUUoQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
