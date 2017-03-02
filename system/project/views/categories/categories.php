<div class="categories-list">
    <hr>
    <ul>
        <?php foreach($categories as $category) : ?>
            <li>
                <a href="<?php echo $category->getUrl(); ?>">
                <?php echo $category->name; ?>
                </a>             
            </li>
        <?php endforeach; ?>
    </ul>
</div>


<style type="text/css">

.categories-list {
    background-color: #E9E9E9;
    padding-bottom: 0.5%;
}

.categories-list li {
    display: inline;
    margin-left: 1%;
    font-size: 0.8em;
}

</style>