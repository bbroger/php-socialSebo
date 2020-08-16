<?php
date_default_timezone_set('America/Sao_Paulo');

/**
 * The default filter for date time
 */
define('DATE_TIME', 'd/m/Y H:i:s');

/**
 * The base directory of the project
 */
define('BASE', '/php-socialSebo/');

/**
 * The directory for redirect unauthorizated access
 */
define('SECURITY_REDIRECT', '/php-socialSebo/');

/**
 * Number of indexes to remove
 */
define('INDEXES_TO_REMOVE', 1);

/**
 * The host of the project
 */
define('HOST', 'http://localhost/php-socialSebo/');

/**
 * The host of the database
 */
define('DB_HOST', '127.0.0.1');

/**
 * The user for access database
 */
define('DB_USER', 'root');

/**
 * The password for access database
 */
define('DB_PASSWORD', 'cadeira12');

/**
 * The schema name in database of the project
 */
define('DB_SCHEMA', 'social-sebo');

/**
 * Max size for upload a file
 */
define('MAX_UPLOAD_SIZE', 50);

/**
 * Max size for upload a file
 */
define('MIME_TYPES_UPLOAD', [
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/gif',
]);

/**
 * Path for saving public images
 */
define('PUBLIC_IMAGE_PATH', 'resources/thumbs/');

