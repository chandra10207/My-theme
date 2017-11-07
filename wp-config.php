<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hostingtheme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H0t#-/rXcy]ghC:I][ Pjt;P5Q;K(9Q!LmX78CC!*i/xmd@Rk*]mh15Xb{&{.=Qm');
define('SECURE_AUTH_KEY',  'HKCCoW>E+D;ace6L)# 8<#?~E~l0w9aT^Dez!*p5/plam-~DqV=#&gq~);w%G(aA');
define('LOGGED_IN_KEY',    'D()q6Z*fR$O##k#avpe(j5Qbq^z!g!w(sve^:9chCJX%YKY8Mq 29WB)K1HJJ,B?');
define('NONCE_KEY',        '6$QyUUXKkR{L_ZyZ,>39hcnwqaE8[Q*`F%P+]8[^Qi)1k9Ih.i2xj*c$+B2-1a*Y');
define('AUTH_SALT',        '@ucGV^ 6@pPeDIyA%gN$((!Vb5P,hCg+JudKfohH>OO%|ZXj}F@|LB$F.aClg1~[');
define('SECURE_AUTH_SALT', 'Rv42FPbu2oRz+SG&mty`gHm(^]f{XAmJv_jo/_x=V6J(>Bca9)g+TYNE)G_ <u[^');
define('LOGGED_IN_SALT',   '2Lw_*Nl>j?[ib^msahj8.Vt,O}hWd^lq@<&~HVr_V?b-!/@enAH<wM_P.^ gNZ3W');
define('NONCE_SALT',       'b,-OWt3t&Hy|q!3N{ *M3b&J(DUs](D>P_I=]/RX^55[h-STE*.nJ91q]G:lnva0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ht17_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
