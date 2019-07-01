<?php
/**
 * The template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>

<div class="container">
  <div class="row" id="primary">

    <main id="content" class="col-sm-8">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php bootstrap2wordpress_post_nav(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div><!-- #primary -->
</div><!-- #container -->


<?php get_footer(); ?>
