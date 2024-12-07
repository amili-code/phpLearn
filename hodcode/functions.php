<?php

add_action("init" , function(){
    register_nav_menus([
        "header" => "Header Menu",
        "footer" => "Footer Menu"
    ]);
});
