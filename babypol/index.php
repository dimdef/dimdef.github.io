<?php
//Принимаем постовые данные
$whatever1=$_POST['whatever1'];
$whatever2=$_POST['whatever2'];
$user=$_POST['name'];
$adres=$_POST['adres'];
$telehone=$_POST['telehone'];
$selecttovar=$_POST['selecttovar']

//Тут указываем на какой ящик посылать письмо
$to = "atf.def@gmail.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта babypol.by";
// Сообщение письма
$message = "
Форма которую запонил клиент: ".htmlspecialchars($whatever1)."<br />
Форма которую запонил клиент: ".htmlspecialchars($whatever2)."<br />
Коврик: ".htmlspecialchars($selecttovar)."<br />
ФИО: ".htmlspecialchars($user)."<br />
Адрес доставки: ".htmlspecialchars($adres). " <br />
Телефон: <a href='tel:$phone'>".htmlspecialchars($telehone)"</a>";

// Отправляем письмо при помощи функции mail();
$headers = "From: babypol.by <babypol@babypol.by>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>

