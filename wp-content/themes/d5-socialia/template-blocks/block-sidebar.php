<?php
$sidebars = get_from_array($block, 'sidebars');

$sidebars = is_array($sidebars) ? $sidebars : false;

if (!$sidebars) return;


?>
<div id="right-sidebar">


  <?php
  foreach ($sidebars as &$side) {
    $title = get_from_array($side, 'title');
    $links = get_from_array($side, 'links');
    $links = is_array($links) ? $links : false;
    if (!$links) continue;
    ?>
    <aside id="archives" class="widget">
      <h3 class="widget-title"><?= $title; ?></h3>
      <ul>
        <?php
          foreach ($links as &$link) {
            $label = get_from_array($link, 'label');
            $custom_link = get_from_array($link, 'custom_link');
            $page = get_from_array($link, 'page');

            $link = $custom_link;

            if (!$label) {
              if ($page) {
                $label = $page->post_title;
              }
            }

            if (!$link) {
              if ($page) {
                $link = get_permalink($page->ID);
              }
            }
            ?>
          <li>
            <a href="<?= $link; ?>" rel="external nofollow ugc" class="url"><?= $label; ?></a>
          </li>
        <?php
          }
          ?>
        <?php wp_get_archives(array('type' => 'monthly')); ?>
      </ul>
    </aside>
  <?php
  }
  ?>

</div>


<?php

?>