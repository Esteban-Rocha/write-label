<section class="case-study-content">
	<div class="container">
		<div class="row">
			<div class="col-12 case">
				<h2 class="special"><?php echo strip_tags(get_field('title1_case_study'), '<span>'); ?></h2>
				<p class="p1"><?php the_field('content1_case_study'); ?></p>
				<div class="line"></div>
				<h2 class="special"><?php echo strip_tags(get_field('title2_case_study'), '<span>'); ?></h2>
				<p class="p1"><?php the_field('content2_case_study'); ?></p>
			</div>
		</div>

		<?php $bubble = get_field('bubble_1'); 

			if($bubble != NULL):
		?>
			<div class="row circles counter">
				<div class="col-12 col-md-4">
					<div class="circle circle1">
						<div class="content">

							<?php $number = explode('+', $bubble['number']); ?>
							
							<span class="number counter-value" data-count="<?php echo str_replace(',', '', $number[0]); ?>"><?php echo $bubble['number'] . '-' ; ?></span>
							<span class="title"><?php echo $bubble['title']; ?></span>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="circle circle2">
						<div class="content">
							<?php $bubble = get_field('bubble_2'); ?>
							<?php $number = explode('+', $bubble['number']); ?>
							
							<span class="number counter-value" data-count="<?php echo str_replace(',', '', $number[0]); ?>"><?php echo $bubble['number'] . '-' ; ?></span> 
							<span class="title"><?php echo $bubble['title']; ?></span>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="circle circle3">
						<div class="content">
							<?php $bubble = get_field('bubble_3'); ?>
							<?php $number = explode('+', $bubble['number']); ?>
							
							<span class="number counter-value" data-count="<?php echo str_replace(',', '', $number[0]); ?>"><?php echo $bubble['number'] . '-'; ?></span>
							<span class="title"><?php echo $bubble['title']; ?></span>
						</div>
					</div>
				</div>		
			</div>

			<div class="row script">
				<div class="col-12">
					<?php $text = get_field('title3_case_study'); 
					if($text != NULL):
					?>
						<h2 class="special"><?php echo $text; ?></h2>
					<?php 
					endif;
					 ?>
					<p class="p1"><?php the_field('content3_case_study'); ?></p>
				</div>
			</div>

		<?php else: ?>

			<div class="row">
				<div class="col-12">
					<div class="border">
						<?php $text = get_field('title3_case_study'); 
						if($text != NULL):
						?>
						<h2 class="special"><?php echo $text; ?></h2>
						<?php endif; ?>
						<p class="p1"><?php the_field('content3_case_study'); ?></p>
					</div>					
				</div>
			</div>

		<?php endif; ?>


		<div class="row result">
			<div class="col-12">
				<h2 class="special"><?php echo strip_tags(get_field('title4_case_study'), '<span>'); ?></h2>
				


				<?php $text = get_field('content5_case_study'); 

				if($text != NULL) : ?>
					<p class="p1"><?php the_field('content4_case_study'); ?></p>
					<h2 class="special title5"><?php echo strip_tags(get_field('title5_case_study'), '<span>'); ?></h2>
					<p class="p1"><?php the_field('content5_case_study'); ?></p>
				<?php else: ?>
					<h2 class="special solution"><?php the_field('title5_case_study'); ?></h2>
					<p class="p1"><?php the_field('content4_case_study'); ?></p>
				<?php endif; ?>				
			</div>
		</div>
	</div>
</section>