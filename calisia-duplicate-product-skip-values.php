<?php
/**
 * Plugin Name: calisia-duplicate-product-skip-values
 * Author: Tomasz Boroń
 * Text Domain: calisia-duplicate-product-skip-values
 * Domain Path: /languages
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}
define('CALISIA_DUPLICATE_PRODUCT_SKIP_VALUES_ROOT', __DIR__);
define('CALISIA_DUPLICATE_PRODUCT_SKIP_VALUES_URL', plugin_dir_url( __FILE__ ));

add_action( 'woocommerce_product_duplicate_before_save', 'calisia_duplicate_product_skip_values::skip_values', 10, 2 ); 

class calisia_duplicate_product_skip_values{
    public static function skip_values( $duplicate, $product ) {

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }

        $duplicate->set_sku('');
        $duplicate->set_regular_price('');

    }
}



//add_action( 'wp_loaded', 'zxcc123'); 
/*
function zxcc123(){
    $product = wc_get_product( 81 );
    echo "<pre>";
    print_r(get_class_methods($product));
    echo "</pre>";
    //echo "BOOOOM!";
    die;
}*/