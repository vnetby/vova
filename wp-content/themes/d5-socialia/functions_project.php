<?php

require(THEME_PATH . "inc/register_post_types.php");
require(THEME_PATH . "admin/functions.php");

add_filter( 'get_search_form', 'my_search_form' );

function my_search_form( $form ) {

	$form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		<label class="screen-reader-text" for="s">Запрос для поиска:</label>
		<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Поиск"/>
		<input type="submit" id="searchsubmit" value="Найти" />
	</form>';

	return $form;
}

function get_from_array(&$arr, $key, $def = false) {
  if (!isset ( $arr[$key] ) ) return $def;
  if (!$arr[$key] ) return $def;
  return $arr[$key];
}