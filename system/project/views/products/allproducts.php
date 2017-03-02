<div class="allproducts-list">
    <h2>Products</h2>
    <p>These are the available products</p>
    <ul>
        <?php foreach($products as $product) : ?>
            <li>
                <a href="<?php echo $product->getUrl(); ?>">
                    <?php echo $product->name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>