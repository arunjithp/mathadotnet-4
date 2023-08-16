<?php
if (file_exists( ABSPATH . "wp-content/advanced-headers.php")) {
	require_once ABSPATH . "wp-content/advanced-headers.php";
}
# Database Configuration
define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'wp_';
# Security Salts, Keys, Etc
define('AUTH_KEY',         '3J=]OR.$ip*R1E1h9K6,1lNF/-K_/v!|@6~B`T!<P!SQGNbeWl/c8!`[nVyiC_)/');
define('SECURE_AUTH_KEY',  '/Cbko_=+IkV+A4M^If|woInTk[{sS (tsS%zctU9N8L5~F K]]P(|Td)8aeY+wjC');
define('LOGGED_IN_KEY',    'rTBLSnr+pR0/~K{-=KXI.j~JkvRCS)oX>,N-TTJ6;87v@x 6-2yM&1g4fP|@(vfU');
define('NONCE_KEY',        ' gFUQnW4f,g+eZ7Oq`6>w~lzcJts*x BJl,AShe#+s]>xx_CY-i3g`KOVV/3RKGl');
define('AUTH_SALT',        'XJr*?c-!52@0qE>!Iqd^dH^~GBx/^yi=VB4`VlH[d`:_|~rsb~vj)w~0y@ |mP]Y');
define('SECURE_AUTH_SALT', 'W|E:ab+#)Bc-pgs4CUTS~k]nM[T=EaHa_IQ5<nL 2=w<$L.b+m{=:9FDDbPflT;^');
define('LOGGED_IN_SALT',   'OoxxNR#^)Fsl+U~(XehCLJ-(G.udK|qhek1+D=DUdyiLFy(+^-Ot/t?^8a [3?+(');
define('NONCE_SALT',       't*n3<0i{14H@JKVjGSNO+B(|baNDA+[}?h)tGT;vm2DmWfe>2`;G7i,?acI-17!;');
# Localized Language Stuff
define( 'WP_CACHE', TRUE );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'PWP_NAME', 'mathanet' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', 0775 );
define( 'FS_CHMOD_FILE', 0664 );
define( 'WPE_APIKEY', 'fd4c9764e1cb6fabff892e214a778596e89a68b7' );
define( 'WPE_CLUSTER_ID', '141245' );
define( 'WPE_CLUSTER_TYPE', 'pod' );
define( 'WPE_ISP', true );
define( 'WPE_BPOD', false );
define( 'WPE_RO_FILESYSTEM', false );
define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );
define( 'WPE_SFTP_PORT', 2222 );
define( 'WPE_SFTP_ENDPOINT', '' );
define( 'WPE_LBMASTER_IP', '' );
define( 'WPE_CDN_DISABLE_ALLOWED', true );
define( 'DISALLOW_FILE_MODS', FALSE );
define( 'DISALLOW_FILE_EDIT', FALSE );
define( 'DISABLE_WP_CRON', false );
define( 'WPE_FORCE_SSL_LOGIN', false );
define( 'FORCE_SSL_LOGIN', false );
/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/
define( 'WPE_EXTERNAL_URL', false );
define( 'WP_POST_REVISIONS', FALSE );
define( 'WPE_WHITELABEL', 'wpengine' );
define( 'WP_TURN_OFF_ADMIN_BAR', false );
define( 'WPE_BETA_TESTER', false );
umask(0002);
$wpe_cdn_uris=array ( );
$wpe_no_cdn_uris=array ( );
$wpe_content_regexs=array ( );
$wpe_all_domains=array ( 0 => 'mathanet.wpengine.com', 1 => 'mathanet.wpenginepowered.com', );
$wpe_varnish_servers=array ( 0 => 'pod-141245', );
$wpe_special_ips=array ( 0 => '35.233.162.217', );
$wpe_netdna_domains=array ( );
$wpe_netdna_domains_secure=array ( );
$wpe_netdna_push_domains=array ( );
$wpe_domain_mappings=array ( );
$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
# WP Engine ID
# WP Engine Settings
//define( 'WP_SITEURL', 'https://localhost:10004/' );
//define( 'WP_HOME', 'https://localhost:10004/' );
# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
