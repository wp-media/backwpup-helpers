<?php
/**
 * Plugin Name: Backwpup | Archive Extension
 * Description: Define the archive extension. By default, the archive extension is tar. Use this plugin to change the extension.
 * Plugin URI: https://github.com/wp-media/backwpup-helpers/tree/main/backup/archiveextension/backwpup-archive-extension/
 * Author:      WP Media
 * Author URI:  https://wp-media.me/
 * Licence:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP Media 2024
 */

namespace BackwpupPlugin\Helpers\backup\archiveextension;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) || die();

/**
 * You can specify the archive extension here
 * "tar" is the default extension
 * "tar.gz" is the extension for a tar.gz archive
 * "zip" is the extension for a zip archive
 *
 * @param [type] $content
 * @return void
 */
function get_extension( $content ) {
	return "zip";
}
add_filter( 'backwpup_generate_archive_extension', __NAMESPACE__ . '\get_extension' );
