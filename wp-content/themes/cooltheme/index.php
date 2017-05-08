<?php get_header(); ?>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<small>Posted On: <?php the_time(); ?> Category:  <?php the_category(); ?></small>
			<p><?php the_content(); ?></p>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>