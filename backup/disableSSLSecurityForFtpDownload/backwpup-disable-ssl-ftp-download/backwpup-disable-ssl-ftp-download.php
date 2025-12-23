<?php
/**
 * Plugin Name: Backwpup | Disable SSL Security For FTP Download
 * Description: Disable SSL security for FTP download in Backwpup plugin.
 * Plugin URI: https://github.com/wp-media/backwpup-helpers/tree/main/backup/disableSSLSecurityForFtpDownload/backwpup-disable-ssl-ftp-download/
 * Author:      WP Media
 * Author URI:  https://wp-media.me/
 * Licence:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP Media 2024
 */

namespace BackwpupPlugin\Helpers\backup\disablesslssecurityforftpdownload;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) || die();

function get_is_enable( $is_enable ) {
	return false;
}
add_filter( 'backwpup_disable_ftp_server_ssl', __NAMESPACE__ . '\get_is_enable' );