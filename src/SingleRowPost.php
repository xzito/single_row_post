<?php

namespace Mole\SRP;

use Mole\SRP\Helpers;

class SingleRowPost {

  public function __construct() {
    add_shortcode('singlerowpost', [$this, 'render_first_blog_post']);
  }

  public function render_first_blog_post() {
    $posts = get_posts(['numberposts' => 1, 'post_type' => 'post']);

    foreach ($posts as $post) {
      setup_postdata($post);
      include Helpers::get_template_path('featured_blog_post.php');
    }

    wp_reset_postdata();
  }
}
