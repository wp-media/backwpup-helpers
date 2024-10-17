<?php
/**
 * Plugin Name: Backwpup | Protect Folders
 * Description: Define if the folders should be protected in the backup. By default, the folders are protected. Use this plugin to disable the folder protection.
 * Plugin URI: https://github.com/wp-media/backwpup-helpers/tree/main/backup/protect-folders/backwpup-protect-folders/
 * Author:      WP Media
 * Author URI:  https://wp-media.me/
 * Licence:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP Media 2024
 */

namespace BackwpupPlugin\Helpers\backup\protect_folders;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) || die();

function protect_folders( $content ) {
	$protect_folters = false;
    return $protect_folters;
}
add_filter( 'backwpup_protect_folders', __NAMESPACE__ . '\protect_folders' );