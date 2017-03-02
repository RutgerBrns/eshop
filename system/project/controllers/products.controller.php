<?php

$product_id = request::post('product_id', '');

var_dump($product_id);
if($_POST) {
	$_SESSION['products'][] = $product_id;
	header('location:http://www.eshop.local');	
} 

//products showcase
$general_information = new view('products/general_information');

$all_products = new view('products/AllProductsFull');
$all_products->products = Product_Model::getProducts();

//Page_layout 
$page_layout = new view('products/page_layout');
$page_layout->general_information = $general_information;
$page_layout->all_products = $all_products;

presenter::setTitle('Shop');
presenter::present($page_layout);