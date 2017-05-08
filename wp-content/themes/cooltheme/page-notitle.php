<?php 
/*
	Template Name: Page No Title
*/
	get_header(); ?>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<p><?php the_content(); ?></p>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>