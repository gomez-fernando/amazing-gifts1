<?php

// Plugin name: modo-oscuro
// Description: Activa el modo oscuro de tu theme
// version: 1.0
// Author: Fernando Gómez
// Author URI:

function estilos_plugin()
{
    $estilos_url = plugin_dir_url(__FILE__);

    wp_enqueue_style('modo-oscuro', $estilos_url.'/assets/css/estilo.css', '', '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'estilos_plugin');