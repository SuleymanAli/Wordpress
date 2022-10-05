<?php get_header(); ?>
<!-- <br> -->
<!-- Front Page (Home) - <?= is_front_page(); ?> -->
<!-- <br> -->
<!-- Blog Home (Blog) - <?= is_home(); ?> -->
<!-- <br> -->

<h1>
  <?php 
  if(is_home() && !is_front_page()) {
    single_post_title();
  }
  ?>
</h1>
<?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        the_title( '<h1 class="entry-title">', '</h1>' );
        ?>
<div class="entry-content ">
  <?php the_content(); ?>
  <a href="<?php the_permalink() ?>">
    Read more
  </a>
</div>
<?php
      }
    }
    ?>
<?php get_footer(); ?>