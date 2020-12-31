<?php


function allan_change_city_to_dropdown( $fields ) {

	$city_args = wp_parse_args( array(
		'type' => 'select',
		'options' => array(
			'Seleccione' => 'Seleccione',
      'Ciudad 1' => 'Ciudad 1',
      'Ciudad 2' => 'Ciudad 2',
		),
	), $fields['shipping']['shipping_city'] );

	$fields['shipping']['shipping_city'] = $city_args;
	$fields['billing']['billing_city'] = $city_args; 
	$fields['billing']['billing_city']['priority'] = 80;

	return $fields;

}
add_filter( 'woocommerce_checkout_fields', 'allan_change_city_to_dropdown' );

?>
