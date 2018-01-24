<?php

namespace Mole\SRP;

class Helpers {

  public static function content_filter_vs_shortcodes($text = '', $count = 50){
    $text = do_shortcode( $text );
    $text = wp_trim_words( $text , $count, '...' );
    echo $text;
  }

  //Returns Template path for emails : Thx James
  public static function get_template_path($template_filename) {

    $templates_path = plugin_dir_path(dirname(__FILE__)) . "templates";
    $template_path = "$templates_path/$template_filename";
    return $template_path;

  }

}