<?php

use Mole\SRP\Helpers;

$excerpt      = Helpers::get_excerpt($post);
$image        = get_the_post_thumbnail_url($post->ID, 'full');
$link         = esc_url(get_permalink($post->ID));
$published_at = get_the_time('n/d/Y', $post->ID);
$title        = get_the_title($post->ID);
?>

<div class="row">
  <div class="col-md-6 singlerowpost-left-col">
    <div class="singlerowpost-background-image" style="background-image: url(<?= $image ?>) !important;"></div>
  </div>
  <div class="col-md-6">
    <div class="contain-singlerowpost-content">
      <h4 class="singlerowpost-heading"><?= $heading ?></h4>
      <h4 class="archive-title singlerowpost-title"><?= $title ?></h4>
      <div class="archive-time-line singlerowpost-time"><?= $published_at ?></div>
      <p><?= $excerpt ?></p>
      <div class="singlerowpost-title singlerowpost-link">
        <a href="<?= $link ?>"><?= $link_text ?></a>
      </div>
    </div>
  </div>
</div>
