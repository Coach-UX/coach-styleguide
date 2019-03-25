<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Coach
 * @subpackage Coach Styleguide
 * @since 1.0
 */
get_header();
 ?>

<?php get_sidebar(); ?>

<div class="content-container" id="ajax">
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!--
      <a href="<?php echo home_url(); ?>">
    		<img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/lockup-sm.png">
    	</a> -->


<!-- fixed page navigation (moved next/previous to footer.php) -->
						<?php
						/* Start the Loop */
						// while ( have_posts() ) : the_post();
            //
						// 	get_template_part( 'template-parts/post/content', get_post_format() );
            //
            //
						// endwhile; // End of the loop.
						?>

<!-- regular page navigation -->
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );


				the_post_navigation( array(
					'prev_text' =>
          // '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span>
              '<span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) .
                  '<span class="nav-title-icon-wrapper"> <img src="http://styleguide.coach/wp-content/uploads/2018/08/line.png" class="icon icon-arrow-right">
              </span></span>
                  <span class="nav-title">%title</span>',

          'next_text' =>
          // '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span>
          '<span aria-hidden="true" class="nav-subtitle">
            <span class="nav-title-icon-wrapper"> <img src="http://styleguide.coach/wp-content/uploads/2018/08/line.png" class="icon icon-arrow-left">
          </span>' . __( 'Previous', 'twentyseventeen' ) . '</span>
          <span class="nav-title">%title
            </span>',
        ) );



			endwhile;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
 // Start the Loop
// while ( have_posts() ) : the_post();
//
// 	the_post_navigation( array(
// 		'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
// 		'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
// 	) );
//
// endwhile;
 // End of the loop.
?>



<?php get_footer();
