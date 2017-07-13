<?php
/*
	Plugin Name: WooCommerce Oca Shipping
	Plugin URI: http://wanderlust-webdesign.com/
	Description: Obtain shipping rates dynamically via the oca API for your orders.
	Version: 0.7.2
	Author: Wanderlust Web Design
	Author URI: http://wanderlust-webdesign.com

	Copyright: 2007-2015 wanderlust-webdesign.com.
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

/**
 * Required functions
 */
require_once( 'includes/wanderlust-functions.php' );

/**
 * Plugin page links
 */
function wc_oca_plugin_links( $links ) {

	$plugin_links = array(
		'<a href="http://wanderlust-webdesign.com/">' . __( 'Soporte', 'woocommerce-shipping-oca' ) . '</a>',
	);

	return array_merge( $plugin_links, $links );
}

add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wc_oca_plugin_links' );

/**
 * WooCommerce is active
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	/**
	 * woocommerce_init_shipping_table_rate function.
	 *
	 * @access public
	 * @return void
	 */
	function wc_oca_init() {
		include_once( 'includes/class-wc-shipping-oca.php' );
	}

	add_action( 'woocommerce_shipping_init', 'wc_oca_init' );

	/**
	 * wc_oca_add_method function.
	 *
	 * @access public
	 * @param mixed $methods
	 * @return void
	 */
	function wc_oca_add_method( $methods ) {
		$methods[] = 'WC_Shipping_Oca';
		return $methods;
	}

	add_filter( 'woocommerce_shipping_methods', 'wc_oca_add_method' );

	/**
	 * wc_oca_scripts function.
	 */
	function wc_oca_scripts() {
		wp_enqueue_script( 'jquery-ui-sortable' );
	}

	add_action( 'admin_enqueue_scripts', 'wc_oca_scripts' );

	//Only Numbers
		add_action( 'wp_footer', 'only_numbers_oca', 100 );
		function only_numbers_oca(){  ?>
			<script type="text/javascript">
				jQuery(document).ready(function () {
					jQuery('#calc_shipping_postcode').attr({ maxLength : 4 });
					jQuery('#billing_postcode').attr({ maxLength : 4 });
					jQuery('#shipping_postcode').attr({ maxLength : 4 });

			         jQuery("#calc_shipping_postcode").keypress(function (e) {
			          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			          	return false;
			          }
			        });
			        jQuery("#billing_postcode").keypress(function (e) { 
			          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) { 
			          return false;
			          }
			        });
			        jQuery("#shipping_postcode").keypress(function (e) {  
			          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			          return false;
			          }
			        });
				});
			</script>
		 
 		<?php }

	$oca_settings = get_option( 'woocommerce_oca_settings', array() );
	
}