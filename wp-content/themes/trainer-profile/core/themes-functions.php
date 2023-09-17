<?php

    /**
     * Script custom import function
     *
     * @return void
     */
    function custom_scripts() {
        // Splide slider
        wp_enqueue_script('Splide-script', get_theme_file_uri('/asset/splide/splide.min.js'), array('jquery'), '1.0', true);
        
        // Index.js
        wp_enqueue_script('home-script', get_theme_file_uri('/dist/js/index.js'), array('jquery'), '1.0', true);
    }

    /**
     * Add script action
     */
    add_action('after_setup_theme', 'custom_scripts');

    /**
     * Css custom import function
     *
     * @return void
     */
    function enqueue_custom_styles() {
        // Main css
        wp_enqueue_style('main-style', get_theme_file_uri('/dist/css/style.css'), array(), '1.0', 'all');

        // Font-awesome css
        wp_enqueue_style('font-awesome', get_theme_file_uri('/asset/font-awesome/css/all.min.css'), array(), '1.0', 'all');

        // Splide css
        wp_enqueue_style('splide-slide', get_theme_file_uri('/asset/splide/splide.min.css'), array(), '1.0', 'all');
    }    

    /**
     * Add Css action
     */
    add_action('after_setup_theme', 'enqueue_custom_styles');

    /**
     * Add more field function
     *
     * @return void
     */
    function add_field() {
        add_theme_support('post-thumbnails');
    }    

    /**
     * Add Field action
     */
    add_action('after_setup_theme', 'add_field');

    /**
     * Custom post type function
     *
     * @return void
     */
    function custom_post_types() {
        // Partner
        register_post_type('partner', array (
            'has_archive' => true,
			'rewrite' => array('slug' => 'partners'),
			'public' => true,
			'labels' => array(
				'name' => 'Partners',
			),
			'menu_icon' => 'dashicons-businessman',
            'supports' => array('title', 'excerpt', 'editor')
        ));

        // Invest
        register_post_type('investment', array (
            'has_archive' => false,
			'public' => true,
			'labels' => array(
				'name' => 'investments',
			),
			'menu_icon' => 'dashicons-chart-line',
            'supports' => array('title', 'editor')
        ));
    }

    /**
     * Custom post type action
     */
    add_action( 'init', 'custom_post_types' );	

    add_filter( 'ai1vm_exclude_content_from_export', 'ignoreCertainFiles');

    function ignoreCertainFiles($exclude_filters) {
        $exclude_filters[] = 'themes/trainer-profile/node_modules';

        return $exclude_filters;
    }
?>