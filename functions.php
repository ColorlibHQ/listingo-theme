<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'LISTINGO_DIR_URI' ) ) {
	define( 'LISTINGO_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'LISTINGO_DIR_ASSETS_URI' ) ) {
	define( 'LISTINGO_DIR_ASSETS_URI', LISTINGO_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'LISTINGO_DIR_CSS_URI' ) ) {
	define( 'LISTINGO_DIR_CSS_URI', LISTINGO_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'LISTINGO_DIR_JS_URI' ) ) {
	define( 'LISTINGO_DIR_JS_URI', LISTINGO_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'LISTINGO_DIR_IMGS_URI' ) ) {
	define( 'LISTINGO_DIR_IMGS_URI', LISTINGO_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'LISTINGO_DIR_ICON_IMG_URI' ) ) {
	define( 'LISTINGO_DIR_ICON_IMG_URI', LISTINGO_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'LISTINGO_DIR_PATH' ) ) {
	define( 'LISTINGO_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'LISTINGO_DIR_PATH_INC' ) ) {
	define( 'LISTINGO_DIR_PATH_INC', LISTINGO_DIR_PATH . 'inc/' );
}

//Listingo Libraries Folder Directory
if ( ! defined( 'LISTINGO_DIR_PATH_LIBS' ) ) {
	define( 'LISTINGO_DIR_PATH_LIBS', LISTINGO_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'LISTINGO_DIR_PATH_CLASSES' ) ) {
	define( 'LISTINGO_DIR_PATH_CLASSES', LISTINGO_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'LISTINGO_DIR_PATH_HOOKS' ) ) {
	define( 'LISTINGO_DIR_PATH_HOOKS', LISTINGO_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function listingo_admin_script(){
    wp_enqueue_style( 'listingo-admin', get_template_directory_uri().'/assets/css/listingo-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'listingo_admin', get_template_directory_uri().'/assets/js/listingo-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'listingo_admin_script' );



/**
 * Include File
 *
 */
require_once( LISTINGO_DIR_PATH_INC . 'listingo-breadcrumbs.php' );
require_once( LISTINGO_DIR_PATH_INC . 'listingo-widgets-reg.php' );
require_once( LISTINGO_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( LISTINGO_DIR_PATH_INC . 'post-like.php' );
require_once( LISTINGO_DIR_PATH_INC . 'listingo-functions.php' );
require_once( LISTINGO_DIR_PATH_INC . 'listingo-commoncss.php' );
require_once( LISTINGO_DIR_PATH_INC . 'support-functions.php' );
require_once( LISTINGO_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( LISTINGO_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( LISTINGO_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( LISTINGO_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( LISTINGO_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( LISTINGO_DIR_PATH_HOOKS . 'hooks.php' );
require_once( LISTINGO_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( LISTINGO_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( LISTINGO_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Listingo object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Listingo = new Listingo();