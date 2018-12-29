<?php

/* https://api.telegram.org/bot793824117:AAGfnda1A-NEoROmMRaw392iGEBOjZ4uhDY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "793824117:AAGfnda1A-NEoROmMRaw392iGEBOjZ4uhDY";
$chat_id = "-370312941";
$arr = array(
  'Введите Ваше имя: ' => $name,
  'Номер телефона:  ' => $phone,
  'Email: ' => $email,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>