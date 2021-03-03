<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('template-parts/content', 'hero-page2'); ?>


	<section class="history">
		<div class="container">
			<div class="row r1">
				<div class="col-12 col-md-6 cl1">
					<div class="content">
						<h2 class="special"><?php echo strip_tags(get_field('title1_history'), '<span>'); ?></h2>
						<p class="p1"><?php the_field('content1_history'); ?></p>
					</div>					
				</div>
				<div class="col-12 col-md-6 cl2">
					<div class="image">
						<?php $img = get_field('image1_history'); ?>
						<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
					</div>
				</div>

			</div>
			<div class="row center">
				<div class="col-12">
					<h2 class="special"><?php echo strip_tags(get_field('title2_history'), '<span>'); ?></h2>
				</div>
			</div>
			<div class="row r3">
				<div class="col-12 col-md-6 cl1">
					<div class="image img2">
						<?php $img = get_field('image2_history'); ?>
						<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
					</div>
				</div>
				<div class="col-12 col-md-6 cl2">
					<div class="content c2">
						<h2 class="special"><?php echo strip_tags(get_field('title3_history'), '<span>'); ?></h2>
						<p class="p1"><?php the_field('content2_history'); ?></p>
					</div>					
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/content', 'creatives'); ?>


	<section class="write-team">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="special"><?php echo strip_tags(get_field('title_writeteam'), '<span>');  ?></h2>
					<div class="image">
						<?php $img = get_field('image_writeteam'); ?>
						<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
					</div>
				</div>				
			</div>
			<div class="row">
				<?php
				if( have_rows('team_writeteam') ):

					$i = 0;
					$j = 1;

			    // Loop through rows.
				    while( have_rows('team_writeteam') ) : the_row();
			        // Load sub field value.
				    	$i++;
				    	if($i%2 == 0):
				    		$class = 'right';
				    	else :
				    		$class = 'left';
				    	endif;

				        $employee = get_sub_field('employee'); ?>	

						
						<div class="col-12 col-md-6 rp <?php  echo 'r' . $j; ?>">
							<div class="content <?php echo $class; ?>">
								<div class="accordion">
									<h3><?php echo $employee['name']; ?></h3>
									<p class="p3"><?php echo $employee['role']; ?></p>
								</div>								
								<p class="p3 bio"><?php echo $employee['biography']; ?></p>
							</div>							
						</div>
				    <?php 
				    	if($i == 10):
				   			$j++;
				   		endif;
					endwhile; 
				endif;
			?>
			</div>

			<div class="row">
				<div class="col-12">
					<a href="#" class="btn btn-secondary btn-more" data-page="2">+ See more</a>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/content', 'info-page', array('color' => '#F9F8F8')); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>