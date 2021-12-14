<?php 

function csstem() {

wp_register_style('tema', get_template_directory_uri().'/css/bootstrap.min.css', array(), 1, 'all' );
wp_enqueue_style('tema');



wp_register_style('temp', get_template_directory_uri().'/css/all.min.css', array(), 1, 'all' );
wp_enqueue_style('temp');


wp_register_style('slk', get_template_directory_uri().'/css/slick.css', array(), 1, 'all' );
wp_enqueue_style('slk');


wp_register_style('smp', get_template_directory_uri().'/css/simple-line-icons.css', array(), 1, 'all' );
wp_enqueue_style('smp');


wp_register_style('sty', get_template_directory_uri().'/css/style.css', array(), 1, 'all' );
wp_enqueue_style('sty');

}



add_action('wp_enqueue_scripts','csstem');

register_nav_menus( array(
  'menu_degiskeni'   => __( 'Yeni Menu' )
) );

?>