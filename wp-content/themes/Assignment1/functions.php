<?php

add_action('init', 'register_menus');

function register_menus (){
    register_nav_menus([
        'main' => 'Main menu for header',
        'social' => 'Social menu in the footer'
    ]);
}


?>