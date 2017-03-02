<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?> | <?php echo config::get('site_title'); ?></title>
</head>
<body>

    <?php echo $top_navigation; ?>

    <?php echo $page_layout; ?>

    <?php echo $footer; ?>

</body>
</html>