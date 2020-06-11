<?php
//Сбор данных из полей формы. 
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$timeone = $_POST['timeone']; // Берём данные из input c атрибутом name="timeone"
$timetwo = $_POST['timetwo']; // Берём данные из input c атрибутом name="timetwo"

$token = "1149942802:AAHY4CQZ8RubODx_J2RK1jKvR2HMr_E2iJs"; // Тут пишем токен
$chat_id = "-485975858"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "Peaky barber’s"; //Указываем название сайта

$arr = array(
  'Заказ с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Время c : ' => $timeone,
  'Время по: ' => $timetwo,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>