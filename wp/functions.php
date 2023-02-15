<?php

	add_action('wp_enqueue_scripts', 'polyclinic_media');

	add_action('after_setup_theme', 'polyclinic_after_setup');

	/**
	 * Enqueues script with WordPress and adds version number that is a timestamp of the file modified date.
	 * 
	 * @param string      $handle    Name of the script. Should be unique.
	 * @param string|bool $src       Path to the script from the theme directory of WordPress. Example: '/js/myscript.js'.
	 * @param array       $deps      Optional. An array of registered script handles this script depends on. Default empty array.
	 * @param bool        $in_footer Optional. Whether to enqueue the script before </body> instead of in the <head>.
	 *                               Default 'false'.
	 */
	function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
		wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
	}
	
	/**
	 * Enqueues stylesheet with WordPress and adds version number that is a timestamp of the file modified date.
	 *
	 * @param string      $handle Name of the stylesheet. Should be unique.
	 * @param string|bool $src    Path to the stylesheet from the theme directory of WordPress. Example: '/css/mystyle.css'.
	 * @param array       $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
	 * @param string      $media  Optional. The media for which this stylesheet has been defined.
	 *                            Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
	 *                            '(orientation: portrait)' and '(max-width: 640px)'.
	 */
	function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
		wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
	}

	function polyclinic_media() {
		enqueue_versioned_style('test-main', '/style.css');
		enqueue_versioned_script('test-main', '/js/main.min.js', array( 'jquery'), false);
	}

	function polyclinic_after_setup() {
		register_nav_menu('menu', 'Menu');

		add_theme_support('post-thumbnails');
	}

	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title'   => 'Основные настройки',
			'menu_title'  => 'Настройки темы',
			'menu_slug'   => 'theme-general-settings',
			'capability'  => 'edit_posts',
			'redirect'    => false
		));
	}

	add_action('init', 'polylang_strings' );
	function polylang_strings() {
		pll_register_string('Регистратура', 'Регистратура', 'new_strings', true);
		pll_register_string('WhatsApp', 'WhatsApp', 'new_strings', true);
		pll_register_string('Версия для слабовидящих', 'Версия для слабовидящих', 'new_strings', true);
		pll_register_string('Поиск...', 'Поиск...', 'new_strings', true);
		pll_register_string('Заголовок логотипа', 'Заголовок логотипа', 'new_strings', true);
		pll_register_string('Текст логотипа', 'Текст логотипа', 'new_strings', true);
		pll_register_string('Адрес', 'Адрес', 'new_strings', true);
		pll_register_string('Копирайт', 'Копирайт', 'new_strings', true);
		pll_register_string('Разработчики', 'Разработчики', 'new_strings', true);
		pll_register_string('Подробнее', 'Подробнее', 'new_strings', true);
	}