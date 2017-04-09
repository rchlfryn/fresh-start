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

				<div class="inner-content wrap cf">

						<main id="home" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<section class="entry-content cf">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="main-content">
									<?php
										// the content (pretty self explanatory huh)
										the_content();
									?>
								</div>

							<?php endwhile; ?>
							<?php endif; ?>
								
                <div class="clearfix"></div>
							</section>
						</main>

				</div>



<?php get_footer(); ?>
