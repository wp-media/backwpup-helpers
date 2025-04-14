<?php
/**
 * Plugin Name: Backwpup | Start Jobs with Links
 * Description: Start jobs with links. This plugin allows you to start jobs with links. You can use this plugin to allow your backwpup jobs to start with links.
 * Plugin URI: https://github.com/wp-media/backwpup-helpers/tree/main/backup/start-jobs-with-links/backwpup-start-jobs-with-links/
 * Author:      WP Media
 * Author URI:  https://wp-media.me/
 * Licence:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP Media 2024
 */

namespace BackwpupPlugin\Helpers\backup\startjobswithlinks;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) || die();

function allow_start_with_links( $content ) {
	return true;
}
add_filter( 'backwpup_allow_job_start_with_links', __NAMESPACE__ . '\allow_start_with_links' );