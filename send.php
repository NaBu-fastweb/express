<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$textarea = htmlspecialchars($textarea);

$fio = urldecode($fio);
$email = urldecode($email);
$textarea = urldecode($textarea);

$fio = trim($fio);
$email = trim($email);
$textarea = trim($textarea);
//echo $fio;
//echo "<br>";
//echo $email;
mail("nicanorburlacu@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email.". Комментарий: ".$textarea ,"From: nicanorburlacu@gmail.com \r\n")
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