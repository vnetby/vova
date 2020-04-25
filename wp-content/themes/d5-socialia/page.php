<?php
/* 	Socialia Theme's General Page to display all Pages
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Socialia 2.0
*/

get_header(); 

?>


<div id="content" class="art-content">
	<?php
		$content = apply_filters('the_content', $post->post_content);
		if ($content ) {
			echo $content;
		}
	?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>