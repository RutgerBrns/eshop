<nav>
	<div class="shop-navigation">
    <a href="<?php echo url::to(''); ?>">Home</a>
    <a href="<?php echo url::to('Aboutus'); ?>">About us</a>
    <a href="<?php echo url::to('Products'); ?>">Products</a>
    <a href="<?php echo url::to('Cart'); ?>">Shopping Cart</a>
    <a href="<?php echo url::to('Contact'); ?>">Contact us</a>
    </div>   
    
    <div class="user-specific-navigation">
    <a href="<?php echo url::to('Register'); ?>">Register a new account</a>
    <?php if (isset($_SESSION['user_id'])): ?><a href="<?php echo url::to('logout'); ?>"><strong>Log out</strong></a><?php else : ?>
    <a href="<?php echo url::to('login'); ?>"><strong>Log in</strong></a><?php endif; ?>
    <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1): ?><a href="<?php echo url::to('admin'); ?>">Admin Panel</a> <br><?php endif; ?>
    <?php if (isset($_SESSION['user_id'])): ?><span>You are logged in with email: <strong><?php echo $_SESSION['user_email'] ?><?php endif; ?></strong></span>
    </div>


</nav>

<style type="text/css">
	
nav {
	padding: 1%;
	padding-bottom: 35px;
	background-color: #08A1FF;	
	margin-bottom: -25px;
	font-size: 0.8em;
	color: white;
}

nav a {
	color: white;
}

.shop-navigation {
	left: 2%;

}

.user-specific-navigation {
	padding: 1%; 
	right: 2%;
	float: right;
	background-color: #CC3B00;
}

.user-specific-navigation a {
	margin-left: 5px;	
}

.user-specific-navigation span {
	margin-left: 5px;	
}

</style>