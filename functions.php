<?php
/**
 * Custom functionality required by your child theme can go here. Use this
 * to override any defaults provided by the Spine parent theme through
 * the provided actions and filters.
 */

	add_action( 'wp_enqueue_scripts', 'vals_enqueue_scripts' );
	/**
	* Enqueue custom scripting in child theme.
	*/
function vals_enqueue_scripts() {
	wp_enqueue_script( 'vals-custom', get_stylesheet_directory_uri() . '/js/fontfamily.js', array( 'jquery' ), spine_get_script_version(), true );

}

add_filter( 'spine_get_campus_home_url', 'vals_logo_link_url' );
/**
 * Filter the Spine signature URL.
 */
function vals_logo_link_url() {
	return 'https://valsprogram.org/';
}

add_filter( 'spine_get_campus_data', 'vals_logo_link_text' );
/**
 * Filter the Spine signature link text.
 */
function vals_logo_link_text() {
	return 'Veterinary Assessment of Laparoscopic Skills';
}
