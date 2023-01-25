<?php
/**
 * The template for displaying Search Results pages.
 * @package Gym Training Coach
 */

get_header(); ?>

<main role="main" id="skip_content">
    <div class="container">
        <?php
        $gym_training_coach_layout_option = get_theme_mod( 'gym_training_coach_layout_options','Right Sidebar');
        if($gym_training_coach_layout_option == 'One Column'){ ?>
            <div id="blog_sec" class="blog-section pt-5">
                <?php if(get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Top' || get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Both Top & Bottom'){ ?>
                    <?php if( get_theme_mod( 'gym_training_coach_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php gym_training_coach_pagination_type(); ?>
                        </div>
                    <?php } ?>
                <?php } ?>
                <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','gym-training-coach'), esc_html( get_search_query() ) ); ?></h1> 
                <?php gym_training_coach_blog_post_content(); ?>
                <?php if(get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Bottom' || get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Both Top & Bottom'){ ?>
                    <?php if( get_theme_mod( 'gym_training_coach_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php gym_training_coach_pagination_type(); ?>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php }else if($gym_training_coach_layout_option == 'Grid Layout'){ ?>
            <div class="row">
                <div id="blog_sec" class="blog-section col-lg-8 col-md-8 pt-5">
                    <?php if(get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Top' || get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Both Top & Bottom'){ ?>
                        <?php if( get_theme_mod( 'gym_training_coach_enable_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php gym_training_coach_pagination_type(); ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','gym-training-coach'), esc_html( get_search_query() ) ); ?></h1> 
                    <div class="row">
                        <?php if ( have_posts() ) :
                            /* Start the Loop */          
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' );
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                    </div>
                    <?php if(get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Bottom' || get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Both Top & Bottom'){ ?>
                        <?php if( get_theme_mod( 'gym_training_coach_enable_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php gym_training_coach_pagination_type(); ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
            </div>
        <?php }else if($gym_training_coach_layout_option == 'Left Sidebar'){ ?>
            <div class="row">
                <div class="<?php if( get_theme_mod( 'gym_training_coach_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4"<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php get_sidebar(); ?></div>

                <div id="blog_sec" class="<?php if( get_theme_mod( 'gym_training_coach_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8 blog-section pt-5"<?php } else { ?>col-lg-9 col-md-8 pt-5 <?php } ?>">
                    <?php if(get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Top' || get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Both Top & Bottom'){ ?>
                        <?php if( get_theme_mod( 'gym_training_coach_enable_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php gym_training_coach_pagination_type(); ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','gym-training-coach'), esc_html( get_search_query() ) ); ?></h1> 
                    <?php gym_training_coach_blog_post_content(); ?>
                    <?php if(get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Bottom' || get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Both Top & Bottom'){ ?>
                        <?php if( get_theme_mod( 'gym_training_coach_enable_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php gym_training_coach_pagination_type(); ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        <?php }else if($gym_training_coach_layout_option == 'Right Sidebar'){ ?>
            <div class="row">
                <div id="blog_sec" class="<?php if( get_theme_mod( 'gym_training_coach_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8 blog-section pt-5"<?php } else { ?>col-lg-9 col-md-8 pt-5 <?php } ?>">
                    <?php if(get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Top' || get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Both Top & Bottom'){ ?>
                        <?php if( get_theme_mod( 'gym_training_coach_enable_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php gym_training_coach_pagination_type(); ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','gym-training-coach'), esc_html( get_search_query() ) ); ?></h1> 
                    <?php gym_training_coach_blog_post_content(); ?>
                    <?php if(get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Bottom' || get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Both Top & Bottom'){ ?>
                        <?php if( get_theme_mod( 'gym_training_coach_enable_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php gym_training_coach_pagination_type(); ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="<?php if( get_theme_mod( 'gym_training_coach_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4"<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php get_sidebar(); ?></div>
            </div>
        <?php } else {?>
            <div class="row">
                <div id="blog_sec" class="<?php if( get_theme_mod( 'gym_training_coach_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8 blog-section pt-5"<?php } else { ?>col-lg-9 col-md-8 pt-5  <?php } ?>">
                    <?php if(get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Top' || get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Both Top & Bottom'){ ?>
                        <?php if( get_theme_mod( 'gym_training_coach_enable_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php gym_training_coach_pagination_type(); ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','gym-training-coach'), esc_html( get_search_query() ) ); ?></h1> 
                    <?php gym_training_coach_blog_post_content(); ?>
                    <?php if(get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Bottom' || get_theme_mod('gym_training_coach_post_pagination_position', 'Bottom') == 'Both Top & Bottom'){ ?>
                        <?php if( get_theme_mod( 'gym_training_coach_enable_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php gym_training_coach_pagination_type(); ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="<?php if( get_theme_mod( 'gym_training_coach_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4"<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php get_sidebar(); ?></div>
            </div>
        <?php }?>
    </div>
</main>
<div class="clearfix"></div>

<?php get_footer(); ?>