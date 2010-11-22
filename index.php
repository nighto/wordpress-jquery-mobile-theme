<?php get_header(); ?>

	<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

	<?php endwhile;endif ?>

	</ul>
	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
