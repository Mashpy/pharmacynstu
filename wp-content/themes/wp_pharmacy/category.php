<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<div style="margin-bottom: 60px" class="row marketing">
<div class="col-lg-3">
  <div class="well clearfix" style="font-size:20px">
   <h4> <a href="/category/blog/">NSTU Pharma Blog</a></h4>
<<<<<<< HEAD
  <p style="font-size:14px; text-align:justify">  Welcome to our nstu pharma blog . Here you can share your knowledge, experience and ideas. </p>
  </div>
    <?php
 if (! is_active_sidebar( 'sidebar-6' ) ) : ?>

<?php else : ?>
<div class="widget well advanced-sidebar-menu">
<?php dynamic_sidebar( 'sidebar-6' ); ?>
<?php endif; ?></div>
=======
  <p style="font-size:14px; text-align:justify">  Welcome to our nstupharma blog . Here you can share your knowledge, experience and ideas. </p>
  </div>
>>>>>>> 02cbf4dbc4e2ca873c825c31dcd42c56ec818b10
</div>
<div class="col-lg-9">
			<?php if ( have_posts() ) : ?>


			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content' );

					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
</div>
</div>

<?php

get_footer();
