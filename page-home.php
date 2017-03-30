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
		$img1 = get_field('top_left');
		$img2 = get_field('bottom_left');
		$img3 = get_field('top_right');
		$img4 = get_field('bottom_right');
										
    $second_query = new WP_Query(
    array(
    'post_type' => 'custom_type',
    'posts_per_page' => -1,
    'orderby'=>'title',
    'order' => 'ASC',
    'tax_query' => array(
        array(
        'taxonomy' => 'custom_cat',
        'field' => 'slug',
        'terms' => 'affiliates'
        )
    ))
    );
									
	?>


				<div class="inner-content wrap cf">

						<main id="home" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<section class="entry-content cf">
								<div id="home-one">
									<?php echo do_shortcode('[metaslider id=445]'); ?> 
								</div>
								<div id="home-two">
									<div class="two-img" style="background: url(<?php echo $img1['url'];?>); background-size: cover;">
										<button onclick="location.href='/about'" class="overlay-button">About</button>
									</div>
									<div class="two-img" style="background: url(<?php echo $img2['url']; ?>); background-size: cover;">
										<button onclick="location.href='/training'" class="overlay-button">Training</button>
									</div>
								</div>
								<div id="home-two">
									<div class="two-img" style="background: url(<?php echo $img3['url'];?>); background-size: cover;">
										<button onclick="location.href='/about'" class="overlay-button">About</button>
									</div>
									<div class="two-img" style="background: url(<?php echo $img4['url']; ?>); background-size: cover;">
										<button onclick="location.href='/training'" class="overlay-button">Training</button>
									</div>
								</div>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="facebook">
									<?php
										// the content (pretty self explanatory huh)
										the_content();
									?>
								</div>

							<?php endwhile; ?>
							<?php endif; ?>
								

								<div class="clearfix"></div>
                <h3>Affiliates</h3>
                <div class="affiliates">
                <?php while($second_query->have_posts()) : $second_query->the_post(); ?>
								
                <article class="four-grid">
                    <div class="aff-logo">
                        <?php if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it. ?><a target="_blank" href="<?php the_field('website');?>"><?php the_post_thumbnail(); ?></a><?php endif; ?>

                        <div class="content">
                            <p class="aff-title"><a target="_blank" href="<?php the_field('website');?>"><?php the_title(); ?></a></p>
                        </div>
                    </div>
                </article><?php endwhile; ?><!-- end of the loop -->
                <?php wp_reset_postdata();?>
								</div>
                <div class="clearfix"></div>
							</section>
						</main>

				</div>



<?php get_footer(); ?>
