<?php

include 'inc/enqueue.php';     // add styles and scripts
include 'inc/acf.php';         // custom acf functions
include 'inc/extras.php';      // custom functions
include 'classes/walker.php';  // walker nav menu
include 'inc/register.php';    // custom ajax register and auth
include 'inc/ajax-actions.php'; // ajax actions


add_action('after_setup_theme', 'theme_register_nav_menu');


function theme_register_nav_menu()
{
	register_nav_menus(
		array(
			'main-menu' => 'header',
			'mob-menu'  => 'mobile',
		)
	);
	add_theme_support('post-thumbnails');
}



if (function_exists('acf_add_options_page')) {

	acf_add_options_page();

	acf_add_options_sub_page('Theme Settings');
}



function my_acf_init()
{
	acf_update_setting('google_api_key', '');
}

add_action('acf/init', 'my_acf_init');



class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = null)
	{
		$output .= '<ul class="sub-menu">';
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $current_object_id = 0)
	{
		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$class_string = '';
		foreach ($item->classes as $class) {

			if ($class !== 'menu-item-has-children') {
				$class_string .= $class . ' ';
			}
		}


		$has_children = in_array('menu-item-has-children', $item->classes);

		$menu_item_classes = $has_children ? 'menu-item-has-children' : '';


		$output .= $indent . '<li id="menu-item-' . $item->ID . '" class="' . $class_string  . $menu_item_classes . '"><a href="' . $item->url . '">' . $item->title;


		if ($has_children) {
			$output .= '<span><i class="far fa-chevron-down"></i></span>';
		}

		$output .= '</a>';
	}
}
