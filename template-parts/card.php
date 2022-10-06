<div class="blog-box mb-4 position-relative">
  <!-- Image -->
  <?php the_post_custom_thumbnail(
						get_the_ID(),
						'featured-thumbnail',
						[
							'sizes' => '(max-width: 350px) 350px, 233px',
							'class' => 'img attachment-featured-large size-featured-image'
						]
					)
					?>
  <!-- Content: Date, Tag, Category, Content, Title -->
  <div class="blog-box-detail">
    <div class="blog-box-hashtag d-flex justify-content-between">
      <div>
        <?php the_tags('#', ' ') ?>
      </div>
      <?php the_time('F j, Y') ?>
    </div>
    <h5 class="blog-box-heading">
      <?php the_title()  ?>

    </h5>
    <div class="blog-box-text">
      <a href="<?php esc_url(the_permalink()) ?>">
        <?php the_excerpt() ?>
      </a>
    </div>
    <div class="blog-box-category bg-danger text-white rounded position-absolute">
      <?php the_category(' ') ?>
    </div>
  </div>
</div>

<!-- the_category() -->
<!-- the_meta() -->
<!-- has_excerpt() -->
<!-- the_content()  -->
<!-- the_time()  -->
<!-- permalink_anchor() -->