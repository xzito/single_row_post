<?php

namespace Mole\SRP;

class Helpers {

  public static function get_excerpt($post) {
    if (has_excerpt($post)) {
      $excerpt = get_the_excerpt($post);
    } else {
      $excerpt = self::excerpt_from_content($post);
    }

    return $excerpt;
  }

  public static function get_template_path($template_filename) {
    $templates_path = plugin_dir_path(dirname(__FILE__)) . "templates";
    $template_path = "$templates_path/$template_filename";

    return $template_path;
  }

  private static function excerpt_from_content($post, $count = 50) {
    $text = apply_filters('the_content', get_the_content('', true, $post));
    $text = do_shortcode($text);
    $text = wp_trim_words($text , $count, '...');

    return $text;
  }
}
