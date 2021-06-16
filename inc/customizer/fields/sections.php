<?php 
/**
 * @Packge     : Listingo
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'listingo_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'listingo' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'listingo_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'listingo' ),
            'panel'    => 'listingo_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'listingo_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'listingo' ),
            'panel'    => 'listingo_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'listingo_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'listingo' ),
            'panel'    => 'listingo_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'listingo_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'listingo' ),
            'panel'    => 'listingo_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'listingo_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'listingo' ),
            'panel'    => 'listingo_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'listingo_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'listingo' ),
            'panel'    => 'listingo_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'listingo_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'listingo' ),
            'panel'    => 'listingo_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'listingo_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'listingo' ),
            'panel'    => 'listingo_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>