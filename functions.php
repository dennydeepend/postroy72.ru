<?php
    show_admin_bar( false );

    wp_enqueue_script('no-conflict-jquery_add_inline', wp_add_inline_script( 'jquery-core', '$ = jQuery;' ), array(), null, true);
    //wp_enqueue_script('foundation-script', get_template_directory_uri() .'/js/app.min.js', array('jquery'), null, true);
    wp_enqueue_script('custom-script', get_template_directory_uri() .'/js/main.min.js', array('jquery'), null, true);

    register_nav_menus(array(
        'main_left_menu'    => 'Основное меню',
        'footer_menu' => 'Нижнее меню'
    ));