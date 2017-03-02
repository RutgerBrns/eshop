<?php

//products showcase
$aboutus = new view('aboutus/aboutus');

var_dump($_SESSION);

//categories
$categories = new view('categories/categories');
$categories->categories = Category_Model::getCategories(); 

//Page_layout 
$page_layout = new view('aboutus/page_layout');
$page_layout->aboutus = $aboutus;
$page_layout->categories = $categories;

presenter::setTitle('About Us');
presenter::present($page_layout);