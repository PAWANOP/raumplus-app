<?php
get_header('header');
/*
Template Name: Location
*/
?>
<!-- Hero Slider -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php
        if (have_rows('banner_listing')) {
            while (have_rows('banner_listing')) {
                the_row(); ?>
                <div class="carousel-item active" style="background-image: url('<?php echo get_sub_field('banner_listing_image'); ?>');">

                </div>
        <?php }
        }
        ?>
    </div>
</div>
<section class="call_to_action slideDoorsMain">
    <div class="container">
        <div class="call_to_action_parent">
            <div class="call_to_action_left">
                <h2><?php echo get_field('cta_heading'); ?></h2>

            </div>
            <div class="call_to_action_right">
                <a href="<?php echo get_field('cta_btn_link'); ?>" id="call_action" class="btn_1">
                    <span class="btn-inner">
                        <span class="text-span"><?php echo get_field('cta_btn_text'); ?></span>
                        <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"></path>
                            </svg></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="light_grey">
    <div class="container">
        <div class="breadcrumb-link">
            <ul>
                <li><a href>Home</a></li>
                <li>Folding Door</li>
            </ul>
        </div>
    </div>
</div>
<section class="readmore_content partitionWalls_readMore light_grey">
    <div class="container">
        <div class="readmore_content_inner">
            <div>
                <h1 class="h1_heading"><?php echo get_field('section_1_heading'); ?></h1>
                <?php echo get_field('section_1_description'); ?>
                <div class="textwraper" id="more" data-content="1" style="display: none;">
                    <h3><?php echo get_field('section_1_listing_title'); ?></h3>
                    <p><?php echo get_field('section_1_listing_subheading'); ?></p>
                    <?php
                    if (have_rows('section_1_listing')) {
                        while (have_rows('section_1_listing')) {
                            the_row(); ?>
                            <ul>
                                <li><strong><?php echo get_sub_field('section_1_listing_heading'); ?></strong></li>
                            </ul>
                            <?php echo get_sub_field('section_1_listing_description'); ?>
                    <?php }
                    }
                    ?>
                </div>
                <span id="dots" style="display: inline;">...</span><a id="read-more-link" onclick="readMore1()"
                    data-content="1">Read more</a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding reason-love-us">
    <div class="container">
        <h2 class="section-title"><?php echo get_field('section_2_heading'); ?></h2>
        <div class="reason-love-us-parent">
            <div class="reason-love-us-parent-reason">
                <div class="reason-love-us-parent-reason-left">
                    <div class="reason-love-us-parent-reason-inner">
                        <?php
                        if (have_rows('section_2_listing')) {
                            while (have_rows('section_2_listing')) {
                                the_row(); ?>
                                <div class="counter-box">
                                    <span><?php echo get_sub_field('section_2_listing_title'); ?></span>
                                    <p><?php echo get_sub_field('section_2_listing_subheading'); ?></p>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>
                    <div class="reason-love-us-parent-reason-bottom">
                        <a href="<?php echo get_field('section_2_listing_btn_link'); ?>" class="btn_1">
                            <span class="btn-inner">
                                <span class="text-span"><?php echo get_field('section_2_listing_btn_text'); ?></span>
                                <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z">
                                        </path>
                                    </svg></span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="reason-love-us-parent-reason-right">
                    <h3><?php echo get_field('section_2_listing_1_heading'); ?></h3>
                    <div class="reason-love-us-parent-reason-box">
                        <?php
                        if (have_rows('section_2_listing_1')) {
                            while (have_rows('section_2_listing_1')) {
                                the_row(); ?>
                                <div class="parent-reason-list">
                                    <span><img src="<?php echo get_sub_field('section_2_listing_1_icon'); ?>" alt="" style="height: 60px;"></span>
                                    <h4><?php echo get_sub_field('section_2_listing_1_numbers'); ?></h4>
                                    <p><?php echo get_sub_field('section_2_listing_1_description'); ?></p>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding experience-center p_t">
    <div class="container">
        <div class="projects-list-section-inner-heading">
            <div class="projects-list-section-inner-heading-right">
                <h2><?php echo get_field('section_3_heading'); ?> <span> <?php echo get_field('section_3_color_heading'); ?></span></h2>
                <p><?php echo get_field('section_3_subheading'); ?></p>
            </div>
        </div>
        <div class="experience-center-body">
            <div class="experience-center-body-right">
                <h3><?php echo get_field('section_3_title'); ?></h3>
                <?php
                if (have_rows('section_3_listing')) {
                    while (have_rows('section_3_listing')) {
                        the_row(); ?>
                        <span><?php echo get_sub_field('section_3_listing_title'); ?></span>
                        <p><?php echo get_sub_field('section_3_listing_subtitle'); ?></p>
                <?php }
                }
                ?>
                <div class="book-free-consultation">
                    <a href="<?php echo get_field('section_3_btn_link'); ?>" id="call_action" class="btn_1">
                        <span class="btn-inner">
                            <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
                                </svg></span>
                            <span class="text-span"><?php echo get_field('section_3_btn_text'); ?></span>
                        </span>
                    </a>

                </div>
            </div>
            <div class="experience-center-body-left">
                <div class="form-section-bottom-right">
                    <div class="contact-info-inner-bottom-right-form">
                        <div class="contact-info-inner-bottom-right-1">
                            <div class="contact-bottom-right-1-left">
                                <label for="">Full Name *</label>
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="contact-bottom-right-2-right">
                                <label for="">Phone *</label>
                                <input type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="contact-info-inner-bottom-right-2">
                            <div class="contact-bottom-right-2-left">
                                <label for="">Email Address *</label>
                                <input type="text" placeholder="Email Address">
                            </div>
                            <div class="contact-bottom-right-2-right">
                                <label for="">Location *</label>
                                <input type="text" placeholder="Location">
                            </div>
                        </div>
                        <div class="contact-info-inner-bottom-right-3">
                            <div class="right-3-textarea">
                                <label for="">Your Message</label>
                                <textarea cols="40" rows="4" name="" id="" placeholder="Your Message" style="height: 88px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-btn">
                        <a href="" class="btn_1">
                            <span class="btn-inner">
                                <span class="text-span">Send
                                    Message</span>
                                <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"></path>
                                    </svg></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="sliding-door-loc section-padding individual-material-inspiration-section partitionWallsInspiration light_grey">
    <div class="container">
        <div class="individual-material-inspiration-i">
            <div class="individual-material-inspiration-i-h">
                <span> <span class="dot"></span> <?php echo get_field('section_4_title'); ?></span>
                <h2 class="text-uppercase"><?php echo get_field('section_4_heading'); ?></h2>
            </div>
            <div class="individual-material-inspiration-i-b">
                <div class="individual-material-inspiration-ibox">
                    <div id="material-controls" class="left-side-faq">
                        <div data-scene="32" class="control-scene current">
                            <ul class="control-position">
                                <?php
                                if (have_rows('section_4_listing')) {
                                    $i = 1;
                                    while (have_rows('section_4_listing')) {
                                        the_row(); ?>
                                        <li>
                                            <a href="#" data-tab="services-<?php echo $i; ?>" class="current"><?php echo get_sub_field('section_4_listing_title'); ?></a>
                                        </li>
                                <?php $i++;
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div id="material-scene" class="right-side-content current">
                        <?php
                        if (have_rows('section_4_listing')) {
                            $i = 1;
                            while (have_rows('section_4_listing')) {
                                the_row(); ?>
                                <div id="services-<?php echo $i; ?>" class="material-image static-background current">
                                    <picture>
                                        <img loading="lazy"
                                            src="<?php echo get_sub_field('section_4_listing_image'); ?>"
                                            alt>
                                    </picture>
                                    <div class="services-right-side-bottom">
                                        <p><?php echo get_sub_field('section_4_listing_description'); ?></p>
                                        <a href="<?php echo get_sub_field('section_4_listing_btn_link'); ?>" class="btn_1">
                                            <span class="btn-inner">
                                                <span class="text-span"><?php echo get_sub_field('section_4_listing_btn_text'); ?></span>
                                                <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                        <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z">
                                                        </path>
                                                    </svg></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                        <?php $i++;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding why-choose-location">
    <div class="container">
        <div class="why-choose-location-main">
            <div class="why-choose-location-header">
                <div class="door-ideas-single-design-header-left">
                    <span><?php echo get_field('section_5_title'); ?></span>
                </div>
                <div class="door-ideas-single-design-header-right">
                    <h2><?php echo get_field('section_5_heading'); ?></h2>
                </div>
            </div>
            <div class="why-choose-location-body owl-carousel-why-choose">
                <?php
                if (have_rows('section_5_listing')) {
                    while (have_rows('section_5_listing')) {
                        the_row(); ?>
                        <div class="why-choose-location-body-box">
                            <span><img src="<?php echo get_sub_field('section_5_listing_icon'); ?>" alt="" style="height: 60px;"></span>
                            <h3> <?php echo get_sub_field('section_5_listing_heading'); ?></h3>
                            <p><?php echo get_sub_field('section_5_listing_description'); ?></p>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section class="section-padding three-slider-box sliding-door-location-project">
    <div class="container">
        <div class="projects-list-section-inner-heading">
            <div class="projects-list-section-inner-heading-left">
                <span><?php echo get_field('section_6_title'); ?></span>
            </div>
            <div class="projects-list-section-inner-heading-right">
                <h2><?php echo get_field('section_6_heading'); ?> <span> <?php echo get_field('section_6_color_heading'); ?> </span></h2>
            </div>
        </div>
        <div class="three-slider-box-door-ideas owl-carousel-doors">
            <?php
            if (have_rows('section_6_listing')) {
                while (have_rows('section_6_listing')) {
                    the_row(); ?>
                    <div class="three-slider-box-inner">
                        <div class="three-slider-box-inner-image">
                            <img src="<?php echo get_sub_field('section_6_listing_image'); ?>" alt="">
                        </div>
                        <div class="three-slider-box-inner-box">

                            <p><?php echo get_sub_field('section_6_listing_title'); ?></p>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>

<section id="testimonials" class="section-padding testimonials-section projects_testimonials light_grey">
    <div class="container">
        <div class="testimonials-section-inner">
            <div class="testimonials-list-section-inner-heading">
                <div
                    class="testimonials-list-section-inner-heading-left">
                    <span><?php echo get_field('section_7_title'); ?></span>
                </div>
                <div
                    class="testimonials-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_7_heading'); ?> <span> <?php echo get_field('section_7_color_heading'); ?></span></h2>
                </div>
            </div>
            <div id="testimonials_owl"
                class="testimonials-list-section-inner-body">
                <div class="testimonials-list-section-inner-box">

                    <div class="tesM-list-section-i-box-bottom">
                        <div class="tesM-list-section-i-box-bottom-p">
                            <div class="e-rating-wrapper">
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                            </div>
                            <p>
                                “Great furniture that lasts forever and
                                great customer service if there are any
                                problems. Unfortunately, something like
                                this has become rare. 1++++ Many thanks
                                to Raumplus Andrew. "</p>
                            <div class="tesM-profile-bottom">

                                <div class="tesM-profile-bottom-right">
                                    <span
                                        class="name">Koerperkarl</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-list-section-inner-box">

                    <div class="tesM-list-section-i-box-bottom">
                        <div class="tesM-list-section-i-box-bottom-p">
                            <div class="e-rating-wrapper">
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                            </div>
                            <p>
                                “Excellent quality, contemporary.
                                Reliable, always solution-oriented
                                cooperation - always happy!. "</p>
                            <div class="tesM-profile-bottom">

                                <div class="tesM-profile-bottom-right">
                                    <span class="name">Küchenstudio
                                        48</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-list-section-inner-box">

                    <div class="tesM-list-section-i-box-bottom">
                        <div class="tesM-list-section-i-box-bottom-p">
                            <div class="e-rating-wrapper">
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                            </div>
                            <p>
                                “For us as a fitter for high-quality
                                complete fit-out, we are happy about
                                raumplus as a reliable partner for many
                                years; flawless, error-free deliveries
                                of our complicated requirements as well
                                as friendly and competent advice from
                                the office and field service underline
                                this...."</p>
                            <div class="tesM-profile-bottom">

                                <div class="tesM-profile-bottom-right">
                                    <span class="name"> Gerald
                                        Asenkerschbaumer</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-list-section-inner-box">

                    <div class="tesM-list-section-i-box-bottom">
                        <div class="tesM-list-section-i-box-bottom-p">
                            <div class="e-rating-wrapper">
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                            </div>
                            <p>
                                “Great product from a great company! I
                                have installed it privately and have
                                been using it in my business for many
                                years. I like to sell the sliding doors
                                or interior systems because it always
                                works great. Even if there is a
                                complaint (very rare), they react
                                immediately and solve everything without
                                any problems. I can only recommend
                                it!"</p>
                            <div class="tesM-profile-bottom">

                                <div class="tesM-profile-bottom-right">
                                    <span class="name"> Frank
                                        Himmel</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-list-section-inner-box">

                    <div class="tesM-list-section-i-box-bottom">
                        <div class="tesM-list-section-i-box-bottom-p">
                            <div class="e-rating-wrapper">
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                                <span class="start-inner"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                    </svg></span>
                            </div>
                            <p>
                                “We are very happy that we chose the
                                raumplus brand about 23 years ago,
                                because the products are of excellent
                                quality and offer a wide range of
                                products. In addition, there is a great
                                and very reliable team behind raumplus.
                                We are looking forward to a continued
                                great cooperation!!! Keep up the good
                                work!"</p>
                            <div class="tesM-profile-bottom">

                                <div class="tesM-profile-bottom-right">
                                    <span class="name"> Ralf
                                        Kötter</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding about-us-section">
    <div class="container">
        <div class="about-us-section-inner">
            <div class="about-us-section-left">
                <div class="heading-title">
                    <span> <span class="dot"></span> <?php echo get_field('section_8_title'); ?></span>
                </div>
                <div class="heading-text">
                    <h2><?php echo get_field('section_8_heading'); ?> <span> <?php echo get_field('section_8_color_heading'); ?> </span></h2>
                </div>
                <div class="listing-style">
                    <ul>
                        <?php
                        if (have_rows('section_8_listing')) {
                            while (have_rows('section_8_listing')) {
                                the_row(); ?>
                                <li><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#1f1f1f">
                                        <path d="M400-304 240-464l56-56 104 104 264-264 56 56-320 320Z" />
                                    </svg><?php echo get_sub_field('section_8_listing_title'); ?></li>
                        <?php }
                        }
                        ?>
                    </ul>
                </div>
                <div class="left-para">
                    <?php echo get_field('section_8_description'); ?>
                </div>
                <div class="about-us-more">
                    <a href="<?php echo get_field('section_8_btn_link'); ?>" class="btn_1">
                        <span class="btn-inner">
                            <span class="text-span"><?php echo get_field('section_8_btn_text'); ?></span>
                            <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path
                                        d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z" />
                                </svg></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="about-us-section-right">
                <div class="about-us-section-right-inner">
                    <picture>
                        <img src="<?php echo get_field('section_8_image'); ?>" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section-padding form-section-bottom-side">
    <div class="container">
        <div class="form-section-bottom-side-inner">
            <div class="form-section-bottom-left">
                <div class="form-section-subtitle">
                    <span> <?php echo get_field('section_9_title'); ?></span>
                </div>
                <div class="form-section-h2">
                    <h2><?php echo get_field('section_9_heading'); ?> <span><?php echo get_field('section_9_color_heading'); ?> </span> <?php echo get_field('section_9_normal_heading'); ?> </h2>
                </div>
                <div class="form-section-p">
                    <p><?php echo get_field('section_9_subheading'); ?></p>
                </div>
            </div>
            <div class="form-section-bottom-right">
                <div class="contact-info-inner-bottom-right-form">
                    <div class="contact-info-inner-bottom-right-1">
                        <div class="contact-bottom-right-1-left">
                            <label for>Full Name *</label>
                            <input type="text"
                                placeholder="Your Name">
                        </div>
                        <div class="contact-bottom-right-2-right">
                            <label for>Phone *</label>
                            <input type="text" placeholder="Phone">
                        </div>
                    </div>
                    <div class="contact-info-inner-bottom-right-2">
                        <div class="contact-bottom-right-2-left">
                            <label for>Email Address *</label>
                            <input type="text"
                                placeholder="Email Address">
                        </div>
                        <div class="contact-bottom-right-2-right">
                            <label for>Location *</label>
                            <input type="text"
                                placeholder="Location">
                        </div>
                    </div>
                    <div class="contact-info-inner-bottom-right-3">
                        <div class="right-3-textarea">
                            <label for>Your Message</label>
                            <textarea cols="40" rows="4" name id
                                placeholder="Your Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="contact-info-btn">
                    <a href class="btn_1">
                        <span class="btn-inner">
                            <span class="text-span">Send
                                Message</span>
                            <span class="svg-span"><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640">
                                    <path
                                        d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z" />
                                </svg></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_header('header');
?>