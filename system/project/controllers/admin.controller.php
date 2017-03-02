<?php

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1){
$messages = new view('messages/messages');
$messages->messages = Message_model::getMessages();

$users = new view('users/users');
$users->users = Users_Model::getUsers();

$addProduct = new view('products/addProduct');

if($_POST){
	$product_name = request::post('product_name', '');
	$product_description = request::post('product_description', '');
	$product_price = floatval(request::post('product_price', ''));
	$unit_qty = floatval(request::post('unit_qty', ''));
	$amount_in_stock = floatval(request::post('amount_in_stock', ''));
	$is_top_boolean = request::post('is_top', '');
	if ($is_top_boolean == true) { $is_top = 1;} else {$is_top = 0;}
	Product_Model::addProduct($product_name, $product_description, $product_price, $unit_qty, $amount_in_stock, $is_top);
	header('Location: http://www.eshop.local'); 
}

$page_layout = new view('messages/page_layout');
$page_layout->addProduct = $addProduct;
$page_layout->messages = $messages;
$page_layout->users = $users;


// set thte title of the page
presenter::setTitle('Admin Page');

// give the layout to the presenter to present
presenter::present($page_layout);

} else {
	header('Location: http://www.eshop.local'); 
}
