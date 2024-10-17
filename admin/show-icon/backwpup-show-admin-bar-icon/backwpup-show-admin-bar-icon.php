<?php
/**
 * Plugin Name: Backwpup | Show Admin Bar Icon
 * Description: Define if the admin bar icon should be displayed. By default, the icon is displayed. Use this plugin to disable the display of the icon.
 * Plugin URI:  https://github.com/wp-media/backwpup-helpers/tree/main/admin/show-icon/backwpup-show-admin-bar-icon/
 * Author:      WP Media
 * Author URI:  https://wp-media.me/
 * Licence:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP Media 2024
 */

namespace BackwpupPlugin\Helpers\admin\show_icon;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) || die();

function show_icon( $content ) {
	$show_icon = false;
    return $show_icon;
}
add_filter( 'backwpup_is_in_admin_bar', __NAMESPACE__ . '\show_icon' );