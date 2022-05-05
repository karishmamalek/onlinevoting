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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onlinevoting' );

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
define( 'AUTH_KEY',         'q{2cR:SV]@k6HS M<jnw0zS/;OQgKR?oSXloLUZPh#VLUZTeaM)qS8S[sf&Pq}5i' );
define( 'SECURE_AUTH_KEY',  'ewcFMwk&FgU}}mhP;-m c_vdo4sd)J^huNwSw&>VY4XfLAE<s~l.)&^DGd=LpX@.' );
define( 'LOGGED_IN_KEY',    'tX Jsk<!X})(5`JXAhO813|w3JAFl:ofU&#-0Xug+)V(EZ}9yLa)UMP-Z$ap jA:' );
define( 'NONCE_KEY',        'U&USqkZefsF4D9]>,Q1_puhGFe=1e T>kkPks2iBUuNtM^/S~Uo]7}g$JKxEn(iq' );
define( 'AUTH_SALT',        '%.dhz/0Td?:[7g P5[^4Ni9xVm,]8Go[{,f3p!UD%BDxr=P[#FZ0wO>6#AC%c*8}' );
define( 'SECURE_AUTH_SALT', '@#ozi B!)0=$FD(:v_SI+}BC3F_8& dXj*b5u3qC+>-V%D4O#W}Q;;,|R*+,y=6b' );
define( 'LOGGED_IN_SALT',   'SjHIfd&A]V:Z*Fl9(5hFgz60c5h`2@J91Muj<,i:Q|v1dRqsk<PV]rwWiT%*z4m<' );
define( 'NONCE_SALT',       '3/QfuG(;0h`TE@?)*I}*,VDGclQtN){gAhq$!VCCm;$EQ[ogF:ce@h%3Jdpy(*5q' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
