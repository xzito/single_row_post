<?php

namespace Mole\SRP;

use Mole\SRP\Helpers;

class SingleRowPost {
  private const DEFAULT_ATTS = [
    'heading' => "What's New",
    'link_text' => 'Read Full Story',
  ];

  public function __construct() {
    add_shortcode('single_row_post', [$this, 'render_first_blog_post'], 10, 1);
  }

  public function render_first_blog_post($atts, $content) {
    $atts = $this->atts_with_defaults($atts);
    $heading = $atts['heading'];
    $link_text = $atts['link_text'];
    $posts = get_posts(['numberposts' => 1, 'post_type' => 'post']);

    foreach ($posts as $post) {
      setup_postdata($post);

      require Helpers::get_template_path('featured_blog_post.php');
    }

    wp_reset_postdata();
  }

  private function atts_with_defaults($atts) {
    $atts_array = ($atts == '' ? [] : $atts);

    return array_merge(self::DEFAULT_ATTS, $atts_array);
  }
}
