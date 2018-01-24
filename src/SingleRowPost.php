<?php

namespace Mole\SRP;

use Mole\SRP\Helpers;

class SingleRowPost {

  //Contructor
  public function __construct()
  { 

    //Function of class : call short code render
    add_shortcode( 'singlerowpost', array($this, 'render_first_blog_post' ));

  }

  public function render_first_blog_post(){

      $args = array( 'posts_per_page' => 1); 

      $loop = get_posts($args); 
      foreach ( $loop as $post ) :

        setup_postdata($post);

        //Get confirm - template
        $template = Helpers::get_template_path('featuredblogpost.php');

        //Print template for page : confirming new user s confirmed
        include $template;
          
      endforeach; 

      wp_reset_postdata();// end of the loop. 
       
  }


}
