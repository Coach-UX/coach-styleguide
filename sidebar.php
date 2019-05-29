
<div id="left-nav" class="left-nav">
	<a href="<?php echo home_url(); ?>">
		<img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo-coach.svg">
	</a>
	<img id="hamburger-menu" onclick="toggle_sidebar()" class="menu-icon" src="<?php echo get_bloginfo('template_directory'); ?>/img/menu.png">
	<div id="accordion" class="accordion">

		<!-- get category name of active post for sidebar title-->
		<?php
		if (is_single( )) {
			$post_ID = $wp_query->posts[0]->ID;
			$all_cats_of_post = get_the_category($post_ID);
			$first_cat_name = $all_cats_of_post[0]->cat_name;
		?>
		<!-- render name of active category as sidebar title -->
		<div class="sidebar-title">
				<h4><?php echo $first_cat_name;?></h4>
		</div>


				<!-- get all posts from active category -->
				<?php
					$IDOutsideLoop = $post->ID;
					while( have_posts() ) {
								the_post();
					if(is_single()) {
							foreach( ( get_the_category() ) as $category )
								$my_query = new WP_Query('category_name=' . $category->category_nicename . '&orderby=title&order=asc&showposts=100');
							if( $my_query ) {
								while ( $my_query->have_posts() ) {
									$my_query->the_post();
									$currentClass=( is_single() && $IDOutsideLoop == $post->ID ) ? ' class="current-post" checked="checked" id="' . $category->slug . '"': '';

					?>

					<div class="section"<?php echo 'id="' . $category->slug . '"' ?>>
						<input type="radio" name="accordion-1" id="'<?php echo $cat->description ?>'" <?php echo $currentClass ?>/>
							<label <?php echo $currentClass ?>>
								<a href="<?php the_permalink(); ?>">
								<span><?php the_title(); ?></span>
									</a>
							</label>
						<div class="content" id="anchors">
							<?php if ( is_active_sidebar( 'table-of-contents' ) ) : ?>
						      <?php dynamic_sidebar( 'table-of-contents' ); ?>
						  <?php endif; ?>
						</div>
					</div>

				<?php }}}} ?>



		  <?php } ?>

 	</div> <!--.accordion -->
		<!-- <button id="hide-show" onclick="toggle_sidebar()">Hide menu</button> -->
</div> <!--.left-nav -->
