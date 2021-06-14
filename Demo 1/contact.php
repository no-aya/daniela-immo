<!DOCTYPE html>
<html dir="ltr" lang="fr" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
	<?php include("components.html");?>
	<!-- Document Title
	============================================= -->
	<title>Contactez-nous || Majestic Marakech lovcation et vente des villas à Marrakech</title>

	<style>
	.contact-section {
		position: absolute;
		display: block;
		top: 0;
		right: 0;
		width: 50%;
		padding: 60px 60px 60px 180px;
		z-index: 0;
	}
	.contact-image {
		position: relative;
		width: 60%;
		margin-top: 30px;
		z-index: 2;
		box-shadow: 0 0 40px rgba(0,0,0,.3);
	}
	@media (max-width: 991px) {
		.contact-section {
			position: relative;
			display: block;
			width: 100%;
			padding: 20px;
		}
		.contact-image {
			width: 100%;
			margin-top: 0;
		}
	}
	</style>

</head>

<body class="stretched side-push-panel">
	<?php include("header.html");?>

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark page-title-center include-header include-topbar" style="background: url('assets/images/front-60be472c54ce37f39.jpg') no-repeat center center / cover; padding: 160px 0;" data-center="background-position: 0px 50%;" data-top-bottom="background-position:0px 0%;">

			<div class="container clearfix">
				<h1>Contactez-nous</h1>
				<?php include("breadcrumb.html")?>
			</div>

			<div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
					<div class="video-overlay" style="background: rgba(0,0,0,0.6);"></div>
				</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div style="position: relative;">
						<img src="assets/images/location-longue-duree-villa-marrakech-route-d-amizmiz-vmaami561-8.jpg" alt="Image" class="contact-image">
						<div class="contact-section dark bg-color">
							<div class="p-5 p-lg-0" style="font-size: 15px; line-height: 1.7;">
								<address style="line-height: 1.7;">
								<span class="fw-light">Addresse:</span><br>
								<span class="h6 text-white ls1 fw-normal">
									Résidence Hivernage Garden, <br> Rue Camille Cabana, Marrakech - Maroc
								</span>
								</address>
								<span class="fw-light">Nos numéros :</span><br>
								<a href="tel:+2125-244-6490" class="h6 text-white ls1 fw-normal">+212 5 24 456 490</a><br>
								<a href="tel:+2126-942-0600" class="h6 text-white ls1 fw-normal">+212 6 94 200 600</a><br><br>

								<span class="fw-light">Email:</span><br>
								<a href="mailto:karim@kna.ma" class="h6 text-white ls1 fw-normal">karim@kna.ma</a>
							</div>
						</div>
					</div>
					<div class="clear topmargin"></div>

					<div class="row align-items-stretch mx-0 topmargin-lg" style="box-shadow: 0 0 40px rgba(0,0,0,.06)">
						<div class="col-md-6 px-0 min-vh-25">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13589.52387821879!2d-8.0150749!3d31.6234179!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe204afb51cd7d004!2sKNA%20Immobilier%20de%20luxe%20-%20Villa%20%C3%A0%20vendre%20Marrakech!5e0!3m2!1sen!2sma!4v1623316035578!5m2!1sen!2sma" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						<div class="col-md-6">
							<div class="col-padding">
								<div class="quick-contact-widget form-widget clearfix">

									<h3 class="text-capitalize ls1 fw-normal">Contactez-nous</h3>

									<div class="form-result"></div>

									<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form mb-0">

										<div class="form-process">
											<div class="css3-spinner">
												<div class="css3-spinner-scaler"></div>
											</div>
										</div>

										<input type="text" class="required sm-form-control input-block-level not-dark" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Nom complet" />

										<input type="email" class="required sm-form-control email input-block-level not-dark" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Adresse email" />

										<input type="text" class="required sm-form-control input-block-level not-dark" id="quick-contact-form-phone" name="quick-contact-form-phone" value="" placeholder="Telephone" />

										<textarea class="required sm-form-control input-block-level not-dark short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="5" cols="30" placeholder="Comment pourrons-nous vous aider?"></textarea>

										<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
										<input type="hidden" name="prefix" value="quick-contact-form-">

										<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-rounded m-0" value="submit">Envoyer le message</button>

									</form>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div><!-- .content-wrap end -->
		</section><!-- #content end -->
		<?php include("footer.html");?>
</body>
</html>