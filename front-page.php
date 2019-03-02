<?php get_header(); ?>

<?php
// check if the flexible content field has rows of data
if( have_rows('modules') ):
     // loop through the rows of data
    while ( have_rows('modules') ) : the_row();
        if( get_row_layout() == 'homepage_banner' ):
          ?>
        <section class="banner">
        <img src="/wp-content/uploads/2019/02/banner-bg-smooth.png">
        <div class="container">
            <h1><?php the_sub_field('title'); ?></h1>
            <h2><?php the_sub_field('subtitle'); ?></h2>
            <a href="<?php the_sub_field('button_url'); ?>" class="btn btnYellow"><?php the_sub_field('button_text'); ?></a>
            <img src="<?php the_sub_field('image'); ?>" alt="Allegory Insurance" class="bannerPhone">
        </div>
    </section>

    <?php
        elseif( get_row_layout() == 'landing_page_banner' ): 
        ?>
        <section class="lpBanner">
          <div class="container">
            <h1><?php the_sub_field('title'); ?></h1>
            <h2><?php the_sub_field('subtitle'); ?></h2>
            <?php the_sub_field('form_embed'); ?>
          </div>
        </section>

      <?php
        elseif( get_row_layout() == 'inner_page_banner' ): 
        ?>
        <section class="innerBanner">
          <div class="container">
            <h1><?php the_sub_field('title'); ?></h1>
          </div>
        </section>

      <?php
        elseif( get_row_layout() == 'thin_column' ): 
        ?>
        <section class="thinColumn">
          <div class="container">
            <?php the_sub_field('content'); ?>
          </div>
        </section>

    <?php
        elseif( get_row_layout() == 'how_it_works' ): 
        ?>
      <section class="howItWorks" id="how-it-works">
        <div class="container">
            <h2><?php the_sub_field('title'); ?></h2>
            <?php if( have_rows('step') ):?>
              <div class="stepsGroup">
              <?php while ( have_rows('step') ): the_row();?>
                <div class="step">
                    <p class="stepNumber"><?php the_sub_field('number'); ?></p>
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('text'); ?></p>
                </div>
                <?php endwhile;?>
            </div>
            <?php endif;?>
        </div>
    </section>

    <?php
        elseif( get_row_layout() == 'text_right_image_left' ): 
        ?>
        <section class="textRight" id="why-allegory">
          <div class="container">
              <div class="imgWrapper">
                  <img src="<?php the_sub_field('image'); ?>" alt="Allegory Insurance">
              </div>
              <div class="contentWrapper">
                  <h2><?php the_sub_field('title'); ?></h2>
                  <?php the_sub_field('content'); ?>
                  <a href="<?php the_sub_field('button_url'); ?>" class="btn btnYellow"><?php the_sub_field('button_text'); ?></a>
              </div>
          </div>
      </section>

      <?php
        elseif( get_row_layout() == 'features' ): 
        ?>
        <section class="featuresGroup">
          <div class="container">
            <?php if( have_rows('feature') ):?>
              <?php while ( have_rows('feature') ): the_row();?>
                <div class="feature">
                  <img src="<?php the_sub_field('icon'); ?>" alt="" class="icon">
                  <h3><?php the_sub_field('title'); ?></h3>
                  <p><?php the_sub_field('text'); ?></p>
                </div>
              <?php endwhile;?>
            <?php endif;?>
          </div>
        </section>

        <?php
        elseif( get_row_layout() == 'blue_banner' ): 
        ?>
        <section class="blueBanner">
          <div class="container">
              <h2><?php the_sub_field('text'); ?></h2>
          </div>
        </section>

        <?php
        elseif( get_row_layout() == 'title_left' ): 
        ?>
        <section class="titleLeft">
          <div class="container">
            <div class="title">
              <h2><?php the_sub_field('title'); ?></h2>
            </div>
            <div class="contentWrapper">
              <?php the_sub_field('content'); ?>
              <a href="<?php the_sub_field('button_url'); ?>" class="btn btnYellow"><?php the_sub_field('button_text'); ?></a>
            </div>
          </div>
        </section>

        <?php
        elseif( get_row_layout() == 'testimonials' ): 
        ?>
        <section class="testimonials">
          <div class="container">
            <h2><?php the_sub_field('title'); ?></h2>
            <?php if( have_rows('testimonial') ):?>
              <div class="testsGroup">
              <?php while ( have_rows('testimonial') ): the_row();?>
                <div class="test">
                  <img src="<?php the_sub_field('image'); ?>" alt="" class="testPerson">
                  <h3><?php the_sub_field('title'); ?></h3>
                  <p><?php the_sub_field('quote'); ?></p>
                </div>
              <?php endwhile;?>
              </div>
            <?php endif;?>
          </div>
        </section>

        <?php
        elseif( get_row_layout() == 'cta_banner' ): 
        ?>
        <section class="ctaBanner">
          <div class="container">
            <div class="wrapper">
              <h2><?php the_sub_field('title'); ?></h2>
              <a href="<?php the_sub_field('button_url'); ?>" class="btn btnYellow"><?php the_sub_field('button_text'); ?></a>
            </div>
          </div>
        </section>

        <?php
        elseif( get_row_layout() == 'faqs' ): 
        ?>
        <section class="faqs" id="faqs">
          <div class="container">
            <h2><?php the_sub_field('title'); ?></h2>
            <?php if( have_rows('faq_group') ):?>
            <?php while ( have_rows('faq_group') ): the_row();?>
              <div class="faqGroup">
              <h3><?php the_sub_field('title'); ?></h3>
              <?php if( have_rows('faq') ):?>
                <?php while ( have_rows('faq') ): the_row();?>
                <div class="faqSingle">
                    <button><h4><?php the_sub_field('question'); ?></h4><i class="fa fa-angle-down"></i></button>
                    <div class="faqBlock">
                      <?php the_sub_field('answer'); ?>
                    </div>
                </div>
                <?php endwhile;?>
            <?php endif;?>
              </div>
              <?php endwhile;?>
            <?php endif;?>
          </div>
        </section>
        
          <?php
        endif;
    endwhile;
else :
    // no layouts found
endif;
?>

<?php get_footer(); ?>