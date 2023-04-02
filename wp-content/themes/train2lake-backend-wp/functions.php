<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/* Enqueue Styles */
if (!function_exists('thr_enqueue_styles')) {
    function thr_enqueue_styles()
    {
        wp_enqueue_style('twenty-twenty-three-style', get_template_directory_uri() . '/style.css');
    }
    add_action('wp_enqueue_scripts', 'thr_enqueue_styles');
}

/* https://gutenbergtimes.com/layouts-and-wide-alignments-in-wordpress-then-now-and-upcoming-changes/ */
add_theme_support('align-wide');

// TODO: Implement CPTs here, but ACF Pro will have this anyway in future versions

include("inc/cpts.php");
