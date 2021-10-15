<?php
$city_1 = $_POST['city_1'];
$city_2 = $_POST['city_2'];
$number  = $_POST['number'];
$date = $_POST['date'];
$tel = $_POST['tel'];

$city_1 = htmlspecialchars($city_1);
$city_2 = htmlspecialchars($city_2);
$number  = htmlspecialchars($number);
$date = htmlspecialchars($date);
$tel = htmlspecialchars($tel);

$city_1 = urldecode($city_1);
$city_2 = urldecode($city_2);
$number = urldecode($number);
$date = urldecode($date);
$tel = urldecode($tel);


$city_1 = trim($city_1);
$city_2 = trim($city_2);
$number = trim($number);
$date = trim($date);
$tel = trim($tel);
//echo $fio;
//echo "<br>";
//echo $email;
mail("nicanorburlacu@gmail.com", "Заявка с сайта", "Откуда: ".$city_1.". Куда: ".$city_2.". Сколько мест: ".$number.". Когда: ".$date.". Номер телефона: ".$tel, "From: nicanorburlacu@gmail.com \r\n")
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express</title>
</head>
<body>
    <h2 style="text-align: center;">Заявка отправлена, можете закрывать эту вкладку</h2>
</body>
</html>