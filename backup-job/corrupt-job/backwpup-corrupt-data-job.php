<?php

/**
 * Todo:: Make this a plugin that can be installed.
 */


/**
 * This can be used to validate if the data is corrupted and know where exactly the issue is.
 *
 * @param $data
*/
function validate_serialized_string( $data ) {
	preg_match_all( '/s:(\d+):"(.*?)";/s', $data, $matches, PREG_OFFSET_CAPTURE );
	echo "=== SERIALIZATION CHECK ===<br>";
	foreach ( $matches[0] as $i => $match ) {
		$expected_len = (int)$matches[1][$i][0];
		$actual_len = strlen( $matches[2][$i][0] );

		if ( $expected_len !== $actual_len ) {
			echo "❌ FAILURE : string with s:$expected_len but contains $actual_len characters : \"{$matches[2][$i][0]}\"<br>";
		}
	}
}

/**
 * This fix the corrupted serialised data.
 *
 * @param string $data
*/
function fix_serialized_string( $data ) {
	return preg_replace_callback(
		'/s:(\d+):"(.*?)";/s',
		function ( $match ) {
			$correct_length = strlen( $match[2] );
			return 's:' . $correct_length . ':"' . $match[2] . '";';
		},
		$data
	);
}

add_action('admin_init', function() {
	global $wpdb;
	$option_name = 'backwpup_jobs';

	/**
	 * If data is true which means it's not false then bail out.
	*/
	if( get_site_option( $option_name ) ) {
		return;
	}
	$row = $wpdb->get_row(
		$wpdb->prepare( "SELECT option_value FROM $wpdb->options WHERE option_name = %s LIMIT 1", $option_name )
	);

	$fixed = fix_serialized_string( $row->option_value );

	$fixed_data  = @unserialize( $fixed );

	update_site_option( $option_name, $fixed_data );
});