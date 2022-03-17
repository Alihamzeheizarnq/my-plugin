<?php
/*
Plugin Name: Subscribe
Plugin URI: https://alihamzehei.ir/
Description: this is a description
Version: 1.0.0
Author: alihamzehei
Author URI: https://alihamzehei.ir/
License: GPL
Text Domain: rtl_alihamzehei
*/


require __DIR__ . '/bootstrap.php';

class Subscribe {

	protected static $instance;

	public function __construct () {
		$this->getConstant();
		$this->register();
		$this->init();

	}

	/**
	 * @return void
	 */
	public function init () {
		register_activation_hook(__FILE__, [$this, 'subscribe_activation']);
		register_deactivation_hook(__FILE__, [$this, 'subscribe_deactivation']);
	}

	private function register () {
		if ( $this->is_request('admin') ) {
			new \App\Admin\Admin();
		}
	}

	/**
	 * @return void
	 */
	private function getConstant () {
		define('SUBSCRIBE_URL', plugin_dir_url(__FILE__));
		define('SUBSCRIBE_PATH', plugin_dir_path(__FILE__));
	}

	/**
	 * @param $type
	 *
	 * @return bool
	 */
	public function is_request (string $type) {
		switch ( $type ) {
			case 'admin';
				return is_admin();
			case 'ajax':
				return defined('DOING_AJAX');
			case 'frontend':
				return !is_admin();
		}
	}

	public function subscribe_activation () {

	}

	public function subscribe_deactivation () {

	}

	/**
	 * @return void
	 */
	public static function getInstance () {
		if ( self::$instance === null ) {
			self::$instance = new static;
		}
	}
}

Subscribe::getInstance();