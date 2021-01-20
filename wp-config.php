<?php
/**
 * This config file is yours to hack on. It will work out of the box on Pantheon
 * but you may find there are a lot of neat tricks to be used here.
 *
 * See our documentation for more details:
 *
 * https://pantheon.io/docs
 */

/**
 * Pantheon platform settings. Everything you need should already be set.
 */
if (file_exists(dirname(__FILE__) . '/wp-config-pantheon.php') && isset($_ENV['PANTHEON_ENVIRONMENT'])) {
    require_once(dirname(__FILE__) . '/wp-config-pantheon.php');

/**
 * Local configuration information.
 *
 * If you are working in a local/desktop development environment and want to
 * keep your config separate, we recommend using a 'wp-config-local.php' file,
 * which you should also make sure you .gitignore.
 */
} elseif (file_exists(dirname(__FILE__) . '/wp-config-local.php') && !isset($_ENV['PANTHEON_ENVIRONMENT'])) {
    # IMPORTANT: ensure your local config does not include wp-settings.php
    require_once(dirname(__FILE__) . '/wp-config-local.php');

/**
 * This block will be executed if you are NOT running on Pantheon and have NO
 * wp-config-local.php. Insert alternate config here if necessary.
 *
 * If you are only running on Pantheon, you can ignore this block.
 */
} else {
    define('DB_NAME', 'pantheon');
    define('DB_USER', 'pantheon');
    define('DB_PASSWORD', 'pantheon');
    define('DB_HOST', 'database.globisinsights.internal');
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');

    define('AUTH_KEY', 'LqBVUVmGzDffhVlhbKOrl8aZC/oiVzpiRMErWUALk8bROKc7t3txAMNzWZftiqHBPhfYpMGfLIs311oq');
    define('SECURE_AUTH_KEY', 'yPd37SrOxhzPsedTdgXgTKwIrAkHRzlnaabYxRUnB+sliKBm0xB4KSvYF/jiu4mdAndJlK3uviLbyNIk');
    define('LOGGED_IN_KEY', 'X1bWVVmYlz/MFuQm+i43OcNkZQF4rbCZCiuP/ag+oJsNUo/SelH9x/PaCV4CXWF3j1bD6KrnhCi91xU7');
    define('NONCE_KEY', 'xmQX7yykxpKd9fLN45+8gkwjRaKlWEnBgcWpfWliK2KERUwNA28kfZszBHP1XYF+aGxvh2fFARqLXLh8');
    define('AUTH_SALT', 'NruAB2n/aaQOhLREb5SitJukYs/jHsEDO/DKtALBEYvuep9Mm6E/gJ54XyXRlopeIj0FHu+89pECMllt');
    define('SECURE_AUTH_SALT', 'RZkGygIxLioOaxIjP8EXR14v9ky0SMTv1j4FdwX0KbVEPSp8kuHztURWeoW3DyxsC0fAuWqnnYa8b+xq');
    define('LOGGED_IN_SALT', 'Fwu9idvEZcA+PeUdXEnFR78+E4PipZaTzXXcRVGsaAiwQ+I0Uof/hs3ezf/ysJQLl47dcc7YKqfL+EnB');
    define('NONCE_SALT', 'iKLPdLgiZtsK8BchkooXywC5HtG1gMmAC+X+iAG/RG0DFEC2WqtqBOQh8TKr8pbqBnQrcPeDSOEPpdDI');
    define('WP_ASYNC_TASK_SALT', 'E&_Vh+BO[gUX!-JLt~Eyq;Yk;?=nR*fP_-e<7ih893X80dZ)}:iB;5NACF@s/rn%');
}


/** Standard wp-config.php stuff from here on down. **/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'asjiq_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * You may want to examine $_ENV['PANTHEON_ENVIRONMENT'] to set this to be
 * "true" in dev, but false in test and live.
 */
if (! defined('WP_DEBUG')) {
    define('WP_DEBUG', false);
}

define('WP_CACHE', true);

/* That's all, stop editing! Happy Pressing. */




/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
