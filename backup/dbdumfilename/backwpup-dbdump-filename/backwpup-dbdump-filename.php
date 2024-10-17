<?php
/**
 * Plugin Name: Backwpup | DB Dump Filename
 * Description: Define the filename of the database dump. By default, the filename is your database name. Use this plugin to change the filename.
 * Plugin URI: https://github.com/wp-media/backwpup-helpers/tree/main/backup/dbdumfilename/backwpup-dbdump-filename/
 * Author:      WP Media
 * Author URI:  https://wp-media.me/
 * Licence:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP Media 2024
 */

namespace BackwpupPlugin\Helpers\backup\dbdumpfilename;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) || die();

function get_filename( $content ) {
	return "exampleFilename";
}
add_filter( 'backwpup_generate_dump_filename', __NAMESPACE__ . '\get_filename' );