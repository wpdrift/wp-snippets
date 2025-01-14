<?php
/**
* Snippet Name:	Remove the Order Notes field section from the WooCommerce checkout.
*/
add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );
add_filter( 'woocommerce_checkout_fields' , 'remove_order_notes' );
function remove_order_notes( $fields ) {
	unset($fields['order']['order_comments']);
	return $fields;
}