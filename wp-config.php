<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ocean' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n ~4]#kqk7^:v:9:o88/w }5ZIkt4/}8z&&]bm,DBHj& h6yNh5#0!Q+@cbPSX$/' );
define( 'SECURE_AUTH_KEY',  'lusbRDu-+|C^r${zykJ]$q/BL%y@H,p&vw{|pv,b,q4TxoC`~-@UqR^I&dch|01=' );
define( 'LOGGED_IN_KEY',    'yW;?Xlx2BxFkBS8Od8`|&Bk;t0i4V]DPMz D(_qX`-`Nb%LH;P;7AS/m)v{$HApH' );
define( 'NONCE_KEY',        '}i;&a:Bf~ B(|yB XT2u,:aBR%b&`;.,f=#.*Q^%[eYaXD-<|DRrMJIu3^kpz8{Q' );
define( 'AUTH_SALT',        '}[!&gx^fsMzsjG>Cf8Z-n_A9bBo*HdWp,p|9.]NX|)L|71N>E|N$5So1mT4laU;5' );
define( 'SECURE_AUTH_SALT', '8:$)Qo_z%xAJR>9$EJgc#ec|blhadhj.z[z+ne.zr!sJ~Y6D~}R2O0{dutU`U[Vz' );
define( 'LOGGED_IN_SALT',   'J}DT,C,(,AZrW2Yec* ^YV$6Q5vp{ )Tj+O`8n5o:?4`]cYUY)X; +Ge-fd)b.U#' );
define( 'NONCE_SALT',       'm5%n= VrX+aaxa/!5;Y>D0b]wNrMaF+<FQ:@;Tx_y Jxd.&Z%,&%k5J&o}C{~Yj]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
