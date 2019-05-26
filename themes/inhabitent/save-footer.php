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

<style>
	footer {
		height: 250px;
		padding-left: 40px;
		padding-right: 40px;
		padding-top: 30px;
		background-image: url($path__bkg-footer);
		display: grid;
		grid-template-columns: 1fr 1fr 1fr 1fr;
		grid-template-rows: 4fr 1fr;
		color: white;
		font-family: 'Merriweather-normal';

		.spaced {
			margin-right: 10px;
		}

		.li-group li {
			display: block;
		}

		.title {
			color: $color__title-footer;
			margin-top: 0px;
			margin-bottom: 15px;
			font-family: 'Novecento-bold'
		}

		section {
			ul {
				margin-left: 0px;
				padding-left: 0px;
			}

			.li-item {
				margin-bottom: 8px;
			}
		}

		.contact-info {
			grid-column: 1/2;
			grid-row: 1/2;
		}

		.business-hours {
			grid-column: 2/3;
			grid-row: 1/2;
		}

		.logo {
			grid-column: 4/5;
			grid-row: 1/2;
		}

		.copyright {
			grid-column: 1/5;
			grid-row: 2/3;
			justify-self: center;
			font-family: 'Novecento-normal'
		}
	}
</style>