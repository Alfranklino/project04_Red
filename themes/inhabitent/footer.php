<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<section class="contact-info">
		<p class="title">CONTACT INFO</p>
		<ul class="li-group group-contact">
			<li class="li-item"><i class="fas fa-envelope"></i><span> info@inhabitent.com</span></li>
			<li class="li-item"><i class="fas fa-phone fa-flip-horizontal"></i> <span> 778-456-7891</span></li>
			<li class="li-item"><i class="fab fa-facebook-square spaced"></i><i class="fab fa-twitter-square spaced"></i><i class="fab fa-google-plus-square spaced"></i></li>
		</ul>
	</section>

	<section class="business-hours">
		<p class="title">BUSINESS HOURS</p>
		<ul class="li-group group-business">
			<li class="li-item"><strong>Monday-friday:</strong><span> 9am to 5pm</span></li>
			<li class="li-item"><strong>Saturday:</strong><span> 10am to 2pm</span></li>
			<li class="li-item"><strong>Sunday:</strong><span> closed</span></li>
		</ul>
	</section>

	<section class="logo">
		<?php $src= get_template_directory_uri() . '/images/logos/inhabitent-logo-text.svg'?>
		<?php echo "<img src= {$src}>"?>
	</section>

	<section class="copyright">
		<p>COPYRIGHT &copy; 2019 INHABITENT</p>
	</section>


</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>