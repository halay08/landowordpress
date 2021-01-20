<?php
/**
 * This is a sample config for local development. wp-config.php will
 * load this file if you're not in a Pantheon environment. Simply edit/copy
 * as needed and rename to wp-config-local.php.
 *
 * Be sure to replace YOUR LOCAL DOMAIN below too.
 */

define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
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


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

define('WP_HOME', 'http://wp.globis-insight.lndo.site');
define('WP_SITEURL', 'http://wp.globis-insight.lndo.site');

define('WP_AUTO_UPDATE_CORE', false);
