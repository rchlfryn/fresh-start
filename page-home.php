<?php
/*
 Template Name: Home Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

	<?php 
		// vars
		$main_image = get_field('main_image');
		$img1 = get_field('bottom_right');
		$img2 = get_field('bottom_center');
		$img3 = get_field('bottom_left');
	?>

			<div id="content" class="home">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<section class="entry-content cf">
								<div id="home-one">
									<button class="overlay-button">Sign up</button>
									<img src="http://placehold.it/350x150">
								</div>
								<div id="home-three">
									<div class="three-img"><button class="overlay-button">Sign up</button><img src="http://placehold.it/350x150"></div>
									<div class="three-img"><button class="overlay-button">Sign up</button><img src="http://placehold.it/350x150"></div>
									<div class="three-img"><button class="overlay-button">Sign up</button><img src="http://placehold.it/350x150"></div>
								</div>
							</section>
						</main>

				</div>

			</div>


<?php get_footer(); ?>
