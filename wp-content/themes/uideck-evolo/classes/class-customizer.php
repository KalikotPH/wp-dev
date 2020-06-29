<?php
	/**
	 * Customizer script.
	 *
	 * @package uideck-evolo
	 * @since 0.1.0
	 */
?>

<?php

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function uideck_evolo_theme_support() {

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Custom background color.
        add_theme_support(
            'custom-background',
            array(
                'default-color' => '#fff',
            )
        );

        // Set content-width.
        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 580;
        }

        // aside – Typically styled without a title. Similar to a Facebook note update.
        // gallery – A gallery of images. Post will likely contain a gallery shortcode and will have image attachments.
        // link – A link to another site. Themes may wish to use the first <a href=””> tag in the post content as the external link for that post. An alternative approach could be if the post consists only of a URL, then that will be the URL and the title (post_title) will be the name attached to the anchor for it.
        // image – A single image. The first <img /> tag in the post could be considered the image. Alternatively, if the post consists only of a URL, that will be the image URL and the title of the post (post_title) will be the title attribute for the image.
        // quote – A quotation. Probably will contain a blockquote holding the quote content. Alternatively, the quote may be just the content, with the source/author being the title.
        // status – A short status update, similar to a Twitter status update.
        // video – A single video or video playlist. The first <video /> tag or object/embed in the post content could be considered the video. Alternatively, if the post consists only of a URL, that will be the video URL. May also contain the video as an attachment to the post, if video support is enabled on the blog (like via a plugin).
        // audio – An audio file or playlist. Could be used for Podcasting.
        // chat – A chat transcript, like so:
        add_theme_support( 'post-formats', array( 'status', 'image', 'gallery' ) );

        /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support( 'post-thumbnails' );

        // Set post thumbnail size.
        set_post_thumbnail_size( 1200, 9999 );

        // Add custom image size used in Cover Template.
        add_image_size( 'header-icon-size', 163, 50 );

        // Add custom image size used in Blog list blocks.
        add_image_size( 'blog-list-thumbnail', 360, 230 );

        // Add custom image size used in avatar display.
        add_image_size( 'user-avatar-size', 120, 120 );

        // Custom logo.
        $logo_width  = 120;
        $logo_height = 90;

        // If the retina setting is active, double the recommended width and height.
        if ( get_theme_mod( 'retina_logo', false ) ) {
            $logo_width  = floor( $logo_width * 2 );
            $logo_height = floor( $logo_height * 2 );
        }

        add_theme_support(
            'custom-logo',
            array(
                'height'      => $logo_height,
                'width'       => $logo_width,
                'flex-height' => true,
                'flex-width'  => true,
            )
        );

        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support( 'title-tag' );

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            )
        );

        /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on Twenty Twenty, use a find and replace
        * to change 'twentytwenty' to the name of your theme in all the template files.
        */
        load_theme_textdomain( 'uideck-evolo' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for responsive embeds.
        add_theme_support( 'responsive-embeds' );

        /*
        * Adds starter content to highlight the theme on fresh sites.
        * This is done conditionally to avoid loading the starter content on every
        * page load, as it is a one-off operation only needed once in the customizer.
        */
        // if ( is_customize_preview() ) {
        //     require get_template_directory() . '/inc/starter-content.php';
        //     add_theme_support( 'starter-content', twentytwenty_get_starter_content() );
        // }

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
    add_action( 'after_setup_theme', 'uideck_evolo_theme_support' );

    //adding setting for Footer text
    function social_link_customizer($wp_customize) {

        //adding section in wordpress customizer   
        $wp_customize->add_section('social_links_section', array(
            'title' => 'Social Links'
        ));

        //adding setting facebook
        $wp_customize->add_setting('social_fb', array(
            'default'        => 'https://www.facebook.com',
            'transport' => 'refresh',
        )); $wp_customize->add_control('social_fb', array(
            'label'   => 'Facebook',
            'section' => 'social_links_section',
            'type'    => 'text',
            'description' => __('Put Facebook page url here: {social_fb}', 'facebook' ),
            'input_attrs' => array(
                'placeholder' => __( 'https://www.facebook.com/BytesCrafterPH', 'facebook' ),
            )
        ));

        //adding setting twitter
        $wp_customize->add_setting('social_tw', array(
            'default'        => 'https://www.twitter.com',
            'transport' => 'refresh',
        )); $wp_customize->add_control('social_tw', array(
            'label'   => 'Twitter',
            'section' => 'social_links_section',
            'type'    => 'text',
            'description' => __('Put Twitter account url here: {social_tw}', 'twitter' ),
            'input_attrs' => array(
                'placeholder' => __( 'https://twitter.com/BytesCrafter', 'twitter' ),
            )
        ));

        //adding setting youtube
        $wp_customize->add_setting('social_yt', array(
            'default'        => 'https://www.youtube.com',
            'transport' => 'refresh',
        )); $wp_customize->add_control('social_yt', array(
            'label'   => 'YouTube',
            'section' => 'social_links_section',
            'type'    => 'text',
            'description' => __('Put your YouTube channel here: {social_yt}', 'youtube' ),
            'input_attrs' => array(
                'placeholder' => __( 'https://www.youtube.com/channel/UCHXZUImmr9aSKmYpKXqN9vQ', 'youtube' ),
            )

        ));

        //adding setting linkedin
        $wp_customize->add_setting('social_li', array(
            'default'        => 'https://www.linkedin.com',
            'transport' => 'refresh',
        )); $wp_customize->add_control('social_li', array(
            'label'   => 'Linkedin',
            'section' => 'social_links_section',
            'type'    => 'text',
            'description' => __('Put your LinkedIn profile here: {social_li}', 'linkedin' ),
            'input_attrs' => array(
                'placeholder' => __( 'https://play.google.com/store/apps/dev?id=5394145917362507576', 'linkedin' ),
            )

        ));

    } add_action('customize_register', 'social_link_customizer');