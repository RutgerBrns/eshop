<?php

//products showcase
$general_information = new view('products/general_information');

$all_products = new view('products/AllProductsFull');
$all_products->products = Product_Model::getProducts();

if($_POST) {
	if(!isset($_SESSION['products'])) {
		$_SESSION['products'] = [];
	}
	$_SESSION['products'][] = $_POST['id'];
	header('location:http://www.eshop.local');
}

//Page_layout 
$page_layout = new view('products/page_layout');
$page_layout->general_information = $general_information;
$page_layout->all_products = $all_products;

presenter::setTitle('Shop');
presenter::present($page_layout);