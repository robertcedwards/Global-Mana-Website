<?php/*Template Name: Home*/?>

		<div id="logo" class="span6 columns"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/_/img/logo.png"><h1><?php bloginfo('name'); ?></a></h1><div class="description"><?php bloginfo('description'); ?></div></a></div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post row" id="post-<?php the_ID(); ?>">

			<h2 class="hidden"><?php the_title(); ?></h2>
			<div class="entry wrapper">
				<?php the_content(); ?>
			</div>
		
		</article>

		<?php endwhile; endif; ?>

<?php get_header(); ?>
<?php get_footer(); ?>