<?php get_header(); ?>
	<section class="privacy-policy-page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="content">
						<p class="p1 special"><?php the_title(); ?></p>
					    <h1><?php echo strip_tags(get_field('title_privacy_policy'), '<span>'); ?></h1>
					    <p class="p2 content"><?php the_field('content_privacy_policy'); ?></p>
					</div>					
				</div>
			</div>
			
				<?php
					if( have_rows('privacy_policy') ):

					    // Loop through rows.
					    while( have_rows('privacy_policy') ) : the_row();
					        // Load sub field value.
					        $term = get_sub_field('policy'); ?>

					        <div class="row policy">
					       
					            <div class="col-12 col-md-6">
					                <h2><?php echo $term['title']; ?></h2>
				                </div>

				                <div class="col-12 col-md-6">
					                <p class="p1"><?php echo $term['description']; ?></p>
				                </div>
				            </div>
					    <?php endwhile; 
					endif;
				?>				
			
		</div>
	</section>
<?php get_footer(); ?>