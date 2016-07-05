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
define('DB_NAME', 'yesvideo');

/** MySQL database username */
define('DB_USER', 'yesvideo');

/** MySQL database password */
define('DB_PASSWORD', 'lolo35963');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'aH)?eWzxa^>^Kr-;c&C)r;nz@F/s(l/mYkj**uY^TlBOvEGNI/TGFnIZtv]ifbT$H(Opxg-{Pc[A-FriRnx?nJFN|MRyVSHgwW-W>YPId%_gs_$nOR>e(g^u$Ae$PbVV');
define('SECURE_AUTH_KEY', 'NLR/OQLIxO@y/=grG+=YwpRJ+yBUyW+X@-__K$I^iVoE%F!K-oQ@W_D;npnff)aRcJrNcXZF!uTD|AfqADnWsgrWfVBXiadI|gRgi?je}HXe+y_FG(UksCP_)yXP_a&^');
define('LOGGED_IN_KEY', 'UEEGgiGSEj_dx/zl$DbbQTN{{DQgq[;pSke?jZoSYlwOu<XmA?lnIWLvAC>j$hM}/?u^ZWC[<[a%[(oH&fsw|Pt|V<;LVe]QHZeVD*QaWXfwZ+[Ok%^NCFJLHeXoRGO<');
define('NONCE_KEY', 'jtfCPp;_L@UHgrvzep]c?$SuBMpSvvqpa/SSoY;bCP>_YMxu@Jpe=PIQ?wvGgRKbg;dWo}B&>q^+x*U!@}^-v$TQJLK^nDRVP>SX;nguAC]CzDkSIH+oEg%Bjk^BGh*S');
define('AUTH_SALT', 't>WEiSqg@*Rg)]p;}H&FIVj(Tx>lYRrx(geCz%?j?oh*h<C]bdSK&eB{B<PQj>SYcZ=*k/)yz}zyaY{*p}=s)D;BK[lB-n}EC/Ruyn{Wbm}}qdqCovhKZZlCpp%WFXdl');
define('SECURE_AUTH_SALT', 'n?kKj|%RXoN}by@vs@wH{zvpiVLsJwN{XJ[!hfSe]VoUL^^|}R;Ez$Uc/g_nwPa?kj%yXYHj%*Ed&VW-Q!}aR$JXmomRZZqmw@^smMt(GPFva}Y}!rFJUCTcyPbd}&CG');
define('LOGGED_IN_SALT', 'a}-{AfdroW^+Qjdy&}Uq;n*aRZ(]Mdk+ImwarvkxF$|j>+@sU%XNiXwM|-d-_tH)+Rkq@Mrib=WTBXdSOH[->jjP|ZliLxFYY[kJgIFtR{U@o_;IKq<-Nu-NqL*Qxu*T');
define('NONCE_SALT', 'xPpKQ_p}%+yAK?&}>bm=]U/(n)vtxg-pdq$Q<rJ![WK^Gzng-+nNE<$mN&SJMPz!nZY<W|)bCsIGFOpj>yyipn(*UCS|DuIwHMk>MxGcATG%Jwm>?W[/NEMCruKetoB>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_zycq_';

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
