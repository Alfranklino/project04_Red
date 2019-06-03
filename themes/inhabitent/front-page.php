<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<?php if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

				</header>
			<?php endif; ?>


			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content'); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

		<section class="entry-content">
			<!-- Shop Stuff -->
			<?php $prod_Cat = ['taxonomy' => 'product-type', 'hide_empty' => 0,];
			$products_types = get_terms($prod_Cat);
			?>

			<section class="section_prod_cat">
				<h1 class="prod_cat_title"> SHOP STUFF </h1>
				<section class="prod_cat_list">
					<?php foreach ($products_types as $type) : ?>
						<article class="prod_cat">

							<?php echo get_term_thumbnail($type->term_taxonomy_id) ?>
							<?php echo category_description($type) ?>
							<a href="<?php echo get_term_link($type); ?>" class="term_link"><?php echo $type->name; ?> STUFF</a>
						</article>
					<?php endforeach; ?>
				</section>
			</section>

			<!-- Journal -->
			<section class="section_latest_posts">
				<h1 class="home-titles">inhabitent journal</h1>
				<section class="latest_posts-container">

					<?php $args = array('post_type' => 'post', 'posts_per_page' => 3 );
					$loop = new WP_Query($args); ?>

					<?php
					while ($loop->have_posts()) : $loop->the_post();
						echo	'<article class="a-post">';
						echo '<div class="latest-entry-thumbnail">';
						echo get_the_post_thumbnail();
						echo '</div>';
						echo '<div class="latest-entry-meta">';
						echo '<p class="meta">';
						echo get_the_date(__('d F Y'));
						echo ' / ';
						echo comments_number('0 Comments', '1 Comment', '% Comments');
						echo '</p>';
						echo '<h2><a class ="title_link" href="' . get_the_permalink() . '">';
						echo the_title();
						echo '</a></h2> ';
						echo '</div>';
						echo '<a class="latest-entry-button" href="' . get_permalink() . '">';
						echo 'READ ENTRY';
						echo '</a>';
						echo '</article>';
						?>
					<?php endwhile;
				wp_reset_query(); ?>

				</section>
			</section>

			<!-- Latest Adventures -->


			<?php $args = array('post_type' => 'adventure', 'hide_empty' => 0,) ?>

			<section class="section_adventures">
				<h1 class="adventures_title"> LATEST ADVENTURES </h1>
				<section class="adventures_list">

					<?php $loop = new WP_Query($args);

					while ($loop->have_posts()) : $loop->the_post(); ?>
						<article class="adventure">

							<img src="<?php the_post_thumbnail_url(); ?>">
							<a href="<?php echo esc_url(the_permalink()); ?>" class="term_link"><?php echo the_title() ?></a>
							<a class="readmore" href="<?php esc_url(the_permalink()) ?>">Read More</a>
						</article>


					<?php endwhile;
				wp_reset_query(); ?>

				</section>
			</section>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>