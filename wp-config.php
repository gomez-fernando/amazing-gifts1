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
define( 'DB_NAME', 'amazinggifts' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'j=v=6jl_?bz^7J&>@t,:>,B#3{(F V/_G47Yt;XN$$]AWC?(j8j2J8K1ZCMuTr~Z' );
define( 'SECURE_AUTH_KEY', '@AHaeExrka&94=E8*Tp>`4aB~@:#G#zH+f[g5RO]}+<mzs P[vFeCt;;GlWF=CCQ' );
define( 'LOGGED_IN_KEY', 'J`r`j2,lvH[7hM7l=9UPtFAm+Ibbk{QD-3_,c+zn(t5pms!RQ-_+d3QR9 MIzUWl' );
define( 'NONCE_KEY', '?IwnEEs*tjetFx&Do/(4a#U_*Ht*JSknF)ykh]/TI95gzR$(&5TYO0rdp-qU=|lq' );
define( 'AUTH_SALT', '<)[Mk!Q[{{rrt>$p/`o]rVk~eG n8Np!Jse([FA2P/1G^Rb#<xKGA64d~6-Vt4i)' );
define( 'SECURE_AUTH_SALT', 'z-i4f2WU>^Qs=8{bz:zsWeeEV&9u5iY0:Hm/-YQ+`@pOL3>h5oXfyx$MqK*M;QWN' );
define( 'LOGGED_IN_SALT', 'POuJl4WT<bR)9?%cTkunots_72I8aMI{)/P=kn`*#_:(G*{<{WOO|~~6:0,vGV>r' );
define( 'NONCE_SALT', 'zh:(LZ78B#BohcHw>BVsK152,K0_km$-I#yl#da65A<LK4J/{{4q)=*U#+LjC0p>' );

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