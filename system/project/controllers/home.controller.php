<?php

//All the elements that you want to show on the page
$introduction = new view('home/introduction');

$products = new view('products/allproducts');
$products->products = Product_Model::getProducts();

$categories = new view('categories/categories');
$categories->categories = Category_Model::getCategories();

//Import the page-layout
$page_layout = new view('home/page_layout');
$page_layout->introduction = $introduction;
$page_layout->products = $products;
$page_layout->categories = $categories;


// set thte title of the page
presenter::setTitle('Homepage');

// give the layout to the presenter to present
presenter::present($page_layout);
