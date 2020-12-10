<?php 
$name = stripslashes(htmlspecialchars($_POST['user_name']));
$phone = stripslashes(htmlspecialchars($_POST['user_phone']));
$dostavka = stripslashes(htmlspecialchars($_POST['user_dostavka']));
$i = stripslashes(htmlspecialchars($_POST['i']));
if(empty($name) || empty($phone)){
echo '<h1 style="color:red;">Пожалуйста заполните все поля</h1>';
echo '<meta http-equiv="refresh" content="3; url=http://'.$_SERVER['SERVER_NAME'].'">';
}
else{
	/* https://api.telegram.org/bot971874524:AAGigTn5dSOIoBu1XURCdHkWOGlJ6MO-MLM/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$token = "971874524:AAGigTn5dSOIoBu1XURCdHkWOGlJ6MO-MLM";
$chat_id = "-368467774";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Адрес: ' => $dostavka,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
$subject = 'Новая Заявка'; // заголовок письмя
$addressat = "tronhodl@gmail.com";
$success_url = 'upsell/index.php?i='.$_POST['i'].'&name='.$_POST['user_name'].'&phone='.$_POST['user_phone'].'&dostavka='.$_POST['user_dostavka'].'';
$message = "ФИО: {$name}\Контактный телефон: {$phone}\Доставка: {$dostavka}";
$verify = mail($addressat,$subject,$message,"Content-type:text/plain;charset=utf-8\r\n");
if ($verify == 'true'){
    header('Location: '.$success_url);
    echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
    exit;
}
else 
    {
    echo '<h1 style="color:red;">Произошла ошибка!</h1>';
    }
}

?>
