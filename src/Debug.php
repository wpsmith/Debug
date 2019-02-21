<?php

namespace WPS\WP;

use WPS\Core\Singleton;

use WPS;


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( __NAMESPACE__ . '\Debug' ) ) {
	/**
	 * Class Debug
	 *
	 * @package WPS\Core
	 */
	class Debug extends Singleton {

		/**
		 * Writes to the debug.log.
		 *
		 * @param mixed  $log   Thing to be logged.
		 * @param string $title Title heading.
		 */
		public static function write_log( $log, $title = '' ) {
			if ( $title ) {
				$title .= ': ';
			}
			if ( is_array( $log ) || is_object( $log ) ) {
				error_log( $title . print_r( $log, true ) );
			} else {
				error_log( $title . $log );
			}
		}

		/**
		 * Pretty printer.
		 *
		 * @param mixed  $args Thing to be logged.
		 * @param string $name Title heading.
		 */
		public static function printr( $args, $name = '' ) {
			if ( apply_filters( 'debug_off', false ) ) {
				return;
			}
			if ( is_string( $name ) && '' != $name ) {
				echo '<strong>' . $name . '</strong><br/>';
			}
			echo '<pre>', htmlspecialchars( print_r( $args, true ) ), "</pre>\n";
		}

		/**
		 * Pretty printer & dies.
		 *
		 * @param mixed  $args Thing to be logged.
		 * @param string $name Title heading.
		 */
		public static function wps_die( $args, $name = '' ) {

			self::printr( $args, $name );
			wp_die();

		}

	}
}