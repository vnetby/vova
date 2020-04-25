<?php
/* 	Socialia Theme's Archive Page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Socialia 2.0
*/

get_header(); ?>

<div id="content" class="archive-loop">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post-loop-card">
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="entrytext"><?php the_post_thumbnail('thumbnail'); ?>
					<div class="shirt-desc">
						<?php
						$desc = get_field('news_shirt_desc', $post->ID);
						$desc = $desc ? $desc : strip_text($post->post_content, 50);
						echo $desc;
						?>
					</div>
					<div class="clear"> </div>
				</div>
			</div>

		<?php endwhile; ?>
		<?php
		the_posts_pagination();
		?>

	<?php else : ?>

		<h1 class="arc-post-title"><?php _e('По Вашему запросу ничего не найдено', 'd5-socialia'); ?></h1>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>