<?php

add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');

function add_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/FA5PRO-master/css/all.css');
    wp_enqueue_style('font', get_template_directory_uri() . '/css/font.css');
    wp_enqueue_style('dev', get_template_directory_uri() . '/css/dev.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/css/nice-select.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_style('intlTelInput', get_template_directory_uri() . '/css/intlTelInput.min.css');
    wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css', array(), rand(1111, 9999));
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), rand(1111, 9999));
    wp_enqueue_style('theme', get_stylesheet_uri());
}


function add_scripts()
{

    wp_enqueue_script('fancyboxjs', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), false, true);
    wp_enqueue_script('nice-selectjs', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array('jquery'), false, true);
    wp_enqueue_script('swiperjs', get_template_directory_uri() . '/js/swiper.js', array('jquery'), false, true);
    wp_enqueue_script('marqueejs', get_template_directory_uri() . '/js/jquery.marquee.min.js', array('jquery'), false, true);
    wp_enqueue_script('rellax', get_template_directory_uri() . '/js/rellax.min.js', array('jquery'), false, true);
    wp_enqueue_script('cuttr', get_template_directory_uri() . '/js/cuttr.min.js', array('jquery'), false, true);
  wp_enqueue_script('cookie', '//cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js', array(), null, true);

    wp_enqueue_script('intlTelInputjs', get_template_directory_uri() . '/js/intlTelInput.min.js', array('jquery'), false, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), rand(1111, 9999), true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), rand(1111, 9999), true);

    wp_localize_script(
        'main',
        'globals',
        array(
            'url' => admin_url('admin-ajax.php'),
            'template' => get_template_directory_uri(),
        )
    );
}
