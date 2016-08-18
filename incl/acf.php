<?php

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title'	=> 'Opcje strony',
			'menu_title'	=> 'Opcje strony',
			'menu_slug'		=> 'page-options',
			'capability'	=> 'edit_posts',
			'parent_slug'	=> '',
			'icon_url'		=> 'dashicons-edit',
			'redirect'		=> true
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Dane ogólne',
			'menu_title'	=> 'Dane ogólne',
			'parent_slug'	=> 'page-options',
		));


		acf_add_options_sub_page(array(
			'page_title' 	=> 'O nas',
			'menu_title'	=> 'O nas',
			'parent_slug'	=> 'page-options',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Oferta',
			'menu_title'	=> 'Oferta',
			'parent_slug'	=> 'page-options',
		));

	}

?>