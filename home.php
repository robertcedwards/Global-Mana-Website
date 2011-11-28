<?php/*Template Name: Home*/?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post row" id="post-<?php the_ID(); ?>">

			<h2 class="hidden"><?php the_title(); ?></h2>
			<div class="entry wrapper">
				<?php the_content(); ?>
			</div>
		
		</article>

		<?php endwhile; endif; ?>
		

<?php get_footer(); ?>