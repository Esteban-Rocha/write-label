<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<section class="hero hero children press" style="background-color: <?php the_field('color_hero_page'); ?>;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="content">
						<p class="p1 special"><span><?php the_title(); ?><span></p>
						<h1><?php the_field('title_hero_page'); ?></h1>
						<p class="p1"><?php the_field('content_hero_page'); ?></p>
						<a href="#" class="btn btn-getstarted">Read More</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>


	<section class="press-content">
	<div class="container">
		<div class="row">
			<?php
			if( have_rows('press_list') ):
				$i = 0;
				$j = 1;
			    // Loop through rows.
			    while( have_rows('press_list') ) : the_row();
			    	$i++;
			        // Load sub field value.


			        $press = get_sub_field('press'); ?>			       
					<div class="col-12 col-md-4 rp r<?php echo $j; ?>">
						<div class="image" style="border-bottom: 7px solid <?php echo $press['color']; ?>;">
							<?php $image = $press['image']; ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div>
						
						<h3><?php echo $press['title']; ?></h3>
						<a href="<?php echo $press['url']; ?>" class="text-link" target="_blank"><span><?php echo $press['button']; ?><span></a>						
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

<section class="info page press" style="background-color: <?php echo $args['color']; ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="special"><?php the_field('title_info_press'); ?></h2>

				<p class="p1"><?php the_field('content_info_press'); ?></p>

				<a href="mailto:<?php the_field('email_info_press'); ?>" class="btn-secondary btn-info"><?php the_field('email_info_press'); ?></a>
			</div>
		</div>
	</div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>