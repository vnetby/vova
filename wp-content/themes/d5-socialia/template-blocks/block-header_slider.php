<?php
$sliders = false;

if (isset($block['slider'])) {
  if (is_array($block['slider'])) {
    $sliders = &$block['slider'];
  }
}
?>


<ul class="slick header-slider">
  <?php
  $count = 0;
  foreach ($sliders as &$slide) {
    $img = get_from_array($slide, 'img');
    $img = wp_get_attachment_image_url($img, 'large');
    if (!$img) return;

    $title = get_from_array($slide, 'title');
    $desc = get_from_array($slide, 'desc');
  ?>
    <li class="slider-item slick-item">
      <a href="<?= $img; ?>" class="slider-link" data-fancybox="slider-header">
        <img src="<?= $img; ?>" alt="<?= $title ? $title : 'slider image'; ?>" class="fade">
      </a>
      <?php
      if ($desc || $title) {
      ?>
        <div class="label_text">
          <?php
          if ($title) {
          ?>
            <div class="slider-title">
              <?= $title; ?>
            </div>
          <?php
          }
          if ($desc) {
          ?>
            <div class="slider-desc">
              <?= $desc; ?>
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      }
      ?>
    </li>
  <?php
    $count++;
  }
  ?>
</ul>