<?php




function is_display_acf_block(&$block = false)
{

  $default = true;

  if (!$block) return false;

  if (!is_array($block)) return $default;

  if (!isset($block['display'])) return $default;

  if (!$block['display']) return false;

  return $default;
}







function require_template_block($prefix, $key, &$block)
{

  $file = THEME_PATH . 'template-blocks/' . $prefix . '-' . $key . '.php';

  if (file_exists($file)) {

    if (current_user_can('edit_posts')) {
      global $post;

      ob_start();
      require($file);
      $content = ob_get_clean();

      $post_id = $post ? $post->post_id : null;

      if ($prefix === 'block') {
        $post_id = BLOCKS_POST;
      }
      $fieldKey = get_post_meta($post_id, '_' . $key, true);
      $editLink = get_edit_post_link($post_id) . '#scrollto=acf-' . $fieldKey;

      $field = get_field_object($fieldKey);

      $label = $field['label'];

      $content = preg_replace("/data-admin/", "data-edit-type=\"$prefix\" data-edit-block=\"$key\" data-edit-file=\"$file\" data-edit-link=\"$editLink\" data-edit-label=\"$label\"", $content);
      echo $content;
    } else {

      require($file);
    }
  }
}




function the_block ($block_name) {
  $field = get_field('block_' . $block_name, BLOCKS_POST);
  if ( !$field ) return;
  require_template_block('block', $block_name, $field);
}