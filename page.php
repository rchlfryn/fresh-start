<?php get_header(); ?>
	<div class="inner-content wrap cf">
			<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="article-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>

					<section class="training entry-content cf" itemprop="articleBody">
						<?php
							// the content (pretty self explanatory huh)
							the_content();
						?>
					</section>
				</article>
				<?php endwhile;  ?>
				<?php endif; ?>
			</main>
	</div>
<?php get_footer(); ?>

