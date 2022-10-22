<?php get_header() ?>
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <form method="POST">
        <button class="btn btn-sm btn-success mb-4 d-flex justify-content-center" name="sample" value="1">Add
          Like</button>
        <?php wp_nonce_field(); ?>
      </form>
      <?php acf_form( $settings ); ?>

      <?php 
      _dump($_POST);
      if(isset($_POST['sample'])) {
        echo "Button Clicked";
        // function UpdateServiceField() {
          $likeCount = (get_field('likes'));
          update_field('likes', $likeCount++, get_the_ID());
        // }
        // add_action('acf/save_post', 'UpdateServiceField');
      }
      while(have_posts()): the_post();
        get_template_part( 'template-parts/card' );
        echo $likeCount;
      endwhile;

      ?>
    </div>
    <?php 
    if($_POST['post_submit']=='Submit'){
      $id = wp_insert_post([
        'post_title'=>$_POST['post_title'],
        'post_type'=>'fav_songs',
        'post_content'=>$_POST['post_desc'],
        'post_status' => 'publish',
        'comment_status' => 'closed',
        'ping_status' => 'closed']);
      } ?>

    <form id="song-entry" name="post_entry" method="post" action="<?php echo get_page_link('your template id') ?>">
      <p>
        <label>Title</label><br />
        <input type="text" id="post_title" name="post_title" />
      </p>
      <p>
        <label>Description</label><br />
        <input type="text" id="post_desc" name="post_desc" />
      </p>
      <p>
        <label>Artist</label><br />
        <input type="text" id="post_artist" name="post_artist" />
        <input type="hidden" name="post_type" id="post_type" value="post_type" />
        <input type="hidden" name="post_action" id="post_action" value="post_action" />
      </p>
      <p>
        <input type="submit" name="post_submit" value="Submit" />
      </p>
      <?php wp_nonce_field( 'new_song_nonce' ); ?>
  </div>
</div>

<?php get_footer() ?>