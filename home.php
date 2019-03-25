
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
    <link rel="stylesheet" href="css/home.css">
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
           <li id="menu-1"><a class="hover-1 highlight" onclick="menu_4()" href="http://styleguide.coach/introduction/">Voice & Tone</a></li>
           <li id="menu-2"><a class="hover-2 disabled" onclick="menu_2()">Logo Guidelines</a></li>
           <li id="menu-2"><a class="hover-3 disabled" onclick="menu_2()">Signature Guidelines</a></li>
           <li id="menu-2"><a class="hover-4 disabled" onclick="menu_2()">UX Components</a></li>

        </ul>
      </div>
</div>

  <script src="js/index.js"></script>
  <?php wp_footer(); ?>

  </body>
  </html>
