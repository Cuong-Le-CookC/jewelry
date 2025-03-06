<?php include('partials/header.php') ?>

<?php include('partials/bar.php') ?>

<?php include('partials/slider.php') ?>

<?php include('partials/gioithieu.php') ?>

<?php include('partials/Sanpham/category.php') ?>


<section id="quotation" class="align-center pb-5 mb-5">
	<div class="inner-content">
		<h2 class="section-title divider">Quote of the day</h2>
		<blockquote data-aos="fade-up">
			<q>“Jewelry is like the perfect spice – it always complements what’s already there.”</q>
			<div class="author-name">Diane Von Furstenberg</div>
		</blockquote>
	</div>
</section>



<section id="latest-blog" class="py-5 my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="section-header align-center"></div>
				<div class="title">
					<span>Read our articles</span>
				</div>
				<h2 class="section-title">Latest Articles</h2>
			</div>

			<div class="row">

				<div class="col-md-4">

					<article class="column" data-aos="fade-up">

						<figure>
							<a href="#" class="image-hvr-effect">
								<img src="images/post-img1.jpg" alt="post" class="post-image">
							</a>
						</figure>

						<div class="post-item">
							<div class="meta-date">Mar 30, 2021</div>
							<h3><a href="#">The Art of Jewelry Making</a></h3>

							<div class="links-element">
								<div class="categories">inspiration</div>
								<div class="social-links">
									<ul>
										<li>
											<a href="#"><i class="icon icon-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-twitter"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-behance-square"></i></a>
										</li>
									</ul>
								</div>
							</div><!--links-element-->

						</div>
					</article>

				</div>
				<div class="col-md-4">

					<article class="column" data-aos="fade-up" data-aos-delay="200">
						<figure>
							<a href="#" class="image-hvr-effect">
								<img src="images/post-img2.jpg" alt="post" class="post-image">
							</a>
						</figure>
						<div class="post-item">
							<div class="meta-date">Mar 29, 2021</div>
							<h3><a href="#">Jewelry Trends for 2021</a></h3>

							<div class="links-element">
								<div class="categories">inspiration</div>
								<div class="social-links">
									<ul>
										<li>
											<a href="#"><i class="icon icon-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-twitter"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-behance-square"></i></a>
										</li>
									</ul>
								</div>
							</div><!--links-element-->

						</div>
					</article>

				</div>
				<div class="col-md-4">

					<article class="column" data-aos="fade-up" data-aos-delay="400">
						<figure>
							<a href="#" class="image-hvr-effect">
								<img src="images/post-img3.jpg" alt="post" class="post-image">
							</a>
						</figure>
						<div class="post-item">
							<div class="meta-date">Feb 27, 2021</div>
							<h3><a href="#">How to Care for Your Jewelry</a></h3>

							<div class="links-element">
								<div class="categories">inspiration</div>
								<div class="social-links">
									<ul>
										<li>
											<a href="#"><i class="icon icon-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-twitter"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-behance-square"></i></a>
										</li>
									</ul>
								</div>
							</div><!--links-element-->

						</div>
					</article>

				</div>

			</div>

			<div class="row">

				<div class="btn-wrap align-center">
					<a href="#" class="btn btn-outline-accent btn-accent-arrow" tabindex="0">Read All Articles<i
							class="icon icon-ns-arrow-right"></i></a>
				</div>
			</div>

		</div>
	</div>
	</div>
</section>


<?php include('partials/footer.php') ?>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
	crossorigin="anonymous"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="js/tabs.js"></script>
<script>
	$(document).ready(function () {
		$('.main-slider').slick({
			prevArrow: $('.prev'),
			nextArrow: $('.next'),
			autoplay: true,
			autoplaySpeed: 3000,
			dots: true,
			fade: true,
			cssEase: 'linear'
		});
	});
</script>