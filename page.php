<?php get_header() ?>
<?php while(have_posts()) : the_post(); ?>

<!-- Banner -->
<?php if(has_post_thumbnail()): ?>
<div class="banner mb-5">
  <div class="container-fluid">
    <div class="row">
      <div class="box col-lg-12 p-0">
        <!-- Banner: Image -->
        <?php the_post_thumbnail(); ?>
        <!-- Banner: Content -->
        <div class="content">
          <?php the_title('<h1 class="text-white text-center">', '</h1>'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="container">
  <div class="row">
    <div class="col-lg-10 mx-auto my-5 py-5">
      <?php if(!has_post_thumbnail()): ?>
      <?php the_title('<h1 class="mb-5">', '</h1>'); ?>
      <?php endif; ?>

      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php endwhile; ?>

<?php get_footer() ?>