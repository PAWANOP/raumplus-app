<?php
get_header('header');
/*
Template Post Type: partition_walls
Template Name: partition wall
*/
?>
<!-- Hero Slider -->
<section id="aboutUsContainer" class="aboutUsContainer" style="background-image: url('<?php echo get_field('banner_image'); ?>)">
    <div class="heading-top">

    </div>
</section>
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
                <li>Partition walls</li>
            </ul>
        </div>
    </div>
</div>


<section class="readmore_content partitionWalls_readMore light_grey">
    <div class="container">
        <div class="readmore_content_inner">
            <div>
                <h1 class="h1_heading"><?php echo get_field('section_1_heading'); ?>
                </h1>
                <?php echo get_field('section_1_description'); ?>

                <div class="textwraper" id="more" data-content="1"
                    style="display: none;">
                    <h3><?php echo get_field('section_1_listing_heading'); ?></h3>
                    <?php
                    if (have_rows('section_1_listing')) {
                        while (have_rows('section_1_listing')) {
                            the_row(); ?>
                            <p><strong><?php echo get_sub_field('section_1_listing_title'); ?></strong></p>
                            <p><?php echo get_sub_field('section_1_listing_description'); ?> </p>
                    <?php }
                    }
                    ?>
                </div>
                <span id="dots" style="display: inline;">...</span><a
                    id="read-more-link" onclick="readMore1()"
                    data-content="1">Read more</a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding about-us-service Outstanding-service-section partitionWallServ1">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-right ">
                    <h2 class="text-uppercase"><?php echo get_field('section_2_heading'); ?></h2>
                    <?php echo get_field('section_2_description'); ?>
                </div>
            </div>
            <div class="Outstanding-service-inner-body">
                <div class="upper-side-bottom-images">
                    <div class="images-box-faq-content-1">
                        <div class="images-box-faq-content-1-inner">
                            <div class="images-box-faq-content-1-left">
                                <div class="images-box-faq-content-1-h">
                                    <h3><?php echo get_field('section_2_title'); ?></h3>
                                </div>
                                <div class="images-box-faq-content-1-b">
                                    <p><?php echo get_field('section_2_subheading'); ?></p>
                                </div>
                                <div class="download_pdf_awards">
                                    <a href class="btn_1">
                                        <span class="btn-inner">
                                            <span class="svg-span"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 640 640">
                                                    <path
                                                        d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 306.7L246.6 265.3C234.1 252.8 213.8 252.8 201.3 265.3C188.8 277.8 188.8 298.1 201.3 310.6L297.3 406.6C309.8 419.1 330.1 419.1 342.6 406.6L438.6 310.6C451.1 298.1 451.1 277.8 438.6 265.3C426.1 252.8 405.8 252.8 393.3 265.3L352 306.7L352 96zM160 384C124.7 384 96 412.7 96 448L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 448C544 412.7 515.3 384 480 384L433.1 384L376.5 440.6C345.3 471.8 294.6 471.8 263.4 440.6L206.9 384L160 384zM464 440C477.3 440 488 450.7 488 464C488 477.3 477.3 488 464 488C450.7 488 440 477.3 440 464C440 450.7 450.7 440 464 440z"></path>
                                                </svg></span>
                                            <span
                                                class="text-span">Product
                                                data sheet fixed element
                                                S1200</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="images-box-faq-content-1-right">
                                <div class="slider-box sliderBox">
                                    <?php
                                    if (have_rows('section_2_listing')) {
                                        while (have_rows('section_2_listing')) {
                                            the_row(); ?>
                                            <div class="images-box-faq-content-1-right-video">
                                                <iframe width="853" height="480" src="<?php echo get_sub_field('section_2_listing_link'); ?>" title="Product series: Pivot Door S1200" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            </div>
                                    <?php }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section-padding individual-material-inspiration-section partitionWallsInspiration p_t">
    <div class="container">
        <div class="individual-material-inspiration-i">
            <div class="individual-material-inspiration-i-h">
                <span> <span class="dot"></span> <?php echo get_field('section_3_title'); ?></span>
                <h2 class="text-uppercase"><?php echo get_field('section_3_heading'); ?></h2>
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
                                        the_row();
                                        $active_class = ($i == 1) ? 'current' : '';
                                ?>
                                        <li>
                                            <a href="#" data-tab="services-<?php echo $i; ?>" class="<?php echo $active_class; ?>"><?php echo get_sub_field('section_4_listing_title'); ?></a>
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
                                the_row();

                                // First item ke liye active/current class
                                $active_class = ($i == 1) ? 'current' : '';
                        ?>

                                <div id="services-<?php echo $i; ?>"
                                    class="material-image static-background <?php echo $active_class; ?>">

                                    <picture>
                                        <img loading="lazy"
                                            src="<?php echo get_sub_field('section_4_listing_image'); ?>"
                                            alt="">
                                    </picture>

                                    <div class="services-right-side-bottom">
                                        <p><?php echo get_sub_field('section_4_listing_description'); ?></p>

                                        <a href="<?php echo get_sub_field('section_4_listing_btn_link'); ?>" class="btn_1">
                                            <span class="btn-inner">
                                                <span class="text-span">
                                                    <?php echo get_sub_field('section_4_listing_btn_text'); ?>
                                                </span>
                                                <span class="svg-span">
                                                    <!-- SVG -->
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                        <?php
                                $i++;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call_to_action_home p_t">
    <div class="container">
        <div class="call_to_action_parent">
            <div class="call_to_action_left">
                <h2><?php echo get_field('middel_cta_heading'); ?></h2>
                <p><?php echo get_field('middle_cta_subheading'); ?></p>
                <a href="<?php echo get_field('middle_cta_btn_link'); ?>" id="call_action" class="btn_1">
                    <span class="btn-inner">
                        <span class="text-span"><?php echo get_field('middle_cta_btn_text'); ?></span>
                        <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"></path>
                            </svg></span>
                    </span>
                </a>
            </div>
            <div class="call_to_action_right">
                <div class="kt-inside-inner-col"></div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding about-us-service Outstanding-service-section light_grey partitionWallServ">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-right">
                    <h2 class="text-uppercase"><?php echo get_field('section_5_heading'); ?></h2>
                    <?php echo get_field('section_5_description'); ?>
                </div>
            </div>
            <div class="Outstanding-service-inner-body">
                <div class="upper-side-top-images">
                    <?php
                    if (have_rows('section_5_listing')) {
                        $i = 1;
                        while (have_rows('section_5_listing')) {
                            the_row(); ?>
                            <div class="images-box-faq">
                                <div class="image-content-top">
                                    <img
                                        src="<?php echo get_sub_field('section_5_listing_image'); ?>"
                                        alt>
                                </div>
                                <div class="image-content-bottom">
                                    <a href="#" data-content="content-<?php echo $i; ?>"
                                        href><?php echo get_sub_field('section_5_listing_title'); ?></a>
                                </div>
                            </div>
                    <?php $i++;
                        }
                    }
                    ?>
                </div>
                <div class="upper-side-bottom-images">
                    <?php
                    if (have_rows('section_5_listing_1')) {
                        $i = 1;
                        while (have_rows('section_5_listing_1')) {
                            the_row(); ?>
                            <div id="content-1"
                                class="images-box-faq-content-1">
                                <div class="images-box-faq-content-1-inner">
                                    <div class="images-box-faq-content-1-left">
                                        <div class="images-box-faq-content-1-h">
                                            <h3><?php echo get_sub_field('section_5_listing_1_title'); ?></h3>
                                        </div>
                                        <div class="images-box-faq-content-1-b">
                                            <?php echo get_sub_field('section_5_listing_1_description'); ?>
                                        </div>
                                        <div class="download_pdf_awards">
                                            <a href class="btn_1">
                                                <span class="btn-inner">
                                                    <span class="svg-span"><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 640 640">
                                                            <path
                                                                d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 306.7L246.6 265.3C234.1 252.8 213.8 252.8 201.3 265.3C188.8 277.8 188.8 298.1 201.3 310.6L297.3 406.6C309.8 419.1 330.1 419.1 342.6 406.6L438.6 310.6C451.1 298.1 451.1 277.8 438.6 265.3C426.1 252.8 405.8 252.8 393.3 265.3L352 306.7L352 96zM160 384C124.7 384 96 412.7 96 448L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 448C544 412.7 515.3 384 480 384L433.1 384L376.5 440.6C345.3 471.8 294.6 471.8 263.4 440.6L206.9 384L160 384zM464 440C477.3 440 488 450.7 488 464C488 477.3 477.3 488 464 488C450.7 488 440 477.3 440 464C440 450.7 450.7 440 464 440z"></path>
                                                        </svg></span>
                                                    <span
                                                        class="text-span">Produktdatenblatt
                                                        (PDF)</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="images-box-faq-content-1-right">
                                        <div class="slider-box sliderBox">
                                            <?php
                                            if (have_rows('section_5_listing_1_listing')) {
                                                while (have_rows('section_5_listing_1_listing')) {
                                                    the_row(); ?>
                                                    <div>
                                                        <picture>
                                                            <img
                                                                src="<?php echo get_sub_field('section_5_listing_1_listing_image'); ?>"
                                                                alt>
                                                        </picture>
                                                    </div>
                                            <?php }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding partitionWallFaq">
    <div class="container">
        <div class="partitionWallFaq">
            <div class="testimonials-list-section-inner-heading">
                <div
                    class="testimonials-list-section-inner-heading-left">
                    <span><?php echo get_field('section_6_title'); ?></span>
                </div>
            </div>
            <div class="faq-question-section-body-first-bottom">
                <ul>
                    <?php
                    if (have_rows('section_6_listing')) {
                        while (have_rows('section_6_listing')) {
                            the_row(); ?>
                            <li>
                                <a href="#" class="faq-question-header"><?php echo get_sub_field('section_6_listing_heading'); ?></a>
                                <div class="faq-question-body">
                                    <?php echo get_sub_field('section_6_listing_description'); ?>
                                </div>
                            </li>
                    <?php }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>



<section class="section-padding light_grey grid-box-container">
    <div class="container">
        <div class="grid-box-container">
            <?php
            if (have_rows('section_7_listing')) {
                while (have_rows('section_7_listing')) {
                    the_row(); ?>
                    <div class="grid-box-container-inner">
                        <div class="grid-box-container-inner-image">
                            <img
                                src="<?php echo get_sub_field('section_7_listing_image'); ?>"
                                alt>
                        </div>
                        <div class="grid-box-container-inner-h">
                            <a href="<?php echo get_sub_field('section_7_listing_link'); ?>">
                                <h3><?php echo get_sub_field('section_7_listing_title'); ?></h3>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#1f1f1f">
                                    <path
                                        d="m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>
<section class="section-padding form-section-bottom-side">
    <div class="container">
        <div class="form-section-bottom-side-inner">
            <div class="form-section-bottom-left">
                <div class="form-section-subtitle">
                    <span> <?php echo get_field('section_8_title'); ?></span>
                </div>
                <div class="form-section-h2">
                    <h2><?php echo get_field('section_8_heading'); ?> <span><?php echo get_field('section_8_color_heading'); ?> </span> <?php echo get_field('section_8_normal_heading'); ?> </h2>
                </div>
                <div class="form-section-p">
                    <p><?php echo get_field('section_8_color_subheading'); ?></p>
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
get_footer('footer');
?>