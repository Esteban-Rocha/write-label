<section class="contributor">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="special"><?php echo strip_tags(get_field('title_contributors', 'option'), '<span>'); ?></h2>
			</div>

			<div class="col-12 col-md-4 item">
				<?php $item = get_field('item_contributor_1', 'option'); ?>
				<div class="image">
					<img src="<?php echo $item['image']; ?>" alt="Copywriting experts for your ad, website, press release, and more">
				</div>
				
				<h3><?php echo $item['title']; ?></h3>
				<p class="p3"><?php echo $item['content']; ?></p>
			</div>

			<div class="col-12 col-md-4 item">
				<?php $item = get_field('item_contributor_2', 'option'); ?>
				<div class="image">
					<img src="<?php echo $item['image']; ?>" alt="Looking for a great freelance content writer?">
				</div>
				<h3><?php echo $item['title']; ?></h3>
				<p class="p3"><?php echo $item['content']; ?></p>
			</div>

			<div class="col-12 col-md-4 item">
				<?php $item = get_field('item_contributor_3', 'option'); ?>
				<div class="image">
					<img src="<?php echo $item['image']; ?>" alt="Content writing submissions from tons of copywriters in a matter of hours">
				</div>
				<h3><?php echo $item['title']; ?></h3>
				<p class="p3"><?php echo $item['content']; ?></p>
			</div>

			<a href="<?php echo get_permalink(get_page_by_path('Get Started')); ?>" class="btn-secondary btn-contributor">Become a Contributor</a>
			
		</div>
	</div>
</section>