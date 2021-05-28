<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Reficio Design</title>
    <?php wp_head(); ?>
</head>
<body>
<nav clas="nav-menu">
<?php wp_nav_menu(); ?>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url('/') ?>">Home</a>
                <?php if(is_front_page())  ?>
            </li>
            <li>
                <a href="<?php echo site_url('/Blog') ?>">Blog</a>
                <?php if(get_post_type() == 'post') echo 'class="active"'; ?>
            </li>
            <li>
                <a href="<?php echo site_url('/Projects') ?>">Projects</a>
                <?php if(is_archive('Projects')) echo 'class="active"'; ?>
            </li>
            <li>
                <a href="<?php echo site_url('/About') ?>">About</a>
                <?php if(is_page('about')) echo 'class="active"'; ?>
            </li>
            <li>
                <a href="<?php echo site_url('/Contact') ?>">Contact</a>
                <?php if(is_page('Contact ')) echo 'class="active"'; ?>
            </li>
            <li>
                <input type="text" placeholder="Search Here">
            </li>
        </ul>
    </div>
    
    </nav>

