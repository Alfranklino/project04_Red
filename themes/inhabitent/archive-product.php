<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<?php while (have_posts()) : the_post(); ?>

			<?php
			$taxonomy = 'product-type';

			// Get the term IDs assigned to post.
			$post_terms = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));
			$post_terms = array_unique($post_terms);
			// Separator between links.
			$separator = ', ';

			if (!empty($post_terms) && !is_wp_error($post_terms)) {



				$term_ids = implode(',', $post_terms);

				$terms = wp_list_categories(array(
					'title_li' => '',
					'style'    => 'none',
					'echo'     => false,
					'taxonomy' => $taxonomy,
					'include'  => $term_ids
				));


				$terms = rtrim(trim(str_replace('<br />',  $separator, $terms)), $separator);

				// Display post categories.

				echo  $terms;
			}
			?>

		<?php endwhile; ?>







		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="taxonomy-description">', '</div>');
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php
				get_template_part('template-parts/content');
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>