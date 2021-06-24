<?php

// function simple_basic_theme_load_scripts(){


//     wp_enqueue_style("style-css", get_template_directory_uri()."/css/style.css",array(),"1.0","all");
// }
// add_action("wp_enqueue_script", "simple_basic_theme_load_scripts");

function mytheme_nav_config(){
  register_nav_menus(array(
      "theme_primary_menu" => "Primary Menu MyTheme",
      "theme_footer_menu" => "Footer Menu MyTheme",
      "theme_sidebar_menu" => "Left Sidebar Menu MyTheme"
  ));
}

add_action("after_setup_theme", "mytheme_nav_config");

add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_theme_support('custom-logo');

add_post_type_support('page','excerpt');

register_sidebar(

array(

  'name'=>"sidebar",
  'id'=>"sidebar"
)

);

?>