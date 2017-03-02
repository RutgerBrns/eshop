<div class="allproducts-full-list">
    <h2>Products</h2>
    <p>These are the available products</p>
    <ul>
        <?php foreach($products as $product) : ?>
            <li>
                <a href="<?php echo $product->getUrl(); ?>"><?php echo $product->name; ?></a><br>
                Price: <strong><?php echo $product->price; ?></strong>
                description: <br>
                <?php echo $product->description; ?><br><br>
                Amount left in stock: <?php echo $product->amount_in_stock; ?>
                <form action="" method="post">
                <input type="hidden" name="product_id" value="<?php echo $product->id; ?>"> 
                <input type="text" name="amount" value="1">
                <input type="submit" name="buy" value="buy now!">
                </form>                
            </li> <br><br> <hr> <br>
        <?php endforeach; ?>
    </ul>