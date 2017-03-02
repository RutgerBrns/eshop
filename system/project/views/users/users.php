<div class="user-list">
    <h2>Users</h2>
    <p>The following users are registered on your website</p>
    <hr>
    <ul>
        <?php foreach($users as $user) : ?>
            <li>
                User name: <a href="<?php echo $user->getUrl(); ?>">
                <?php echo $user->user_name; ?>
                </a>
                <p>Email of the user: <?php echo $user->user_email; ?></p>               
                <hr>
            </li>
        <?php endforeach; ?>
    </ul>
</div>