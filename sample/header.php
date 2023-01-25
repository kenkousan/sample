<?php
/**
 * The Header for our theme.
 * @package Gym Training Coach
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <?php if(get_theme_mod('gym_training_coach_preloader',false) != '' || get_theme_mod( 'gym_training_coach_display_preloader',false) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
  <header role="banner" class="header-box">
    <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'gym-training-coach' ); ?></a>

  <div id="header">
    <?php if( get_theme_mod('gym_training_coach_show_topbar',false) != ''){ ?>
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-12"></div>
            <div class="col-lg-7 col-md-6 col-12 align-self-center">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 text-lg-start text-md-start text-center align-self-center">
                  <?php if ( get_theme_mod('gym_training_coach_email_address') != '' ) {?>
                    <i class="fas fa-envelope me-2"></i><span class="email-us"><a href="mailto:<?php echo esc_attr(get_theme_mod('gym_training_coach_email_address',''));?>"><?php echo esc_html('Email :', 'gym-training-coach'); ?> <?php echo esc_html(get_theme_mod('gym_training_coach_email_address',''));?></a></span>
                  <?php }?>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-lg-start text-md-start text-center align-self-center mb-lg-0 mb-md-0 mb-2">
                  <?php if ( get_theme_mod('gym_training_coach_topbar_location') != '' ) {?>
                    <i class="fas fa-map-marker-alt me-2"></i><span><?php echo esc_html('Location :', 'gym-training-coach'); ?> <?php echo esc_html(get_theme_mod('gym_training_coach_topbar_location',''));?></span>
                  <?php }?>
                </div>
              </div>
            </div>
            <?php if( get_theme_mod('gym_training_coach_social_links') != ''){ ?>
              <?php if( get_theme_mod('gym_training_coach_facebook_url') != '' || get_theme_mod( 'gym_training_coach_twitter_url') != '' || get_theme_mod( 'gym_training_coach_instagram_url') != '' || get_theme_mod( 'gym_training_coach_pinterest_url') != ''){ ?>
                <div class="col-lg-2 col-md-3 col-12 outer-social-icon text-center">
                  <div class="social-icon">
                    <?php if(get_theme_mod('gym_training_coach_facebook_url') != ''){ ?>
                      <a href="<?php echo esc_url(get_theme_mod('gym_training_coach_facebook_url')); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'gym-training-coach'); ?></span></a>
                    <?php }?>
                    <?php if(get_theme_mod('gym_training_coach_twitter_url') != ''){ ?>
                      <a href="<?php echo esc_url(get_theme_mod('gym_training_coach_twitter_url')); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'gym-training-coach'); ?></span></a>
                    <?php }?>
                    <?php if(get_theme_mod('gym_training_coach_instagram_url') != ''){ ?>
                      <a href="<?php echo esc_url(get_theme_mod('gym_training_coach_instagram_url')); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'gym-training-coach'); ?></span></a>
                    <?php }?>
                    <?php if(get_theme_mod('gym_training_coach_pinterest_url') != ''){ ?>
                      <a href="<?php echo esc_url(get_theme_mod('gym_training_coach_pinterest_url')); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php echo esc_html('Pinterest', 'gym-training-coach'); ?></span></a>
                    <?php }?>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php } ?>

    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-12 outer-logo align-self-end">
            <div class="logo text-center">
              <div class="row">
                <div class="<?php if( get_theme_mod( 'gym_training_coach_site_logo_inline') != '') { ?>col-lg-5 col-md-5 col-5<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                </div>
                <div class="<?php if( get_theme_mod( 'gym_training_coach_site_logo_inline') != '') { ?>col-lg-7 col-md-7 col-7 site-logo-inline"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if( get_theme_mod('gym_training_coach_site_title_enable',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) : ?>
                    <?php if( get_theme_mod('gym_training_coach_site_tagline_enable',true) != ''){ ?>
                      <p class="site-description"><?php echo esc_html($description); ?></p>
                    <?php }?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 col-12 align-self-center">
            <div class="row">
                <div class="<?php if( get_theme_mod( 'gym_training_coach_display_search', true) == true ) { ?> col-lg-10 col-md-8 col-6<?php } else { ?> col-lg-12 col-6 col-md-9 <?php } ?> align-self-center">
                  <?php if(has_nav_menu('primary')){ ?>
                    <div class="toggle-menu responsive-menu">
                      <button role="tab" onclick="gym_training_coach_menu_open()" class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('gym_training_coach_responsive_menu_open_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','gym-training-coach'); ?></span>
                      </button>
                    </div>
                    <div id="navbar-header" class="menu-brand primary-nav">
                      <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'gym-training-coach' ); ?>">
                        <?php
                          wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container_class' => 'main-menu-navigation clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 ps-0">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) );
                        ?>
                      </nav>
                      <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="gym_training_coach_menu_close()"><i class="<?php echo esc_attr(get_theme_mod('gym_training_coach_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','gym-training-coach'); ?></span></a>
                    </div>
                  <?php }?>
                </div>
                <?php if( get_theme_mod( 'gym_training_coach_display_search', true) == true ) { ?>
                  <div class="col-lg-2 col-md-1 col-6 align-self-center ps-md-0">
                    <div class="main-search d-inline-block">
                      <span><a href="#"><i class="fas fa-search"></i></a></span>
                    </div>
                    <div class="searchform_page w-100 h-100">
                      <div class="close w-100 text-end me-lg-4 me-3"><a href="#maincontent"><i class="fa fa-times"></i></a></div>
                      <div class="search_input">
                        <?php get_search_form(); ?>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
          </div>
          <?php if( get_theme_mod('gym_training_coach_phone_number') != '' || get_theme_mod( 'gym_training_coach_header_btn_text') != ''){ ?>
          <div class="col-lg-2 col-md-3 col-12 head-btn text-center">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-5 text-end p-lg-0 align-self-center">
                <i class="fas fa-phone me-2"></i>
              </div>
              <div class="col-lg-8 col-md-8 col-7 text-start">
                <span class="call-us"><?php echo esc_html(get_theme_mod('gym_training_coach_header_btn_text')); ?>
                  <div><a href="tel:<?php echo esc_attr( get_theme_mod('gym_training_coach_phone_number','') ); ?>"><?php echo esc_html(get_theme_mod('gym_training_coach_phone_number',''));?></a></div></span>
                </div>
            </div>
          </div>
          <?php }?>
      </div>
    </div>

  </div>
  </header>
