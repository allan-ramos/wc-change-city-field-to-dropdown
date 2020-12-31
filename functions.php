<?php

// Change city text field to dropdown
function allan_change_city_to_dropdown( $fields ) {

	$city_args = wp_parse_args( array(
		'type' => 'select',
		'options' => array(
			'Seleccione' => 'Seleccione'
		),
	), $fields['shipping']['shipping_city'] );

	$fields['shipping']['shipping_city'] = $city_args;
	$fields['billing']['billing_city'] = $city_args; 
	$fields['billing']['billing_city']['priority'] = 80;

	return $fields;

}
add_filter( 'woocommerce_checkout_fields', 'allan_change_city_to_dropdown' );



// Add extra custom field to checkout
function add_extra_field_to_checkout( $fields ) {

	$depto_args = wp_parse_args( array(
		'type' => 'select',
		'options' => array(
			'Seleccione' => 'Seleccione',
			'Francisco Morazan' => 'Francisco Morazan',
			'Olancho' => 'Olancho',
			'Valle' => 'Valle',
		),
	), $fields['shipping']['shipping_depto'] );

	$fields['shipping']['shipping_depto'] = $depto_args;
	$fields['billing']['billing_depto'] = $depto_args; 
	$fields['billing']['billing_depto']['priority'] = 80;

	return $fields;

}
add_filter( 'woocommerce_checkout_fields', 'add_extra_field_to_checkout' );

?>
