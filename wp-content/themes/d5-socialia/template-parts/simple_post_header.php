<?php


$has_header = false;

if (is_search() && !$has_header) {
  $has_header = true;
  $title = 'Поиск';
  $img = SRC . "img/def_header.jpg";
}


if (is_archive() && !$has_header) {
  $object = get_queried_object();
  if ($object) {
    $title = $object->label;
    $img = SRC . "img/def_header.jpg";
  }
}

if (is_404() && !$has_header) {
  $has_header = true;
  $title = "Страница не найдена";
  $img =  SRC . "img/404.jpg";
}

if (!$has_header) {
  $img = get_the_post_thumbnail_url($post->ID, 'large');
  $img = $img ? $img : SRC . "img/def_header.jpg";

  $title = $post->post_title;
}

?>

<div class="simple-header parallax-window">
  <div class="bg-img">
    <img src="<?= $img; ?>" alt="<?= $title; ?>">
  </div>
  <div class="head-content">
    <h1 class="page-title left-border">
      <?= $title; ?>
    </h1>
  </div>
</div>