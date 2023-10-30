<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project2' );

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
define( 'AUTH_KEY',         'N~_W7{FNoDEk!^m$FmeABU4Zje`5.2ENm@,tY}W^uNOEqDK7b9.`)DF!4_|f+Hdn' );
define( 'SECURE_AUTH_KEY',  '+qoL&b*Q  eV|d9Pr.1Hk=;AU|C9Z436GP#*@^KA_MC=L82t4Sb]:={<9TlLx%2;' );
define( 'LOGGED_IN_KEY',    '$NrcrHa<-(k(Nk*&o0vh=(/`q)B}-S@~c|+iAyjVw5O$Vj{pY1vM+l<fV/-7o<{_' );
define( 'NONCE_KEY',        '4QN7>7#mlk;; _QP7HqZ@*dk>`-;{[`{J*(Rk3StZx/)~GD%xYQ08Ex-Fcf-LX01' );
define( 'AUTH_SALT',        'Y>Pb~[9=$M*bZ>9>w:c^_US=`W+(?Baz;P$M{[+&(i8n<1r]pH0=^-}=l5#N>Z-?' );
define( 'SECURE_AUTH_SALT', '}05<h#*m*Ay)hh6MkU`QTeM_qDh`u!voZN&eu5(<q-d)qs&e&I^.QFS_EN6y7<D9' );
define( 'LOGGED_IN_SALT',   'O>sS14l?KCgVD_E]H;[=lI&|6,#Ak*Alysp%yuUwUQS7N.w)Y37Z3|34RG8YH85>' );
define( 'NONCE_SALT',       'M5z,u7I[==5E:[d>3OEYq_!oGa||01IA |;!!{82^jk{g-}InvKT=gWmRrycApDv' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
