<?php

  if (!is_user_logged_in()) {
    wp_redirect(esc_url(site_url('/')));
    exit;
  }

  get_header();

  while(have_posts()) {
    the_post();
     ?>

<div class="container" id="notes">
  <div class="row my-5">
    <!-- Create New One -->
    <div class="col-lg-12">
      <div class="mb-5 border p-3 d-flex flex-column">
        <h2 class="mb-3">Create New Note</h2>
        <input class="mb-3 p-2" placeholder="Title" v-model="create.title">
        <textarea class="mb-3 p-2" placeholder="Your note here..." v-model="create.content"></textarea>
        <span class="btn btn-secondary mb-3 align-self-start" @click="createNote">Create Note</span>
        <span class="note-limit-message">Note limit reached: delete an existing note to make room for a new one.</span>
      </div>
    </div>

    <div class="col-lg-9 mx-auto pt-5">
      <h3 class="mb-4">My Notes:</h3>
      <ul class="" id="my-notes">
        <?php 
      $userNotes = new WP_Query([
        'post_type' => 'notes',
        'posts_per_page' => -1,
        'author' => get_current_user_id()
      ]);

      while($userNotes->have_posts()) {
        $userNotes->the_post(); ?>

        <li data-id="<?php the_ID(); ?>" class="d-flex flex-column border p-3 mb-4">
          <div class="d-flex align-items-center justify-content-between">
            <!-- Title -->
            <div class="d-flex">
              <input class="p-2 mb-3 border-0"
                value="<?php echo str_replace('Private: ', '', esc_attr(get_the_title())); ?>">
            </div>
            <!-- Actions -->
            <div class="d-flex">
              <!-- Enable Edit Mode -->
              <span class="badge badge-danger edit-note mr-3 px-2 py-1" @click="enableEditMode">
                <i class="fa fa-pencil" aria-hidden="true"></i> Edit
              </span>
              <!-- Delete -->
              <span class="badge badge-danger delete-note px-2 py-1" @click="deleteNoteByID(<?php the_ID() ?>)">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
              </span>
            </div>
          </div>
          <!-- Content -->
          <div class="d-flex">
            <textarea :typeable="true" rows="4" col="4"
              class="p-2 mb-3 border-0 w-50"><?php echo esc_textarea(get_the_content()); ?></textarea>
          </div>
          <!-- Update -->
          <span class="btn btn-success align-self-start" @click="updateNote(<?php the_ID() ?>)">
            Save
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </span>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>

<?php } ?>

<?php get_footer(); ?>