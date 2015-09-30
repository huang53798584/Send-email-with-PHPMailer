<?php
require_once 'vendor/autoload.php';

$m = new PHPMailer;

$m->isSMTP();
$m->SMTPAuth = true;

$m->Host = 'smtp.gmail.com';
$m->Username = 'example@gmail.com';
$m->Password = 'password';
$m->SMTPSecure = 'ssl';
$m->Port = 465;

$m->From = 'example@gmail.com';
$m->FromName = 'Example';
$m->addReplyTo('example@gmail.com', 'Reply address');
$m->addAddress('example@gmail.com', 'Wei Huang');

$m->Subject = 'Here is an email';
$m->Body = 'This is the body of an email!';
$m->AltBody = 'This is the body of an email!';

if($m->send()){
	echo 'Email sent.';
}