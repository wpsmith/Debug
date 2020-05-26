<?php
/**
 * Debug Functions File
 *
 * You may copy, distribute and modify the software as long as you track changes/dates in source files.
 * Any modifications to or software including (via compiler) GPL-licensed code must also be made
 * available under the GPL along with build & install instructions.
 *
 * @package    WPS\WP\Functions
 * @author     Travis Smith <t@wpsmith.net>
 * @copyright  2015-2020 Travis Smith
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License v2
 * @link       https://github.com/wpsmith/WPS
 * @version    1.0.0
 * @since      0.1.0
 */

namespace WPS\WP;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( __NAMESPACE__ . '\write_log' ) ) {
	/**
	 * Writes to the debug.log.
	 *
	 * @param mixed  $log   Thing to be logged.
	 * @param string $title Title heading.
	 */
	function write_log( $log, $title = '' ) {
		Debug::write_log( $log, $title );
	}
}

if ( ! function_exists( __NAMESPACE__ . '\printr' ) ) {
	/**
	 * Pretty printer.
	 *
	 * @param mixed  $args Thing to be logged.
	 * @param string $name Title heading.
	 */
	function printr( $args, $name = '' ) {
		Debug::printr( $args, $name );
	}
}

if ( ! function_exists( __NAMESPACE__ . '\wps_die' ) ) {
	/**
	 * Pretty printer & dies.
	 *
	 * @param mixed  $args Thing to be logged.
	 * @param string $name Title heading.
	 */
	function wps_die( $args, $name = '' ) {
		Debug::wps_die( $args, $name );
	}
}
