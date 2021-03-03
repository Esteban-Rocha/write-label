<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="sign-in-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div _ngcontent-fpw-c143="" class="login ng-star-inserted">
          <form _ngcontent-fpw-c143="" novalidate="" class="ng-pristine ng-invalid ng-touched">
            <h1 _ngcontent-fpw-c143="" class="login__title text-center">Sign in</h1><!---->
            <p class="p2">If you are a registered business or creator sign in below.</p>
              <div _ngcontent-fpw-c143="" class="form-group">
                  <label _ngcontent-fpw-c143="" class="form-group__label">Email</label>
                  <input _ngcontent-fpw-c143="" type="text" placeholder="Email" formcontrolname="email" class="form-group__input ng-pristine ng-invalid ng-touched">
                </div>
              <div _ngcontent-fpw-c143="" class="form-group">
                <label _ngcontent-fpw-c143="" class="form-group__label">Password</label>
                <input _ngcontent-fpw-c143="" type="password" placeholder="Password" formcontrolname="password" class="form-group__input ng-pristine ng-invalid ng-touched">
                <a _ngcontent-fpw-c143="" routerlink="../forgot-password" class="form-group__link" href="https://writelabel.com/auth/forgot-password">Forgot Password?</a>
              </div>
              <div _ngcontent-fpw-c143="" class="form-group__button">
                <lib-button _ngcontent-fpw-c143="" buttontype="submit" _nghost-fpw-c74="">
                  <button _ngcontent-fpw-c74="" type="submit" class="wl-button primary-button--disabled primary-button">Sign In</button>
                </lib-button>
              </div>
            </form>
          </div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>