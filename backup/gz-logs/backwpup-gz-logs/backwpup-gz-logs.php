<?php
/**
 * Plugin Name: Backwpup | Gz logs
 * Description: Define if the logs should be gzipped in the backup. By default, the logs are not gzipped. Use this plugin to enable the gzipping of the logs.
 * Plugin URI: https://github.com/wp-media/backwpup-helpers/tree/main/backup/gz-logs/backwpup-gz-logs/
 * Author:      WP Media
 * Author URI:  https://wp-media.me/
 * Licence:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP Media 2024
 */

namespace BackwpupPlugin\Helpers\backup\gzlogs;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) || die();

function gzlogs( $content ) {
	$gzlogs = true;
    return $gzlogs;
}
add_filter( 'backwpup_gz_logs', __NAMESPACE__ . '\gzlogs' );