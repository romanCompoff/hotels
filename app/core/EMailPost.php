<?php
namespace Dva\Hotels\core;

use Dva\Hotels\Core\SendMailSmtpClass;
use Dva\Hotels\Controller\GAdsController;

	class EMailPost
	{
		public function postMail($phone, $name, $email)
		{
		$mailSMTP = new SendMailSmtpClass('voronezhotdelka', '123ewqASD', 'ssl://smtp.gmail.com', '1212', 465);
		
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
		$headers .= "From: Письмо с сайта <voronezhotdelka@gmail.com>\r\n"; // от кого письмо
		$result =  $mailSMTP->send('s1te@bk.ru', 'Обратная связь с сайта', 'Уважаемая Администация сайта myCMS, вам отправлено письмо через форму обратной связи.
		<br>Ключевое слово: ' . $_GET['utm_term'] . '
		<br>Имя: ' . $name . '
		<br>Номер телефона: ' . $phone . '
		<br>Почта: ' . $email, $headers); 

		}
	}	