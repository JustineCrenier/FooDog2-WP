<?php

register_nav_menus( array(
    'main-menu' => 'Menu principal',
    'footer-menu' => 'Footer menu',
));

add_theme_support('post-thumbnails');
add_image_size('single-post', 350, 250);