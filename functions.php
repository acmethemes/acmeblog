<?php
/**
 * AcmeBlog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage AcmeBlog
 */


/**
 *  Default Theme layout options
 *
 * @since AcmeBlog 1.0.0
 *
 * @param null
 * @return array $acmeblog_theme_layout
 */
if ( ! function_exists( 'acmeblog_get_default_theme_options' ) ) :
	function acmeblog_get_default_theme_options() {

		$default_theme_options = array(
			/*feature section options*/
			'acmeblog-feature-cat'                      => 0,
			'acmeblog-feature-post-one'                 => -1,
			'acmeblog-feature-post-two'                 => -1,
			'acmeblog-enable-feature'                   => '',
			'acmeblog-feature-slider-read-more'         => __( 'Read More', 'acmeblog' ),
			'acmeblog-feature-slider-post-number'       => 5,

			/*header options*/
			'acmeblog-header-logo'                      => '',
			'acmeblog-header-id-display-opt'            => 'title-and-tagline',
			'acmeblog-show-date'                        => 1,
			'acmeblog-facebook-url'                     => '',
			'acmeblog-twitter-url'                      => '',
			'acmeblog-youtube-url'                      => '',
			'acmeblog-instagram-url'                    => '',
			'acmeblog-pinterest-url'                    => '',
			'acmeblog-google-plus-url'                  => '',
			'acmeblog-enable-social'                    => '',
			'acmeblog-menu-show-search'                 => 1,

			/*footer options*/
			'acmeblog-footer-copyright'                 => __( 'AcmeThemes &copy; 2015', 'acmeblog' ),

			/*layout/design options*/
			'acmeblog-default-layout'                   => 'boxed',

			'acmeblog-sidebar-layout'                   => 'right-sidebar',
			'acmeblog-front-page-sidebar-layout'        => 'right-sidebar',
			'acmeblog-archive-sidebar-layout'           => 'right-sidebar',

			'acmeblog-enable-sticky-sidebar'            => '',
			'acmeblog-blog-archive-layout'              => 'large-image',
			'acmeblog-blog-archive-image-size'          => 'full',
			'acmeblog-primary-color'                    => '#66CCFF',
			'acmeblog-custom-css'                       => '',

			/*single related post options*/
			'acmeblog-show-related'                     => 1,
			'acmeblog-related-title'                    => __( 'Related posts', 'acmeblog' ),
			'acmeblog-single-post-layout'               => 'large-image',
			'acmeblog-single-image-size'                => 'full',

			/*theme options*/
			'acmeblog-search-placholder'                => __( 'Search', 'acmeblog' ),
			'acmeblog-show-breadcrumb'                  => '',
			'acmeblog-you-are-here-text'                => __( 'You are here', 'acmeblog' ),

			/*woocommerce*/
			'acmeblog-wc-shop-archive-sidebar-layout'   => 'no-sidebar',
			'acmeblog-wc-product-column-number'         => 4,
			'acmeblog-wc-shop-archive-total-product'    => 16,
			'acmeblog-wc-single-product-sidebar-layout' => 'no-sidebar',
		);
		return apply_filters( 'acmeblog_default_theme_options', $default_theme_options );
	}
endif;


if ( ! function_exists( 'acmeblog_get_theme_options' ) ) :

	/**
	 *  Get theme options
	 *
	 * @since AcmeBlog 1.0.0
	 *
	 * @return array acmeblog_theme_options
	 */
	function acmeblog_get_theme_options() {
		static $cached_theme_options = null;

		// Skip cache in Customizer preview.
		if ( null !== $cached_theme_options && ! is_customize_preview() ) {
			return $cached_theme_options;
		}

		$acmeblog_default_theme_options = acmeblog_get_default_theme_options();
		$acmeblog_get_theme_options     = get_theme_mod( 'acmeblog_theme_options' );

		if ( is_array( $acmeblog_get_theme_options ) ) {
			$cached_theme_options = array_merge( $acmeblog_default_theme_options, $acmeblog_get_theme_options );
		} else {
			$cached_theme_options = $acmeblog_default_theme_options;
		}

		return $cached_theme_options;
	}

endif;

/**
 * require int.
 */
require_once trailingslashit( get_template_directory() ) . 'acmethemes/init.php';
