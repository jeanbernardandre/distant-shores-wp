<?php

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');

	add_filter('rest_endpoints', function($endpoints) {
		if (!isset($endpoints['/wp/v2/posts'])) {
			return $endpoints;
		}
		$endpoints['/wp/v2/posts'][0]['args']['per_page']['default'] = 100;
		return $endpoints;
	});

	function register_my_menu() {
		register_nav_menu('distantshores_menu',__('distantshores'));
		register_nav_menu('footer_menu',__('footer distantshores'));
	}
	add_action('init', 'register_my_menu');

	function register_rest_images() {
		register_rest_field( 
		['post', 'page'],
			'fimg_url',
			[
				'get_callback'    => 'get_rest_featured_image',
				'update_callback' => null,
				'schema'          => null
			]
		);
	}
	function get_rest_featured_image($object, $field_name, $request) {
		if ($object['featured_media']) {
			$img = wp_get_attachment_image_src($object['featured_media'], 'medium_large');
			return $img[0];
		}
		return false;
	}
	add_action('rest_api_init', 'register_rest_images');



    function new_excerpt_more($more) {
        return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    include('endpoints/getQueryDioramas.php');
    include('endpoints/getQueryDioramasHome.php');
    include('endpoints/getQueryPhotos.php');
    include('endpoints/getQueryPost.php');



//http://jbwp.local/wp-json/photos/v1/pid/1734
//http://jbwp.local/wp-json/wp/v2/photostv
