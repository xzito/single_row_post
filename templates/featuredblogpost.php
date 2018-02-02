<?php
use Mole\SRP\Helpers;

?>
<div class="row">

    <div class="col-md-6 singlerowpost-left-col">
        <div class="singlerowpost-background-image" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>) !important;">

        </div>
    </div>

    <div class="col-md-6">

        <div class="contain-singlerowpost-content">

            <h4 class="singlerowpost-latest-news">
                 News
            </h4>

            <h4 class="archive-title singlerowpost-title">
              <?php echo get_the_title($post->ID); ?>
            </h4>

            <div class="archive-time-line singlerowpost-time">
                <?php echo get_the_time( 'n/d/Y',$post->ID )?>
            </div>

            <p>
              <?php 
                
                if ( has_excerpt($post->ID) ) {
                    echo get_the_excerpt($post->ID);
                } else {
                    Helpers::content_filter_vs_shortcodes(get_the_content()); 
                }
                ?>
            </p>
            <!-- .entry-content -->

            <div class="singlerowpost-title singlerowpost-link">

                <a href="<?php echo esc_url( get_permalink( $post->ID ) ) ?>">
                    Read Full Story
                </a>

            </div>

        </div>
        <!-- end content -->
    </div>
    <!-- end text blog -->
</div>
<!-- end row-->