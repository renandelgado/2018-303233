<?php
require_once get_template_directory(). "/template-parts/other-functions/navbars.php";

require_once get_template_directory(). "/template-parts/other-functions/images.php";

require_once get_template_directory(). "/template-parts/other-functions/dashboard.php";

require_once get_template_directory(). "/template-parts/other-functions/controls.php";

add_theme_support( 'title-tag' );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption', ) );

add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio', ) );

add_theme_support( 'customize-selective-refresh-widgets' );
?>
