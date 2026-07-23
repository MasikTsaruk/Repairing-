<?php
/*
        Template Name: Blog-Temp
    */
get_header();
?>

<div class="clearfix"></div>

<!--
===========================================================================
    Main Blog Section
===========================================================================
-->
<section class="container-fluid ui-content">
    <div class="row">
        <!--        
    Could be for later content like categories floated left like a sub menu
-->
    </div>
    <div class="row">
        <div class="main col-md-8">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="row post">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="col-sm-5 post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="col-sm-7">
                                <h3 class="post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php get_template_part('template/post-meta'); ?>
                                <p class="post-content"><?php the_excerpt(); ?></p>
                                <p class="text-right"><a class="btn btn-primary" href="<?php echo the_permalink(); ?>">Read More</a></p>
                            </div>
                        <?php else : ?>
                            <div class="col-sm-12">
                                <h3 class="post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php get_template_part('template/post-meta'); ?>
                                <?php the_content(); ?>
                                <?php
                                if (comments_open() || get_comments_number()) {
                                    comments_template();
                                }
                                ?>
                                <p class="text-right"><a class="btn btn-primary" href="all-pages/">Read More</a></p>
                            </div>
                        <?php endif; ?>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
        <div class="sidebar col-md-4">
            <?php if (is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="clearfix"></div>

<?php get_footer(); ?>