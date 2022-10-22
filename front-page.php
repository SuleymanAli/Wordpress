<?php get_header(); ?>

<?php get_template_part('template-parts/slider') ?>
<!-- Blog -->
<div id="blog">
  <div class="container">
    <div class="row border-bottom pb-4 mb-4">
      <div class="col-lg-9">
        <h4 class="breaking-news mt-5 mb-5 pl-3">Most Viewed Posts</h4>
        <div class="row">
          <?php 
            $photograpyPosts = postsByCategory('photography');
            while($photograpyPosts->have_posts()) : $photograpyPosts->the_post();
             ?>
          <div class="col-lg-4 border-right">
            <?php get_template_part('template-parts/card'); ?>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="col-lg-3">
        <h4 class="popular-post mt-5 mb-5 pl-3">Popular Titles</h4>
        <div class="row">
          <div class="col-lg-12">
            <img src="<?= AQUILA_BUILD_IMG_URI ?>/sidebar1.png" class="img mb-2">
            <img src="<?= AQUILA_BUILD_IMG_URI ?>/sidebar2.png" class="img mb-2">
            <img src="<?= AQUILA_BUILD_IMG_URI ?>/sidebar3.png" class="img mb-2">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row border-bottom pb-4 mb-4">
      <?php 
            $photograpyPosts = postsByCategory('fashion');
            while($photograpyPosts->have_posts()) : $photograpyPosts->the_post();
             ?>
      <div class="col-lg-3 border-right">
        <?php get_template_part('template-parts/card'); ?>
      </div>
      <?php endwhile; ?>

      <div class="col-lg-3">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
      </div>
    </div>
    <div class="row pb-4 mb-4">
      <div class="col-lg-9">
        <div class="row border-bottom pb-4 mb-4">
          <?php 
            $photograpyPosts = postsByCategory('cooking');
            while($photograpyPosts->have_posts()) : $photograpyPosts->the_post();
             ?>
          <div class="col-lg-4 border-right">
            <?php get_template_part('template-parts/card'); ?>
          </div>
          <?php endwhile; ?>
        </div>
        <div class="row">
          <?php 
            $photograpyPosts = postsByCategory('travel');
            while($photograpyPosts->have_posts()) : $photograpyPosts->the_post();
             ?>
          <div class="col-lg-4 border-right">
            <?php get_template_part('template-parts/card'); ?>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="row">
          <div class="col-lg-12">
            <h5 class="popular-post-second pl-3 mb-3">Popular Posts</h5>
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>