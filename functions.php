 <?php

 function load_stylesheets()
 {
     wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
     wp_enqueue_style('style');
 }
 add_action('wp_enqueue_scripts', 'load_stylesheets');
 

 register_nav_menu('primary', 'Primary Menu');
 