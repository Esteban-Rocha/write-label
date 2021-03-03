<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


<?php get_template_part('template-parts/content', 'hero-parent2', array('class' => 'solutions')); ?>



<section class="get-started-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="form-container">
					<h2><?php the_field('title_form'); ?></h2>
					<p class="p2"><?php the_field('description_form'); ?></p>
					<p class="p3">* indicates required</p>
					<?php echo do_shortcode('[contact-form-7 id="551" title="Get Started"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="products">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="special"><?php echo get_field('title_products'); ?></h2>
        <p class="p2">We have prices to fit every budget, with single projects starting as low as $100.</p>
      </div>
    </div>
  </div>

  <div class="content-slide">
    <div class="innerContainer">    
      <div class="glide slideProducts">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <?php $products = get_field('products'); 

              foreach($products as $item):
                $product = $item['product'];
              ?>
                <li class="glide__slide">
                  <?php $color = writelabel_color($color); ?>
                  <div class="product" style="border-top: 7px solid <?php echo $color; ?>">
                    <h3><?php echo $product['title']; ?></h3>
                    <h3 class="content-text"><?php echo $product['content']; ?></h3>
                  </div>
                </li>
                <?php endforeach; ?>
            </ul>

            <div class="glide__arrows" data-glide-el="controls">
                  <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
                  <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
            </div>
          </div>

          
          <div class="glide__bullets" data-glide-el="controls[nav]">
            <?php $i = 0; ?>
            <?php foreach($products as $key => $value) { ?>
              <button class="glide__bullet" data-glide-dir="=<?php echo $i; ?>"></button>
              <?php $i++; ?>
          <?php } ?>
          </div>
      </div>
    </div>
  </div>
	
</section>

<section class="descriptions">
	<div class="container">
		<?php
			if( have_rows('descriptions_products') ):

			    // Loop through rows.
			    while( have_rows('descriptions_products') ) : the_row();
			        // Load sub field value.
			        $term = get_sub_field('item'); ?>

			        <div class="row item">
			       
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



<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>