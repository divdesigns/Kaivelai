<?php
register_nav_menus( array(
        'primary' => __( 'top', 'divdesigns' ),
) );

require_once get_template_directory() . '/bs4navwalker.php';

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {

    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );

}

?>




