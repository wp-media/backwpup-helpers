<?php
/**
 * Plugin Name: Backwpup | Show Admin Folder Size
 * Description: Define if folder size should be displayed in the admin. By default, the folder size is not displayed. Use this plugin to enable the display of the folder size.
 * Plugin URI:  https://github.com/wp-media/backwpup-helpers/tree/main/admin/show-folder-size/backwpup-admin-show-folder-size/
 * Author:      WP Media
 * Author URI:  https://wp-media.me/
 * Licence:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP Media 2024
 */

namespace BackwpupPlugin\Helpers\admin\show_folder_size;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) || die();

function show_folder_size( $content ) {
	$show_folder_size = true;
    return $show_folder_size;
}
add_filter( 'backwpup_show_folder_size', __NAMESPACE__ . '\show_folder_size' );