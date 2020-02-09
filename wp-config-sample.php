<?php

/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'amazinggfits');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
// define('DB_PASSWORD', 'iZjzaisoOdqXUO*iBs');
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '~,eI7P.,b0WFtO1sia+n<=(o)H4q}J`j.#d7Yes;?rUnAA-|;dBR27P Tui]j{T`');
define('SECURE_AUTH_KEY', 't1?$OvNcunmk}E:ZRrX-yuPp!HO4.6D4lyC0JxXl1|_^O&?~<Sbv`%3X5h&c%w2:');
define('LOGGED_IN_KEY', 'YFF:NP=a*%-kT0OjU+D;/(Bjihci-+ C];:xQ:m-]Uj^h9~-C*A-=p>-h@vk`i9i');
define('NONCE_KEY', '{tU$bXnqD[,Z5r&)WR((16H3-}e1237&hCeQ:TB>4z{i{*?7wwpXiJ2DAo:!MNPL');
define('AUTH_SALT', '7OKY^Z{ulc1JAMCM=5%Ov^B[|O|Cw(m|?fl^@dIx~KWG2TgECG**I@Z]]}0F..F^');
define('SECURE_AUTH_SALT', '3.|}j}#I,3 3!J&+S<R^7jx~k#]`{vPU;(0mCYw;lovlLhI52;-Q0.KZr?;X%4*]');
define('LOGGED_IN_SALT', '9@v?qpA=#tF2q[=1l/$LaI gb=<2LKyEz);(8[XNcqYGST<|SZ`omr!&*c@?AwLY');
define('NONCE_SALT', '8Pr=)||Q8u6fy]qWHIfp@AV41^lw_~+dWtyBsD2^DSPZT>%V@zAwoWf}hX-(6>DI');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');