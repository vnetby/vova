<?php
/*
	Template Name: Full Width
 	Socialia Theme's Full Width Page to show the Pages Selected Full Width
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Socialia 2.0
*/
get_header(); ?>


<div id="content-full">
	<?php
	$content = apply_filters('the_content', $post->post_content);
	if ($content) {
		echo $content;
	}
	?>
</div>
<?php get_footer(); ?>