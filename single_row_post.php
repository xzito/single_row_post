<?php

/**
 * Plugin Name: Single Row Post
 * Description: Get the latest post on a page. Using a shortcode.
 * Version: 0.2.0
 * Author: Nick Mole
 * Text Domain: srp-single-row-post
 */

require_once plugin_dir_path(__FILE__) . 'src/SingleRowPost.php';
require_once plugin_dir_path(__FILE__) . 'src/Helpers.php';

use Mole\SRP;
use Mole\SRP\SingleRowPost;
use Mole\SRP\Helpers;

new SingleRowPost();

add_action('wp_footer', function() {
  wp_register_style(
    'singleRowPost',
    plugins_url('single_row_post/css/') . 'style.css'
  );

  wp_enqueue_style('singleRowPost');
});
