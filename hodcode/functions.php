<?php

add_action("init", function() {
    register_nav_menus([
        "header" => "Header Menu",
        "footer" => "Footer Menu"
    ]);
});

// این فیلتر برای اضافه کردن کلاس به <li>
add_filter('nav_menu_css_class', function($classes, $item) {
    $classes[] = 'nav-item m-2'; // اضافه کردن کلاس nav-item
    return $classes;
}, 10, 2);

// این فیلتر برای اضافه کردن کلاس به <a>
add_filter('nav_menu_link_attributes', function($atts, $item) {
    $atts['class'] = 'nav-link'; // اضافه کردن کلاس nav-link
    return $atts;
}, 10, 2);
