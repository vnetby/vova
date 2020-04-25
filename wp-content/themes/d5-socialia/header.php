<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />

  <?php
  wp_head();
  ?>

  <link rel="stylesheet" href="<?= SRC; ?>assets/assets.min.css">
  <link rel="stylesheet" href="<?= SRC; ?>css/main.min.css">

</head>

<body <?php body_class(); ?>>
  <?php
  the_block('header');
  ?>
  <div class="front-header-slider">
    <div class="box_skitter box_skitter_large">
      <?php
      if (is_front_page()) {
        the_block('header_slider');
      }
      if (is_single() || is_page() || is_archive() || is_search() || is_404()) {
        require(THEME_PATH . "template-parts/simple_post_header.php");
      }
      ?>

    </div>
  </div>
  <div id="container">