<div class="blog-box mb-4 position-relative">
  <a class="d-flex flex-column" href="<?= get_permalink(); ?>">
    <!-- Image -->
    <div>
      <?php 
      the_post_custom_thumbnail(
        get_the_ID(),
        'featured-thumbnail',
        [
          'sizes' => '(max-width: 350px) 350px, 233px',
          'class' => 'img attachment-featured-large size-featured-image'
        ]
      )
      ?>
    </div>
    <!-- Content: Date, Tag, Category, Content, Title -->
    <div class="blog-box-detail">
      <div class="blog-box-hashtag d-flex justify-content-between">
        <!-- Tag -->
        <?php if(has_tag()): ?>
        <div>
          <?= '#' . get_the_tags()[0]->name ?>
        </div>
        <?php endif; ?>
        <!-- Time -->
        <?php the_time('F j, Y') ?>
      </div>
      <!-- Title -->
      <h5 class="blog-box-heading">
        <?php the_title()  ?>
      </h5>
      <!-- Excerpt -->
      <div class="blog-box-text">
        <?php the_excerpt(); ?>
      </div>
      <!-- Category -->
      <?php 
        if(!(is_single() || is_front_page())): 
          $category = get_the_category(); 
      ?>
      <div
        class="<?php if(!has_post_thumbnail()) echo 'blog-box-category--bottom'; ?> blog-box-category bg-danger text-white rounded position-absolute">
        <span>
          <?= $category[0]->cat_name; ?>
        </span>
      </div>
      <?php endif; ?>
    </div>
  </a>
</div>

<!-- the_category() -->
<!-- the_meta() -->
<!-- has_excerpt() -->
<!-- the_content()  -->
<!-- the_time()  -->
<!-- permalink_anchor() -->