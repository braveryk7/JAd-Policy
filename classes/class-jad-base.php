<?php
/**
 * JAd Console base class.
 *
 * @author Ken-chan
 * @package WordPress
 * @subpackage JAd Console
 * @since 0.0.1
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'You do not have access rights.' );
}

/**
 * JAd Console base class.
 */
class Jad_Base {
	protected const PREFIX      = 'jad';
	protected const PLUGIN_SLUG = 'jad-console';
	protected const PLUGIN_NAME = 'JAd Console';
	protected const PLUGIN_FILE = self::PLUGIN_SLUG . '.php';
	protected const API_NAME    = self::PLUGIN_SLUG;
	protected const API_VERSION = 'v1';
	protected const VERSION     = '0.0.1';

	/**
	 * Return add prefix.
	 *
	 * @param string $value After prefix value.
	 */
	public static function add_prefix( string $value ): string {
		return self::PREFIX . '_' . $value;
	}

	/**
	 * Return plugin name.
	 * e.g. JAd Console
	 */
	public static function get_plugin_name(): string {
		return self::PLUGIN_NAME;
	}

	/**
	 * Return plugin url.
	 * e.g. https://expamle.com/wp-content/plugins/jad-console
	 *
	 * @param string $plugin_name Plugin name.
	 */
	protected function get_plugin_url( string $plugin_name ): string {
		return WP_PLUGIN_URL . '/' . $plugin_name;
	}

	/**
	 * Return plugin directory.
	 * e.g. /DocumentRoot/wp-content/plugins/jad-console
	 *
	 * @param string $plugin_name Plugin name.
	 */
	protected function get_plugin_dir( string $plugin_name ): string {
		return WP_PLUGIN_DIR . '/' . $plugin_name;
	}

	/**
	 * Return plugin file path.
	 * e.g. /DocumentRoot/wp-content/plugins/jad-console/jad-console.php
	 */
	protected function get_plugin_path(): string {
		return $this->get_plugin_dir( self::PLUGIN_SLUG ) . '/' . self::PLUGIN_FILE;
	}

	/**
	 * Return WP-API parameter.
	 * e.g. jad-console/v1
	 *
	 * @param string $api_name    Plugin unique name.
	 * @param string $api_version Plugin API version.
	 */
	protected function get_api_namespace( string $api_name = self::API_NAME, string $api_version = self::API_VERSION ): string {
		return "{$api_name}/{$api_version}";
	}

	/**
	 * Output browser console.
	 * WARNING: Use debag only!
	 *
	 * @param mixed $value Output data.
	 */
	protected function console( mixed $value ): void {
		echo '<script>console.log(' . wp_json_encode( $value ) . ');</script>';
	}
}