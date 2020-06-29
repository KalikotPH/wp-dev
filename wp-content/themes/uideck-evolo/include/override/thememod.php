<?php
    /**
    * Theme Core - Theme Mod
    *
    * @package uideck-evolo
    * @since 0.1.0
    */
?>

<?php

    //Return a string of home url, if not exist use default.
    function getSingleMenuItem($redirect) {
        $tarField = $redirect;
        if( !is_front_page() ) {
            $tarField = home_url() . "/" . $redirect;
        }
        echo $tarField;
    }

    //Get avatar default if not set by id.
    function getAvatarImage( $userId ) {   
        $avatar_image_url = get_avatar_url($userId, array('size' => 120));

        if ( strpos($avatar_image_url, 'www.gravatar.com/avatar/') !== false ) {
            $avatar_image_url = get_template_directory_uri()."/assets/img/blog/author.png"; 
        }

        $avatar_image_url = str_replace(home_url(), '', $avatar_image_url);

        echo $avatar_image_url;
    }

    //Get featured image of a post by id.
    function getFeaturedImage( $postId, $sizeGroup ) {   
        $returningImage = get_template_directory_uri()."/assets/img/blog/img1.jpg"; 

        if ( $postId != '' ) {
            if ( has_post_thumbnail( $postId ) ) {
                $imageAttachment = wp_get_attachment_image_src( get_post_thumbnail_id( $postId ), $sizeGroup );
                if( !empty($imageAttachment) ) {
                    $returningImage = $imageAttachment[0];
                }
            }
        }

        echo $returningImage;
    }

    //Return a string of theme mod, if not exist use default.
    function getThemeField($key, $default) {
        $tarField = get_theme_mod( $key );
        if( empty($tarField) ) {
            $tarField = $default;
        }
        return $tarField;
    }

    //Get custom logo of a post by id.
    // add_image_size('featured', 370, 240, true); on function theme support.
    function getCustomLogo() {   
        $returningImage = get_template_directory_uri()."/assets/images/logo.png"; 

        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'header-icon-size' );
        if( !empty($image) ) {
            $returningImage = $image[0];
        }

        echo $returningImage;
    }

    function ps_register_sidebars() {
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
    add_action( 'widgets_init', 'ps_register_sidebars' );
    