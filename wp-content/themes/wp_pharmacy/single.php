<?php
/**
 * The Template for displaying all single posts
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
  <p style="font-size:14px; text-align:justify">  Welcome to our nstu pharma blog . Here you can share your knowledge, experience and ideas. </p>
  </div>
   <div class="well clearfix" style="font-size:11px">
  <a><h4>Recent Posts</h4></a>
<ul style="margin-left:-30px">
<?php
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>
</div>
</div>
<div class="col-lg-9">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
</div>
</div>


<?php
get_footer();
