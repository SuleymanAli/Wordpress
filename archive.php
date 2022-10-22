<?php get_header(); ?>

<h1 class="text-center">
  <?php 
  if(is_home() && !is_front_page()) {
    single_post_title();
  }
  ?>
</h1>

<main id="main" class="site-main mt-5" role="main">
  <div class="container">
    <?php if ( have_posts() ) : ?>
    <div>
      <?php if ( is_home() && ! is_front_page() ): ?>
      <header class="mb-5">
        <h1 class="page-title screen-reader-text">
          <?php single_post_title(); ?>
        </h1>
      </header>
      <?php endif ?>

      <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <?php get_template_part( 'template-parts/card' ); ?>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php
			else :
				get_template_part( 'template-parts/content-none' );
			endif;
			// aquila_pagination();
			?>
  </div>
</main>


<?php get_footer(); ?>