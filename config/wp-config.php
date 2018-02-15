<?php

define('DB_NAME', config('database.connections.mysql.database'));
define('DB_USER', config('database.connections.mysql.username'));
define('DB_PASSWORD', config('database.connections.mysql.password'));
define('DB_HOST', config('database.connections.mysql.host'));
define('DB_CHARSET', config('database.connections.mysql.charset'));
define('DB_COLLATE', config('database.connections.mysql.collation'));

/**
 * Authentication Unique Keys and Salts.
 */
define('AUTH_KEY', config('wordpress.auth.key'));
define('AUTH_SALT', config('wordpress.auth.salt'));
define('SECURE_AUTH_KEY', config('wordpress.auth.secure.key'));
define('SECURE_AUTH_SALT', config('wordpress.auth.secure.salt'));
define('LOGGED_IN_KEY', config('wordpress.auth.loggedIn.key'));
define('LOGGED_IN_SALT', config('wordpress.auth.loggedIn.salt'));
define('NONCE_KEY', config('wordpress.noce.key'));
define('NONCE_SALT', config('wordpress.noce.salt'));

/**#@-*/
$table_prefix = config('database.table_prefix');
define('WP_DEBUG', config('wordpress.debug'));

define('WP_AUTO_UPDATE_CORE', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_DEFAULT_THEME', 'lumpress');