<?php/*Template Name: Home*/?>

<div id="top">
<div id="video" class="content">
<div class="videoWrapper"><iframe src="http://www.youtube.com/embed/CZ8x6iebBKU" frameborder="0" width="320" height="240"></iframe></div>
</div>
<div id="call" class="content">
<h2>We Can Stop Our Earth’s Destruction</h2>
<h3>Our Race is Destroying our Planet.</h3>
There are solutions to our problems already available-- we need to make the choice to adopt them.

With every action you take and every dollar you
spend-- you <strong>support our planet</strong> or,
<strong>contribute to its destruction.</strong>

Global Mana Foundation’s mission is educating people about the impact of their actions and to promote common sense solutions to conscious living.

<a class="button">Make The Pledge</a>

</div>
</div>
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