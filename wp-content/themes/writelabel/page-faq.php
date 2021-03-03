<?php get_header(); ?>
	<section class="faq">
		<div class="container">
			<div class="col-12">
				<h1><?php echo the_field('title_faq'); ?></h1>

				<div class="list-questions">
					<?php
					if( have_rows('questions') ):

					    // Loop through rows.
					    while( have_rows('questions') ) : the_row();
					        // Load sub field value.
					        $question = get_sub_field('question'); ?>
					       
					        <div class="item">
								<h3><?php echo $question['title']; ?></h3>
								<p class="p2"><?php echo $question['answer']; ?></p>
							</div>
					    <?php endwhile; 
					endif;
					?>		
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/content', 'info-page', array('color' => '#ffffff')); ?>

<?php get_footer(); ?>