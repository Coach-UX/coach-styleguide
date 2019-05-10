
  <?php
  /*

  * Template Name: Homepage

  */
  ?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?> class="no-js no-svg">
  <head>
  <title>Coach Styleguide<?php wp_title('/', true, 'left'); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/home.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/category-colors.css" rel="stylesheet">
  </head>

  <body <?php body_class(); ?>>

  <div class="home-container">
      <a class="logo-a" href="<?php echo home_url(); ?>">
        <!-- <div class="logo">

        </div> -->
    		<img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo-coach.svg">
    	</a>

      <div class="intro">
        <p>Welcome to the Coach Style Guide. You’ve come to the right place.
        </p>
      </div>

      <div class="menu">
        <ul>
          <li> <?php $category_ids = get_all_category_ids(); ?>
           <?php $args = array( 'orderby' => 'slug', 'parent' => 0 );
                 $categories = get_categories( $args ); foreach ( $categories as $category ) {
                   echo '<li><a class="highlight" id="' . $category->slug . '" href="' . get_category_link( $category ) . '">' . $category->name . '</a></li>';
                 } ?>
          </li>
        </ul>
      </div>
</div>

  <?php wp_footer(); ?>

  </body>
  </html>
