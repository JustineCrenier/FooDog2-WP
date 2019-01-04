<?php

register_nav_menus( array(
    'main-menu' => 'Menu principal',
    'second-menu' => 'Second menu',
));

add_theme_support('post-thumbnails');
add_image_size('single-post', 350, 250);