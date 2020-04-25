<?php



add_action ('init', 'vnet_register_post_types');



function vnet_register_post_types () {


  register_post_type ( 'news', [

    'labels' => [
      'name'               => 'Новости',
      'singular_name'      => 'Новость',
      'add_new'            => 'Добавить новость',
      'add_new_item'       => 'Добавить новую новость',
      'edit_item'          => 'Редактировать новость',
      'new_item'           => 'Новая новость',
      'view_item'          => 'Открыть новость',
      'search_items'       => 'Поиск',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'Не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Новости'
    ],
    'description'           => '',
    'public'                => true,
    'publicly_queryable'    => true,
    'exclude_from_searc'    => false,
    'show_u'                => true,
    'show_in_menu'          => true,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'show_in_res'           => true,
    // 'rest_base'             => 'articles',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'menu_position'         => 21,
    'menu_icon'             => 'dashicons-media-spreadsheet',
    'capability_type'       => 'post',
    'map_meta_cap'          => true,
    'hierarchica'           => false,
    'supports'              => ['title', 'editor', 'author', 'thumbnail', 'custom-fields', 'comments', 'page-attributes'],
    'taxonomies'            => [],
    'has_archive'           => true,
    'rewrite'               => true,
    'can_export'            => true,
    'delete_with_use'       => false,
    // 'query_var'             => '/?{query_var_string}={post_slug}',
    'query_var'             => true,
    '_builtin'              => false,
    '_edit_link'            => 'post.php?post=%d'
  ]);






}

