<section class="creatives">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="special"><?php echo strip_tags(get_field('title_creative_talent', 'option'), '<span>'); ?></h2>
      </div>
    </div>
  </div>

  <div class="content-slide">
    <div class="innerContainer">    
      <div class="glide slideCreative">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <?php $creatives = get_field('creatives', 'option'); 

              foreach($creatives as $item):
                $creative = $item['creative'];
              ?>
                <li class="glide__slide">
                  <?php $color = writelabel_color($color); ?>
                  <div class="creative" style="border-top: 7px solid <?php echo $color; ?>">
                    <div class="creative-info">
                      <?php $img = $creative['image']; ?>
                      <div class="image" style="background-image: url(<?php echo $img['url']; ?>)">
                      </div>
                      <div class="meta">
                        <h3><?php echo $creative['name']; ?></h3>
                        <p class="p3"><?php echo $creative['role']; ?><br><?php echo $creative['address']; ?></p>
                      </div>
                    </div>

                    <p class="p3"><?php echo $creative['description']; ?></p>
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
            <?php foreach($creatives as $key => $value) { ?>
              <button class="glide__bullet" data-glide-dir="=<?php echo $i; ?>"></button>
              <?php $i++; ?>
          <?php } ?>
          </div>
      </div>
    </div>
  </div>

  <a href="<?php echo get_permalink(get_page_by_path('Get Started')); ?>" class="btn-secondary btn-contributor">Become a Contributor</a>
  

	
</section>