<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'listingo_preloader', 'listingo_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'listingo_header', 'listingo_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'listingo_footer', 'listingo_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'listingo_wrp_start', 'listingo_wrp_start_cb', 10 );
	add_action( 'listingo_wrp_end', 'listingo_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'listingo_blog_col_start', 'listingo_blog_col_start_cb', 10 );
	add_action( 'listingo_blog_col_end', 'listingo_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'listingo_blog_posts_thumb', 'listingo_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'listingo_blog_details_wrap_start', 'listingo_blog_details_wrap_start_cb', 10 );
	add_action( 'listingo_blog_details_wrap_end', 'listingo_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'listingo_blog_posts_title', 'listingo_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'listingo_blog_posts_meta', 'listingo_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'listingo_blog_posts_excerpt', 'listingo_blog_posts_excerpt_cb', 10 );
	// add_action( 'listingo_blog_posts_excerpt', 'listingo_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'listingo_blog_posts_info_link', 'listingo_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'listingo_blog_posts_content', 'listingo_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'listingo_blog_posts_share', 'listingo_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'listingo_blog_sidebar', 'listingo_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'listingo_blog_single_meta', 'listingo_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'listingo_page_content', 'listingo_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'listingo_fof', 'listingo_fof_cb', 10 );

	

?>