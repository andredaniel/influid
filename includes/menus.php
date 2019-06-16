<?php

function register_influid_menus() {
    register_nav_menu( 'main-menu', __( 'Menu Principal', 'influid' ) );
    register_nav_menu( 'footer', __( 'Menu do Rodapé', 'influid' ) );
}

add_action( 'after_setup_theme', 'register_influid_menus' );
