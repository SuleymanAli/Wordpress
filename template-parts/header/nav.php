<?php 
  $menu_class     = \Aquila_Theme\Inc\Menus::get_instance();
  $header_menu_id = $menu_class->get_menu_id( 'header-menu' );
  $header_menus   = wp_get_nav_menu_items( $header_menu_id ); 
?>


<ul class="navbar-nav">
  <?php
    if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
      foreach ( $header_menus as $menu_item ) {      
  ?>
  <li class="nav-item">
    <a href="<?php echo esc_url( $menu_item->url ); ?>" class="nav-link"
      target="<?php echo esc_attr( $link_target ); ?>" title="<?php echo esc_attr( $menu_item->title ); ?>">
      <?php echo esc_html( $menu_item->title ); ?>
    </a>
  </li>
  <?php 
      }
    } 
  ?>
</ul>
<!-- 
<nav class="navbar navbar-expand-lg navbar-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div id="navigation" class="collapse navbar-collapse flex-column">


    <?php
			if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
				?>
    <ul class="navbar-nav flex-column text-sm-center text-md-left">
      <?php
					foreach ( $header_menus as $menu_item ) {
            // 1. If Item Not A Child Directly
            if ( ! $menu_item->menu_item_parent ) {
              // 2. Prepare Item With Child(ren) Of This Item
							$child_menu_items   = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
							$has_children       = ! empty( $child_menu_items ) && is_array( $child_menu_items );
							$has_sub_menu_class = ! empty( $has_children ) ? 'has-submenu' : '';
							$link_target        = ! empty( $menu_item->target ) && '_blank' === $menu_item->target ? '_blank' : '_self';

							// Note_: Similar to $menu_item->target, there are other keys available in the $menu_item, such as classes. You can more key values if you need.
              // 3. And Display Only Non-parent and not-child(ren) Item
							if ( ! $has_children ) {
								?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>"
          target="<?php echo esc_attr( $link_target ); ?>" title="<?php echo esc_attr( $menu_item->title ); ?>">
          <?php echo esc_html( $menu_item->title ); ?>
        </a>
      </li>
      <?php	} else { ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url ); ?>" id="navbarDropdown"
          role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
          target="<?php echo esc_attr( $link_target ); ?>" title="<?php echo esc_attr( $menu_item->title ); ?>">
          <?php echo esc_html( $menu_item->title ); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
              // 4. And Display Those
										foreach ( $child_menu_items as $child_menu_item ) {
											$link_target = ! empty( $child_menu_item->target ) && '_blank' === $child_menu_item->target ? '_blank' : '_self';
											?>
          <a class="dropdown-item" href="<?php echo esc_url( $child_menu_item->url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>" title="<?php echo esc_attr( $child_menu_item->title ); ?>">
            <?php echo esc_html( $child_menu_item->title ); ?>
          </a>
          <?php } ?>
        </div>
      </li>
      <?php } ?>
      <?php
						}
					}
					?>
    </ul>
    <?php } ?>
    <hr>
    <ul class="social-list list-inline py-3 mx-auto">
      <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
    </ul>
  </div>
</nav>
<?php 
    ?> -->