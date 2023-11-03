<?php
/*
 * Plugin Name: Insurance Form For Wordpress
 * Plugin URI: https://www.arrowhitech.com/
 * Description: add payment gateway for woocommerce.
 * Version: 1.0.0
 * Author URI: https://www.arrowhitech.com/
 * Author: AHT
 * Copyright 2023-2024 AHT. All rights reserved.
 * Tested up to: 6.2.2
 * WC requires at least: 6.0
 * WC tested up to: 7.8.0
 * Requires PHP: 8.0
 */

defined('ABSPATH') || exit;

define('INSURANCE_CONST', [
    'version' => '1.0.0',
    'plugin_name' => 'Insurance',
    'slug' => 'ifw',
    'assets_slug' => 'ifw-',
    'file' => __FILE__,
    'basename' => plugin_basename(__FILE__),
    'plugin_dir' => plugin_dir_path(__FILE__),
    'js_url' => plugins_url('js/', __FILE__),
    'css_url' => plugins_url('css/', __FILE__),
    'img_url' => plugins_url('img/', __FILE__),
]);


require(INSURANCE_CONST['plugin_dir'] . 'includes/define.php');
if (!class_exists('IFW_CLASS_INSURANCE_FOR_WP')) {
    class IFW_INSURANCE_FOR_WP
    {
        protected $checker;
        public function __construct()
        {

            // TODO install setting page data
            // register_activation_hook( __FILE__, array( $this, 'install' ) );
            // TODO create default template
            // public function default_template()

            add_action('plugins_loaded', [$this, 'plugins_loaded'], 20);
            add_action('admin_notices', [$this, 'plugin_require_notice']);
        }
        public function plugins_loaded()
        {
            $this->checker = new \WP_Error();
            global $wp_version;
            $php_require = '7.0';
            $wp_require  = '5.0';
            if (version_compare(phpversion(), $php_require, '<')) {
                $this->checker->add('', sprintf('%s %s', esc_html__('require PHP version at least'), $php_require));
            }
            if (version_compare($wp_version, $wp_require, '<')) {
                $this->checker->add('', sprintf('%s %s', esc_html__('require WordPress version at least'), $wp_require));
            }
            if ($this->checker->has_errors()) {
                return;
            }
        }
        public function plugin_require_notice()
        {
            if (!$this->checker instanceof \WP_Error || !$this->checker->has_errors()) {
                return;
            }

            $messages = $this->checker->get_error_messages();
            foreach ($messages as $message) {
                echo sprintf("<div id='message' class='error'><p>%s %s</p></div>", esc_html(INSURANCE_CONST['plugin_name']), wp_kses_post($message));
            }
        }
    }
    new IFW_INSURANCE_FOR_WP();
}
