<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Gdpr_Cookie_Consent_Customized
 * @subpackage Gdpr_Cookie_Consent_Customized/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Gdpr_Cookie_Consent_Customized
 * @subpackage Gdpr_Cookie_Consent_Customized/admin
 * @author     Your Name <email@example.com>
 */
class Gdpr_Cookie_Consent_Customized_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $gdpr_cookie_consent_customized    The ID of this plugin.
	 */
	private $gdpr_cookie_consent_customized;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $gdpr_cookie_consent_customized       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $gdpr_cookie_consent_customized, $version ) {

		$this->gdpr_cookie_consent_customized = $gdpr_cookie_consent_customized;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gdpr_Cookie_Consent_Customized_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gdpr_Cookie_Consent_Customized_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->gdpr_cookie_consent_customized, plugin_dir_url( __FILE__ ) . 'css/gdpr-cookie-consent-customized-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gdpr_Cookie_Consent_Customized_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gdpr_Cookie_Consent_Customized_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->gdpr_cookie_consent_customized, plugin_dir_url( __FILE__ ) . 'js/gdpr-cookie-consent-customized-admin.js', array( 'jquery' ), $this->version, false );

	}

}
