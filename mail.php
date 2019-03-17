<?php
$method = $_SERVER['REQUEST_METHOD'];


$project_name = 'Hotel-Ekzotik';
$admin_email  = 'Pyth.01-on@yandex.ru, zmeu.kostya@mail.ru';
$form_subject = 'Поступила новая заявка на бронирование номер с сайта "Hotel-Ekzotik"';
$from = 'zakaz@hotel-ekzotik.ru';


//Script Foreach
$c = true;
if ( $method === 'POST' ) {
	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" && $key != "captcha" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
} else if ( $method === 'GET' ) {
	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" && $key != "captcha" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
}
$message = "<table style='width: 100%;'>$message</table>";

$headers = "From: $project_name <$from>" . "\n" .
	"Reply-To: $admin_email" . "\n" .
	"X-Mailer: PHP/" . phpversion() . "\n" .
	"Content-type: text/html; charset=\"utf-8\"";

mail($admin_email, $form_subject, $message, $headers);
?>