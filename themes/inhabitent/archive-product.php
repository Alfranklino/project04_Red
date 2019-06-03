<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">



		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
				// the_archive_title('<h1 class="page-title">', '</h1>');


				// the_archive_description('<div class="taxonomy-description">', '</div>');
				?>

				<h1 class="title">SHOP STUFF</h1>
			</header><!-- .page-header -->

			<?php $bob = ['taxonomy' => 'product-type', 'hide_empty' => 0,];
			$products_types = get_terms($bob);
			?>

		<?php endif; ?>

		<section class="categories-links">
			<?php foreach ($products_types as $types) : ?>
				<a class="product-category" href="<?php echo get_term_link($types); ?>">
					<p><?php echo $types->name; ?></p>
				</a>
				<!-- <?php echo get_term_thumbnail($types->term_taxonomy_id) ?>
	  							<?php echo category_description($types->term_taxonomy_id); ?>  -->
			<?php endforeach; ?>
		</section>



		<section class="products">
			<div class="products-container">
				<?php while (have_posts()) : the_post(''); ?>

					<?php if (has_post_thumbnail()) : ?>

						<div class="product-square">
							<div class="product-image">
								<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
							</div>
							<div class="product-meta">
								<p><?php echo the_title(); ?></p>
								<p><?php echo CFS()->get('price'); ?></p>

							</div>
						</div>



					<?php endif;
			endwhile;

			?>

		</section><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>