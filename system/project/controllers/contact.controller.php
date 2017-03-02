<?php

$message_email = request::post('message_email', '');
$message_name = request::post('message_name', '');
$message_description = request::post('message_description', '');


if ($_POST){
	Message_Model::createMessage($message_email, $message_name, $message_description);
	header('home.php');
}

/* if ($_POST) {
	$db = new Database();
	$db->insertTask($task_name, $task_description);
	header('Location: index.php');
}	 */					

$instructions = new view('contact/instructions');

//  /system/project/views/contact/form.php
//  contact/form
$form = new view('contact/form');
$form->message_name = $message_name;
$form->message_description = $message_description;
$form->email = $message_email;

presenter::setTitle('Contact form');

presenter::present($form);