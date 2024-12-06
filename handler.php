<?php 
$user_phone = htmlspecialchars($_POST["userphone"]);
$user_mail = htmlspecialchars($_POST["usermail"]);

$token = "8086237551:AAHeTBb1jkKGqGTE9dZreXQGIxkGPuH-qt4";
$chat_id = "-4563960374";

$formData = array(
  "Телефон: " => $user_phone,
  "Почта:" => $user_mail,
);

foreach($formData as $key => $value){
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}