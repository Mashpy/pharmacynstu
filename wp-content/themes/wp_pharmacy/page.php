<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div style="margin-bottom: 60px" class="row marketing">
	
<div class="col-lg-3">
  
<?php get_sidebar( 'content' ); ?>

</div>
</div>
<div class="col-lg-9">
  <div class="widget well advanced-sidebar-menu">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );
					
				endwhile;
			?>
  </div>
</div>
</div>


<?php

get_footer();
