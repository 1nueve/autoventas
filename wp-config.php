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
define('DB_NAME', 'autoventas');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', 'Q76W3W(;UJ?mFzc<dvVYpTpc<wT8,!+lWYx*;~~->Q 9+Z{!VLP*jqPndQaR6A(u'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '5ZHVjBSS+}k@>v?rh]EaRg9_;jx/IfMo:c8R>e{;^i2QJ*FxKlSDcC9#GLNjX5s('); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '&(?_O?|!t,G__Y?W!C*oZYx4>4M!-[X7uNORS``~[2xulxjl0j:Cv%2gn->yk2{U'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'nH<*pZj?)G9gZl[|#]l%7;*[&p~/rE(mDzpw1JX0_SzmB/]5yZ~2N*+~a$DLAc+x'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', ']M7wX.2IP$Eq}C.),c48[4 Pcmtt7@#B9K31$Nw96+tp(#+[?=]RAo5hTC[dP)bF'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'A+2$@8%=Y(spyZ~5:M}sownh3y^#3m)<xo0yt@9C1zj5PD8(IB)b>pwGZ$prBRQ!'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'ChwaS)MZwq@LGfiF@5j.R`u|, !w|?DS#ugvv-35#5tu9`=|vt.yv4G_efV-}&ut'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'MIWNT>/*9w2xA~YDcz!A[HXt2)xUZO0L.J-+$^pB>8,z`SPF5y{2K{W<8=q/`w)q'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

