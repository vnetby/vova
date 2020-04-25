<?php



/*

Template name: Галерея

*/




get_header();
?>
<div id="content" class="gallery-page">
  <?php

  $gallery = get_field('gallery', $post->ID);

  if ($gallery) {
    if (is_array($gallery)) {
      foreach ($gallery as &$item) {
        $title = get_from_array($item, 'title');
        $img = get_from_array($item, 'img');
        if (!$img) continue;

        $img = wp_get_attachment_image_url($img, 'full');
  ?>
        <div class="gal-col">
          <div class="gal-item">
            <a href="<?= $img; ?>" class="gal-link" data-fancybox="gallery">
              <img src="<?= $img; ?>" alt="<?= $title; ?>">
            </a>
            <div class="gal-title">
              <?= $title; ?>
            </div>
          </div>
        </div>
  <?php
      }
    }
  }
  ?>
</div>
<?php
get_sidebar();
get_footer();
