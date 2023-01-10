<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
	$phone = $_POST['phone'];
    $date = $_POST['date'];
    $text = $_POST['text'];

	$to = "MACTEP_100@mail.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $date;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Дата: $date /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
