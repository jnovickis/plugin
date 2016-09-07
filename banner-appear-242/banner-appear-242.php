	<?php
/**
	* Plugin Name: Banner Appear 242
*/



class BannerShortcode {
	public function __construct() {
		add_action('init', [$this, 'register_stylesheets']);
		add_action('wp_enqueue_scripts', 'wp_banner_styles');
		add_shortcode('banner','wp_banner_shortcode');
	}

	public function register_stylesheets() {
		wp_register_style(
			'wpdocsPluginStylsheet', 
			plugins_url('css/stylesheet.css', __FILE__)
		);
	}
}





function wp_banner_stylesheet_init () {

	

}



function wp_banner_styles(){
	wp_enqueue_style('wpdocsPluginStylsheet');

}

	function wp_banner_shortcode( $atts ) {

		$output='';


		$wp_banner_atts = shortcode_atts( array(
				'before'=> 'My before',
				'text' => 'My text',
				'after' => 'My after',
			), $atts );

			$output .= $wp_banner_atts['before'];
			$output .= '<div class="banner">';
			$output .= $wp_banner_atts ['text'];	
			$output .= '</div>';
			$output .=  $wp_banner_atts['after'];

		return $output;
	}

	
