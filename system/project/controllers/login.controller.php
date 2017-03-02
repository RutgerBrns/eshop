<?php

$user_email = request::post('user_email', '');
$user_password = request::post('user_password', '');

if ($_POST){
	$user = Users_Model::getUserByEmail($user_email);	
	if($user->user_password == $user_password){	
		$_SESSION['user_id'] = $user->id;
		$_SESSION['user_email'] = $user->user_email;
		header('Location: http://www.eshop.local');
	} else {
		echo 'WRONG PASSWORDDDD!!!!!';
	}
}

$instructions = new view('login/instructions');

//  /system/project/views/contact/form.php
//  contact/form
$loginform = new view('login/loginform');
$loginform->user_email = $user_email;
$loginform->user_password = $user_password;

presenter::setTitle('Login form');

presenter::present($loginform);