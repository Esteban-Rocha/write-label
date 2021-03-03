<section class="solution-content">
	<div class="container">
		<div class="row">
			<?php $content = get_field('content_1_solution'); ?>
			<div class="col-12 col-md-6">
				<div class="image">
					<img src="<?php echo $content['image']['url']; ?>" alt="<?php echo $content['image']['alt']; ?>">
				</div>
			</div>
			<div class="col-12 col-md-6">
				<h2 class="special"><?php echo strip_tags($content['title'], '<span>'); ?></h2>
				<p class="p1"><?php echo $content['content']; ?></p>
			</div>
		</div>
		<div class="row">
			<?php $content = get_field('content_2_solution'); ?>
			<div class="col-12 col-md-6 content">
				<h2 class="special"><?php echo strip_tags($content['title'], '<span>'); ?></h2>
				<p class="p1"><?php echo $content['content']; ?></p>
			</div>
			<div class="col-12 col-md-6 picture">
				<div class="image">
					<img src="<?php echo $content['image']['url']; ?>" alt="<?php echo $content['image']['alt']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>