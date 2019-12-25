<?php
header("Access-Control-Allow-Origin: *");

$data = new stdClass();
$data->name = $__POST['name'];
$data->email = $__POST['email'];
$data->phone = $__POST['phone'];

$to      = 'dementevms@gmail.com';
$subject = 'Заявка с сайта';
$message = 'Имя: ' + $data->name + 'Телефон: '+ $data->phone +'E-mail: ' + $data->email;
$headers = array(
    'From' => 'no-reply@kwork.dementevms.ru',
    'Reply-To' => 'no-reply@kwork.dementevms.ru',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);

echo json_decode($data);