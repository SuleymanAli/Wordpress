<?php
/**
 * Bootstraps the Theme.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class API {
	use Singleton;

	protected function __construct() {
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions. 
		 */
		add_action( 'rest_api_init', [ $this, 'search' ] );
    add_filter('wp_insert_post_data', [ $this, 'makeNotePrivate'], 10, 2);
	}

	public function search()
	{
    register_rest_route('blog/v1', '/search', [
      'methods' => 'GET',
      'callback' => [ $this, 'searchResult']
    ]);
	}

  public function searchResult($data)
  {
    $query = new \WP_Query(array(
      'post_type' => ['post', 'page'],
      's' => $data['term']
    ));

    $result = [];

    while($query->have_posts()) : $query->the_post();
        $postTypeName = get_post_type();
        $postTags = ['tags' => []];
        $postCategories = ['categories' => []];

        // Create Array By Post Type
        if(! isset($result[$postTypeName])) $result[$postTypeName] = [];

        // Tags
        $tags = get_the_tags();
        if ($tags) {
          foreach($tags as $tag) {
            array_push($postTags['tags'], [
              'id' =>   $tag->term_id,
              'name' => $tag->name,
              'slug' => $tag->slug
            ]);
          }
        }

        // Categories
        $categories = get_the_category();
        if($categories) {
          foreach($categories as $category) {
            array_push($postCategories['categories'], [
              'id' =>   $category->term_id,
              'name' => $category->name,
              'slug' => $category->slug
            ]);
          }
        }

        // Merge Taxonomies
        $tax = array_merge($postTags, $postCategories);
        // Convert Post To Array Data Type
        $postArray = json_decode(json_encode(get_post()), true);
        // Total Result
        array_push($result[$postTypeName], array_merge($postArray, $tax));
    endwhile;
    
    return $result;
  }

  public function makeNotePrivate($data, $postarr) {
    if ($data['post_type'] == 'notes') {
      if(count_user_posts(get_current_user_id(), 'notes') > 4 AND !$postarr['ID']) {
        die("You have reached your note limit.");
      } 
  
      $data['post_content'] = sanitize_textarea_field($data['post_content']);
      $data['post_title'] = sanitize_text_field($data['post_title']);
    }
  
    if($data['post_type'] == 'notes' AND $data['post_status'] != 'trash') {
      $data['post_status'] = "private";
    }
    
    return $data;
  }
}