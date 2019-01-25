<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'orangecooltheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function orangecooltheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'orangecooltheme' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
	the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
	the_post_thumbnail('medium_large');    // Medium Large resolution (default 768px x 0px max)
	the_post_thumbnail('large');           // Large resolution (default 1024px x 1024px max)
	the_post_thumbnail('full');            // Original image resolution (unmodified)
	set_post_thumbnail_size( 401, 401 );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'orangecooltheme_setup' );

if ( ! function_exists( 'orangecooltheme_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function orangecooltheme_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Abril Fatface font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Abril Fatface';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Arvo font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Arvo';
	}

	if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Playfair Display:700';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function orangecooltheme_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'orangecooltheme_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function orangecooltheme_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'orangecooltheme-fonts', orangecooltheme_fonts_url(), array(), null );

	// Theme stylesheet.
	//wp_enqueue_style( 'orangecooltheme-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'search-bar', get_template_directory_uri() . '/css/search-bar.css');
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css');
	wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css');

	wp_enqueue_script( 'jquery-3.3.1.min', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array ( 'jquery' ), '3.3.1', true);
	wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ), '1.1', true);
	wp_enqueue_script( 'masonry.pkgd.min', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array ( 'jquery' ), '4.2.2', true);
	wp_enqueue_script( 'isotope.pkgd.min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array ( 'jquery' ), '3.0.6', true);
	wp_enqueue_script( 'infinite-scroll.pkgd.min', get_template_directory_uri() . '/js/infinite-scroll.pkgd.min.js', array ( 'jquery' ), '3.0.5', true);
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), '1.1', true);
	wp_enqueue_script( 'teste', get_template_directory_uri() . '/js/teste.js', array ( 'jquery' ), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'orangecooltheme_scripts' );

function isotope_category($thelist){
  $categories = get_the_category();

  if ( !$categories || is_wp_error($categories) ) {
    return $thelist;
  }

  foreach ($categories as $category ) {
    $output .= '<a class="mr-1 badge cat-badge-link category-' . $category->slug . '" href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a>';
  }

  return $output;
}
add_filter('the_category', 'isotope_category');

?>