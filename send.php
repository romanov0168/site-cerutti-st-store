<?php
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');

header('Refresh: 5; url=http://cerutti-potolok.ru/index.html');

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$message = htmlspecialchars($message);
$name = urldecode($name);
$email = urldecode($email);
$tel = urldecode($tel);
$message = urldecode($message);
$name = trim($name);
$email = trim($email);
$tel = trim($tel);
$message = trim($message);
$break = "

";
$line = '----------';
$plus7 = '+7';
$send = $name.$break.$line.$break.$email.$break.$line.$break.$plus7.$tel.$break.$line.$break.$message;

if (mail('anya87707@mail.ru', 'Заказ с сайта', ''.$send))
 {     echo 'Успешно отправлено. Мы ответим Вам в ближайшее время. На всякий случай, рекомендуем проверять папку Спам в вашем почтовом ящике. Через 5 секунд вы будете перенаправлены обратно на сайт.'; 
} else { 
    echo 'При отправке возникла ошибка. Просим Вас сделать заказ по телефону +7 (916) 689-99-29 и сообщить об ошибке. Через 5 секунд вы будете перенаправлены обратно на сайт.';
}?>