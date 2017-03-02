<?php

$user_email = request::post('user_email', '');
$user_name = request::post('user_name', '');
$user_password = request::post('user_password', '');

if ($_POST){
	Users_Model::createUser($user_email, $user_name, $user_password);
	 header('home.php');
}

/* if ($_POST) {
	$db = new Database();
	$db->insertTask($task_name, $task_description);
	header('Location: index.php');
}	 */					

$instructions = new view('regiser/instructions');

//  /system/project/views/contact/form.php
//  contact/form
$registerform = new view('register/registerform');
$registerform->user_name = $user_name;
$registerform->user_email = $user_email;
$registerform->user_password = $user_password;

presenter::setTitle('Register form');

presenter::present($registerform);