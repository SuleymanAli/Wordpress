<?php 
  $menu_class     = \Aquila_Theme\Inc\Menus::get_instance();
  $header_menu_id = $menu_class->get_menu_id( 'footer-menu' );
  $header_menus   = wp_get_nav_menu_items( $header_menu_id ); 
?>

<!-- Footer -->
<footer class="mt-auto">
  <div class="container">
    <div class="row py-4">
      <div class="col-lg-4">
        <a href="<?= get_home_url(); ?>">
          <h1 class="text-center text-lg-left navbar-brand">
            <?php 
            if (function_exists('the_custom_logo')) {
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            }
          ?>
            <img class="img-fluid mb-3 mx-auto logo" src="<?= isset($image[0]) ? $image[0] : null; ?>" alt="logo">
          </h1>
        </a>
      </div>
      <div class="col-lg-8">
        <div class="copyright text-center text-lg-right">
          <p class="">Copyright line 2021 &copy;</p>
        </div>
        <div class="footer-menu">
          <ul class="nav justify-content-center justify-content-lg-end">
            <?php
              if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
                foreach ( $header_menus as $menu_item ) {      
            ?>
            <li class="nav-item">
              <a href="<?php echo esc_url( $menu_item->url ); ?>" class="nav-link"
                title="<?php echo esc_attr( $menu_item->title ); ?>">
                <?php echo esc_html( $menu_item->title ); ?>
              </a>
            </li>
            <?php 
                }
              } 
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>