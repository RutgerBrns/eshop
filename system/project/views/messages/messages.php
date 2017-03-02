<div class="messages-list">
    <h2>Messages</h2>
    <p>You received the following messages from your users</p>
    <hr>
    <ul>
        <?php foreach($messages as $message) : ?>
            <li>
                Message name: <a href="<?php echo $message->getUrl(); ?>">
                <?php echo $message->message_name; ?>
                </a>
                <p>Email of Messenge: <?php echo $message->message_email; ?></p>
                <p>The message: <?php echo $message->message_description; ?></p>
                <hr>
            </li>
        <?php endforeach; ?>
    </ul>
</div>