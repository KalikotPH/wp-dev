<?php
	/**
	 * Basically, all the logic happens here.
	 *
	 * @package uideck-evolo
	 * @since 0.1.0
	 */

     #region WP Recommendation - Prevent direct initilization of the plugin.
        if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly
        if ( ! function_exists( 'is_plugin_active' ) ) 
        {
            require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        }
    #endregion
?>

<?php

    //Theme customizer fields.
    include_once( "classes/class-customizer.php" );

    //Include theme mod here.
    include_once( "include/override/thememod.php" );

    //Include scripts that is needed js and css.
    function uid_plugin_frontend_enqueue()
    {    
        wp_enqueue_style('uid_google_fonts', 
            'https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext',
            false
        );

        wp_enqueue_style('uid_bootstrap_css', 
            get_template_directory_uri() . '/assets/css/bootstrap.css', 
            array(), 
            false
        );

        wp_enqueue_style('uid_fontawesome_css', 
            get_template_directory_uri() . '/assets/css/fontawesome-all.css', 
            array(), 
            false
        );

        wp_enqueue_style('uid_swiper_css', 
            get_template_directory_uri() . '/assets/css/swiper.css', 
            array(), 
            false
        );

        wp_enqueue_style('uid_magnific_css', 
            get_template_directory_uri() . '/assets/css/magnific-popup.css', 
            array(), 
            false
        );

        wp_enqueue_style( "uid_styles_css", get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'uid_plugin_frontend_enqueue' );

    //Sideabr widget.
    function uid_register_sidebars() {
        register_sidebar(
            array(
                'id'            => 'primary',
                'name'          => __( 'Primary Sidebar' ),
                'description'   => __( 'Put all content that you want to show in this site wide sidebar.' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }
    add_action( 'widgets_init', 'uid_register_sidebars' );

    function my_filter_head() {
        // show admin bar only for admins and editors. 
        // if admin only, use: manage_options
        // if (!current_user_can('edit_posts')) {
        //     add_filter('show_admin_bar', '__return_false');
        //     remove_action('wp_head', '_admin_bar_bump_cb');
        // }

        // Simply check, whoever the user is and is not currently on admin?
        // Then, dont display WordPress topbar.
        if ( ! is_admin() ) {
            add_filter('show_admin_bar', '__return_false');
            remove_action('wp_head', '_admin_bar_bump_cb');
        }
    } add_action('get_header', 'my_filter_head');