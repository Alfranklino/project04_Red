<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<?php while (have_posts()) : the_post(); ?>
			<!-- the_post_thumbnail(); -->

			
			<?php $featured_img_url = get_the_post_thumbnail_url();
			// echo ('<img src="' . $featured_img_url . '"/>');

			?>



			<?php get_template_part('template-parts/content', 'page'); ?>

		<?php endwhile;
	?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>