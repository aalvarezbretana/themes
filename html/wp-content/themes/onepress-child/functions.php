<?
function mis_estilos()
{
    wp_enqueue_style( 'child-theme-css', '/home/dam2a/Escritorio/Docker/wp/html/wp-content/themes/onepress/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mis_estilos' );
php ?>