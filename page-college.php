<?php
/*
 Template Name: College Page
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
?><?php get_header(); ?>

<html>
<head>
    <title></title>
</head>

<body>
    <div id="staff">
        <div class="inner-content 8wrap cf">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <header class="article-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>

            <section class="entry-content cf" itemprop="articleBody"><?php
                 // the content (pretty self explanatory huh)
                the_content();?><?php endwhile; ?><?php endif; ?>


                <?php
                  $college_query = new WP_Query(
                  array(
                  'post_type' => 'custom_type',
                  'posts_per_page' => -1,
									'meta_key' => 'order',
									'orderby'	=> 'meta_value_num',
                  'order' => 'ASC',
                  'tax_query' => array(
                        array(
                        'taxonomy' => 'custom_cat',
                        'field' => 'slug',
                        'terms' => 'college'
                        )
                  ))
                  );
                                        
                  if ( have_posts() ) :               
                   ?>
                   
            </section>
             <section class="entry-content cf">

                <h3>College Prospects</h3><?php while($college_query->have_posts()) : $college_query->the_post(); ?>

                <article class="staff-grid">
                    <div class="staff-img">
                        <?php if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it. ?><?php the_post_thumbnail('medium'); ?><?php endif; ?>
                    </div>

                    <h4 class="staff-name"><?php the_title(); ?></h4>

                    <div class="staff-bio">
                        <?php the_content(); ?>
                    </div>
                </article><?php endwhile; ?><!-- end of the loop -->
                <?php wp_reset_postdata();?>

                <div class="clearfix"></div>
             </section>

                
        </div>
    </div><?php get_footer(); ?>
</body>
</html>
