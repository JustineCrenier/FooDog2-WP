<?php

register_nav_menus( array(
    'main-menu' => 'Menu principal',
    'footer-menu' => 'Footer menu',
));

add_theme_support('post-thumbnails');
add_image_size('single-post', 350, 250);
add_image_size('footer-post', 100, 100);
add_image_size('Hero-one', 520, 320);
add_image_size('Hero-post', 180, 160);