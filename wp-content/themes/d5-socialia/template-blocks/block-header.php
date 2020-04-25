<?php

$logo = get_from_array($block, 'logo');
$logo = wp_get_attachment_image_url($logo, 'full');

$title = get_from_array($block, 'title');
$desc = get_from_array($block, 'desc');

$socials = get_from_array($block, 'socials');

$socials = is_array($socials) ? $socials : false;


?>
<div id="top-menu-container">

  <?php



  get_search_form();

  if ($socials) {
  ?>
    <nav id="social">
      <?php
      foreach ($socials as &$item) {
      ?>
        <a href="<?= $item['link']; ?>" class="social-link <?= $item['social']; ?>" target="_blank"></a>
      <?php
      }
      ?>
    </nav>
  <?php
  }

  ?>

</div>

<div class="clear"> </div>


<header id="header">

  <div id="header-content">
    <?php

    if ($logo) {
    ?>
      <a href="/" id="logotitle" class="top-logo">
        <img src="<?= $logo; ?>" alt="<?= $title ? $title : 'site logo'; ?>">
      </a>
    <?php
    }

    if ($desc) {
    ?>
      <h2 class="site-title-des">
        <?= $desc; ?>
      </h2>
    <?php
    }
    ?>


    <nav id="main-menu-con">
      <?= has_nav_menu('main-menu') ? wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'main-menu-items')) : wp_page_menu() ?>
    </nav>

    <div class="whiteline"></div>
    <div class="clear"> </div>
  </div>

</header>

<?php
