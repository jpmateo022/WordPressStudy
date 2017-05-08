<?php get_header(); ?>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<?php get_template_part('content/content',get_post_format()); ?>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_sidebar('sidebar'); ?>

<?php get_footer(); ?>