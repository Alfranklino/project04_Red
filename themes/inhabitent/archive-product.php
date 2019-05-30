<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


	<?php $bob = ['taxonomy' => 'product-type', 'hide_empty' => 0,];
      $products_types = get_terms($bob);
      ?>

      <?php foreach($products_types as $types):?>
      <a href="<?php  echo get_term_link($types);?>"><?php  echo $types->name;?></p></a>
	  <!-- <?php echo get_term_thumbnail($types->term_taxonomy_id) ?>
	  <?php echo category_description( $types->term_taxonomy_id ); ?>  -->
      <?php endforeach ;?>






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