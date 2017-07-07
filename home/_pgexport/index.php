<?php
get_header(); ?>

  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <meta content="Webflow" name="generator">
      <script type="text/javascript">
  WebFont.load({
    google: {
      families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Roboto:regular","Open Sans Condensed:300,700"]
    }
  });
</script>
      <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.gif" rel="shortcut icon" type="image/x-icon">
      <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      <?php wp_head(); ?>
  </head>
  <body class="body">
      <div class="search-window w-clearfix">
          <div class="div-block-9" data-ix="close-search-window">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/close.png">
          </div>
          <div class="container w-container">
              <h1 class="heading-3"><?php _e( 'SEARCH', 'singleserv' ); ?></h1>
              <div class="w-form">
                  <form data-name="Email Form" id="email-form" name="email-form">
                      <input class="text-field w-input" data-name="Field" id="Field-2" maxlength="256" name="Field" type="text">
                  </form>
                  <div class="w-form-done">
                      <div>
                          <?php _e( 'Thank you! Your submission has been received!', 'singleserv' ); ?>
                      </div>
                  </div>
                  <div class="w-form-fail">
                      <div>
                          <?php _e( 'Oops! Something went wrong while submitting the form', 'singleserv' ); ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="full-wrapper">
          <section class="side-menu">
              <div class="logo-wrapper">
                  <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.svg" width="40" href="<?php echo esc_url( get_home_url() ); ?>">
              </div>
              <div class="circle-wrapper">
                  <div class="circle"></div>
                  <div class="circle"></div>
              </div>
              <div class="social-wrapper">
                  <div class="about-link">
                      <a class="link-block w-inline-block">
                          <div class="text-block">
                              <?php _e( 'About', 'singleserv' ); ?>
                          </div>
                      </a>
                  </div>
                  <div class="social-icon">
                      <img class="mail-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/mail.svg">
                  </div>
                  <div class="social-icon">
                      <img class="ig-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ig.svg">
                  </div>
                  <div class="social-icon">
                      <img class="fb-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fb.svg">
                  </div>
                  <div class="social-icon">
                      <img class="twitter-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tw.svg">
                  </div>
              </div>
          </section>
          <div class="top-header">
              <div class="features-link-wrapper w-clearfix">
                  <a class="header-links w-inline-block" href="#">
                      <div class="features">
                          <?php _e( 'Features', 'singleserv' ); ?>
                      </div>
                      <div class="past-features">
                          <?php _e( 'Past Features', 'singleserv' ); ?>
                      </div>
                  </a>
                  <div class="search-wrapper" data-ix="open-search">
                      <img data-ix="open-search" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/search.svg">
                  </div>
              </div>
          </div>
          <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
                  <div class="main-content-wrapper w-container">
                      <section class="artist-image-wrapper">
                          <?php the_post_thumbnail( null, array(
                                  'class' => 'image'
                          ) ); ?>
                          <div class="view-campaign-wrapper">
                              <div class="div-block-8">
                                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/plus.png">
                              </div>
                          </div>
                      </section>
                      <div class="feature-desc-wrapper">
                          <div class="relative">
                              <div class="features-heading">
                                  <h1 class="features-label"><?php _e( 'FEATURES', 'singleserv' ); ?></h1>
                              </div>
                              <div class="artist-name-wrapper">
                                  <div class="top-half">
                                      <img class="image-2" height="41" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-top-half.svg" width="41">
                                      <h3 class="heading-2"><?php the_title(); ?></h3>
                                  </div>
                                  <div class="bottom-half">
                                      <img class="image-3" height="41" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-bottom-half.svg" width="41">
                                      <h3 class="heading-2"><?php _e( 'Rainforest Alliance', 'singleserv' ); ?></h3>
                                  </div>
                              </div>
                              <?php the_content(); ?>
                              <div class="cta-section-wrapper">
                                  <div class="play-btn" data-ix="play-button-hover">
                                      <img class="play-symbol" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play-triangle-wht.png">
                                  </div>
                                  <div class="song-title-wrapper">
                                      <div class="song-artist">
                                          <div class="text-block-3">
                                              <?php _e( 'TOKiMONSTA - Gamble', 'singleserv' ); ?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="song-progress-bar"></div>
                                  <div class="cta-btn">
                                      <div class="cta-btn-text">
                                          <?php _e( 'DONATE', 'singleserv' ); ?>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="next-wrapper">
                          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/next-arrow.png">
                      </div>
                  </div>
              <?php endwhile; ?>
          <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.', 'singleserv' ); ?></p>
          <?php endif; ?>
      </div>
      <div class="carousel-selector-wrapper">
          <ul class="unordered-list w-list-unstyled">
              <li class="carousel-dash list-item">
                  <div class="active div-block-7"></div>
              </li>
              <li class="carousel-dash list-item">
                  <div class="div-block-7"></div>
              </li>
              <li class="carousel-dash list-item">
                  <div class="div-block-7"></div>
              </li>
              <li class="carousel-dash list-item">
                  <div class="div-block-7"></div>
              </li>
          </ul>
      </div>
      <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
      <?php wp_footer(); ?>
  </body>    

<?php get_footer(); ?>