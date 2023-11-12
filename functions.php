<?php

if ( ! function_exists( 'blueprint_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Blueprint 1.0
	 *
	 * @return void
	 */
	function blueprint_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'blueprint_theme_support' );

/*----------------------------------------------------------------
Enqueue Styles
----------------------------------------------------------------*/
if ( ! function_exists( 'blueprint_styles' ) ) :

    // Register stylesheet
    function blueprint_styles() {

        wp_enqueue_style( 'blueprint-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
        wp_enqueue_style( 'blueprint-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style( 'tailwindcss_output', get_template_directory_uri() . '/dist/output.css', array() );

    }

endif;
add_action('wp_enqueue_scripts', 'blueprint_styles');

// add custom js script
function blueprint_custom_javascript() {
	$args = array(
		'strategy'  => 'defer',
	);

	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), false, $args);
}

add_action('wp_enqueue_scripts', 'blueprint_custom_javascript');