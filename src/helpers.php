<?php
/**
 * Debug Functions File
 *
 * You may copy, distribute and modify the software as long as you track changes/dates in source files.
 * Any modifications to or software including (via compiler) GPL-licensed code must also be made
 * available under the GPL along with build & install instructions.
 *
 * @package    WPS\Functions
 * @author     Travis Smith <t@wpsmith.net>
 * @copyright  2015-2018 Travis Smith
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License v2
 * @link       https://github.com/wpsmith/WPS
 * @version    1.0.0
 * @since      0.1.0
 */

namespace WPS;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'WPS\write_log' ) ) {
	/**
	 * Writes to the debug.log.
	 *
	 * @param mixed  $log   Thing to be logged.
	 * @param string $title Title heading.
	 */
	function write_log( $log, $title = '' ) {
		Core\Debug::write_log( $log, $title );
	}
}

if ( ! function_exists( 'WPS\printr' ) ) {
	/**
	 * Pretty printer.
	 *
	 * @param mixed  $args Thing to be logged.
	 * @param string $name Title heading.
	 */
	function printr( $args, $name = '' ) {
		Core\Debug::write_log( $args, $name );
	}
}

if ( ! function_exists( 'WPS\wps_die' ) ) {
	/**
	 * Pretty printer & dies.
	 *
	 * @param mixed  $args Thing to be logged.
	 * @param string $name Title heading.
	 */
	function wps_die( $args, $name = '' ) {
		Core\Debug::wps_die( $args, $name );
	}
}
