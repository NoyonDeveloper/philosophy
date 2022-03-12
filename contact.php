<?php
/**
 * Template Name: Contact Page
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
            
            <div>
                <?php
                if(is_active_sidebar("contact-maps")){
                    dynamic_sidebar("contact-maps");
                }
                ?>
            </div>

                <?php the_content(); ?>

                <div class="row block-1-2 block-tab-full">
                    <?php
                    if(is_active_sidebar("contact-info")){
                        dynamic_sidebar("contact-info");
                    }
                    ?>            
                </div>

                <h3><?php _e( "Say Hello.", "philosophy" ) ?></h3>
                <!--
                    /**
                    * Contact Form 7 Design Is Perfect Please Markup Code Plugin Insert
                    */
                -->
                <?php
                if(get_field("contact_form_shortcode")){
                    echo do_shortcode(get_field("contact_form_shortcode"));
                }
                ?>
            </div>
        </article>
    </section>

<?php get_footer(); ?>