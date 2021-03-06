<?php
/**
 * Template Name: Full Width
 *
 */
get_header();
?>
	<div class="container-fluid" style="padding-left:0;padding-right:0;">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'fullwidth' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
	</div>

<?php get_footer();