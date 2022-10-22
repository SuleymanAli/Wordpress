<?php get_header(); ?>

<?php 
  // Like The Post
  if(isset($_POST['sample'])) {
    $likeCount = (int)(get_field('like_count'));
    $likeCount++;
    update_field('like_count', $likeCount);
} 
?>

<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) : the_post();
      ?>
      <!-- 1. Header -->
      <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
        <!-- Title -->
        <?php the_title( '<h1 class="entry-title mb-0">', '</h1>' ); ?>
        <!-- Likes -->
        <form method="POST" class="d-flex align-self-md-center flex-column flex-lg-row mt-3 mt-md-0">
          <button class="btn btn-sm btn-danger text-white" name="sample" value="1">
            <?= get_field('like_count') ? get_field('like_count') : ''; ?>
            <i class="fas fa-heart"></i>
          </button>
          <?php wp_nonce_field(); ?>
        </form>
      </div>

      <!-- 2. Image -->
      <?php if(has_post_thumbnail()): ?>
      <div class="image-wrapper">
        <?php 
        // Image
        the_post_custom_thumbnail(
          get_the_ID(),
          'featured-thumbnail',
          [
            'sizes' => '(max-width: 350px) 350px, 233px',
            'class' => 'img attachment-featured-large size-featured-image mb-4'
          ]
        );
        ?>
      </div>
      <?php endif; ?>

      <!-- Category And View Count, Author, Time -->
      <div class="d-flex flex-column flex-md-row justify-content-between my-4">
        <!-- Category -->
        <h3 class="entry-title mb-0">
          <i class="far fa-folder"></i>
          <?php the_category(' '); ?>
        </h3>
        <!-- View Count, Author And Time -->
        <div class="d-flex align-self-md-center flex-column flex-lg-row mt-3 mt-md-0">
          <?php 
              // Get the current value.
              $viewCount = (int) get_field('view_count');
              // Increase it.
              $viewCount++;
              // Update with new value.
              update_field('view_count', $viewCount); 
            ?>
          <div class="mr-3">
            <i class="fas fa-eye"></i>
            <i><?= $viewCount ?></i>
          </div>
          <div class="mr-3">
            <i class="fas fa-user"></i>
            <i><?php aquila_posted_by() ?></i>
          </div>
          <div>
            <i class="fas fa-clock"></i>
            <i><?php aquila_posted_on() ?></i>
          </div>
        </div>
      </div>

      <!-- 3. Content -->
      <div class="entry-content text-black-400 mb-5 py-3">
        <?php the_content(); ?>

        <!-- Extra: Likes, Views, Social Sharing And Tags -->
        <div class="d-flex mb-5">
          <div class="tags">
            <?php the_tags('Tags: ', ''); ?>
          </div>
        </div>

        <!-- Previous And Next Post Links -->
        <div class="d-flex justify-content-between">
          <div>
            <?php previous_post_link(); ?>
          </div>
          <div>
            <?php next_post_link(); ?>
          </div>
        </div>
      </div>

      <?php
      endwhile;
    }
    wp_reset_postdata();
    ?>
    </div>
    <div class="col-lg-3">
      <div>
        <p class="popular-post mb-5 pl-3">Related Posts</p>
        <?php 
        
        $related = get_posts( [
          'category__in' => wp_get_post_categories($post->ID), 
          'numberposts' => 4, 
          'post__not_in' => array($post->ID)
         ]);
         if( $related ) foreach( $related as $post ) {
          setup_postdata($post); 
        get_template_part( 'template-parts/card');
        }
        wp_reset_postdata(); 
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>


<style>
.entry-title {
  word-break: break-all;
}

.image-wrapper {
  height: auto;
  overflow: hidden;
}

@media screen and (min-width: 768px) {
  .image-wrapper {
    height: 400px;
  }
}

.tags a {
  border: 1px solid #0056b3;
  padding: 5px;
  margin-right: 8px;
}
</style>