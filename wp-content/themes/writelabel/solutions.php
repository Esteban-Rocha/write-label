<?php 
	/* Template Name: Solutions */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('template-parts/content', 'hero-children'); ?>

	<?php get_template_part('template-parts/content', 'solution-content'); ?>

	<?php get_template_part('template-parts/content', 'case-studies'); ?>

	<?php get_template_part('template-parts/content', 'info-page', array('color' => '#ffffff')); ?>

	<?php get_template_part('template-parts/content', 'client-solutions', array('color' => '#F9F8F8')); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>