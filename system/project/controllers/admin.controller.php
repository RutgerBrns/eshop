<?php

$messages = new view('messages/messages');
$messages->messages = Message_model::getMessages();

$users = new view('users/users');
$users->users = Users_Model::getUsers();

$page_layout = new view('messages/page_layout');
$page_layout->messages = $messages;
$page_layout->users = $users;

// set thte title of the page
presenter::setTitle('Admin Page');

// give the layout to the presenter to present
presenter::present($page_layout);
