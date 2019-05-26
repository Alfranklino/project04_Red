<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
<?php dynamic_sidebar('footer-widget'); ?>


	<section class="logo">
		<?php $src = get_template_directory_uri() . '/images/logos/inhabitent-logo-text.svg' ?>
		<?php echo "<img src= {$src}>" ?>
	</section>

	<section class="copyright">
		<p>COPYRIGHT &copy; 2019 INHABITENT</p>
	</section>


</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>