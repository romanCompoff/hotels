<?php
namespace Dva\Hotels\core;

use Dva\Hotels\core\SendMailSmtpClass;


	class EMailPost
	{
		public function postMail($phone, $name, $email, $kw, $siteName)
		{
		$mailSMTP = new SendMailSmtpClass('voronezhotdelka', '123ewqASD', 'ssl://smtp.gmail.com', '1212', 465);
		
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
		$headers .= "From: ".$siteName." <voronezhotdelka@gmail.com>\r\n"; // от кого письмо
		$result =  $mailSMTP->send('s1te@bk.ru', $siteName, 'Уважаемая Администация сайта '. $siteName .', вам отправлено письмо через форму обратной связи.
		<br>Ключевое слово: ' . $kw . '
		<br>Имя: ' . $name . '
		<br>Номер телефона: ' . $phone . '
		<br>Почта: ' . $email, $headers); 
		
		return $result;

		}
	}	