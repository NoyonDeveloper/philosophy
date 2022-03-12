<?php
/**
 * Template Name: About Us Page
 */
the_post();
get_header(); ?>

    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <article class="row format-standard">
            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <?php the_post_thumbnail("large"); ?>
                </div>
            </div>
            <div class="col-full s-content__main">

                <?php the_content(); ?>

                <div class="row block-1-2 block-tab-full">
                    <?php
                    if(is_active_sidebar("about-us")){
                        dynamic_sidebar("about-us");
                    }
                    ?>            
                </div>
            </div>
        </article>
    </section>

<?php get_footer(); ?>