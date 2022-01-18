<?php

namespace App;

function eriatheme_supports(){
    add_theme_support('title-tag');
    add_theme_support('menus');
}


add_action('after_setup_theme', 'App\eriatheme_supports');



