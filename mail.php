<?php
	$email=$_POST['email'];
	$name=$_POST['name'];
	$message=$_POST['message'];

	$to = "Vitalij.rubas1234@gmail.com";

	$subject = "Заява на будівництво";

	$message ="
	Ім'я клієнта: ".htmlspecialchars($name)." <br />
	Email: ".htmlspecialchars($email)." <br />
	Повідомлення: ".htmlspecialchars($message);

	$headers = "From: construction-firm.sl <Vitalij.rubas1234@gmail.com>\r\nContext-type: text/html; charset=UTF-8\r\n";
	mail($to, $subject, $message, $headers);

	header('Location: thanks.html');

exit();
?>