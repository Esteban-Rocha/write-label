<?php 
	/* Template Name: Case Studies */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('template-parts/content', 'hero-children-case'); ?>

	<?php get_template_part('template-parts/content', 'case-study-content'); ?>	

	<?php get_template_part('template-parts/content', 'testimonials'); ?>

	<?php get_template_part('template-parts/content', 'client-solutions', array('color' => '#ffffff')); ?>

	<?php get_template_part('template-parts/content', 'info-page', array('color' => '#F9F8F8')); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>