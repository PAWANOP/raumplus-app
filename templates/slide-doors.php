<?php
get_header('header');
/*
Template Post Type: sliding_doors
Template Name: slide doors
*/
?>
<!-- Hero Slider -->
<section id="aboutUsContainer" class="aboutUsContainer" style="background-image: url('<?php echo get_field('banner_image'); ?>)">
    <div class="heading-top">

    </div>
</section>
<section class="call_to_action slideDoorsMain" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/bg_image4.webp');">
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
                <li>Sliding doors</li>
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
                    <h3><?php echo get_field('section_1_listing_heading'); ?></h3>
                    <p><?php echo get_field('section_1_listing_description'); ?> </p>
                    <?php
                    if (have_rows('section_1_listing')) {
                        while (have_rows('section_1_listing')) {
                            the_row(); ?>
                            <ul>
                                <li><strong><?php echo get_sub_field('section_1_listing_title'); ?></strong></li>
                            </ul>
                            <p><?php echo get_sub_field('section_1_listing_description'); ?></p>
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

<section class="section-padding why-choose slide-doors-choose">
    <div class="container">
        <h2 class="section-title"><?php echo get_field('section_2_heading'); ?></h2>
        <div class="row">
            <?php
            if (have_rows('section_2_listing')) {
                while (have_rows('section_2_listing')) {
                    the_row(); ?>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="why-choose-item">
                            <span><img src="<?php echo get_sub_field('section_2_listing_icon'); ?>" style="width: 55px;" alt=""></span>
                            <h5><?php echo get_sub_field('section_2_listing_title'); ?></h5>

                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>

<section class="section-padding process-list-section application-list-section">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span><?php echo get_field('section_3_title'); ?></span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_3_heading'); ?></h2>
                </div>
            </div>
            <div class="process-section-card-box">
                <div class="process-section-card-box-inner">
                    <?php
                    if (have_rows('section_3_listing')) {
                        while (have_rows('section_3_listing')) {
                            the_row(); ?>
                            <div class="process-section-box">
                                <div class="process-section-box-image">
                                    <img src="<?php echo get_sub_field('section_3_listing_image'); ?>" alt="">
                                </div>
                                <div class="process-section-box-bottom">
                                    <h3><?php echo get_sub_field('section_3_listing_title'); ?></h3>
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

<section class="section-padding intelligent-list-section door-ideas-grid-3">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span><?php echo get_field('section_4_title'); ?></span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_4_heading'); ?> <span> <?php echo get_field('section_4_color_heading'); ?> </span><?php echo get_field('section_4_normal_heading'); ?></h2>
                </div>
            </div>
            <div class="intelligent-list-section-inner-body">
                <div class="row">
                    <?php
                    if (have_rows('section_4_listing')) {
                        while (have_rows('section_4_listing')) {
                            the_row(); ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-card card">
                                    <div class="product-card-image">
                                        <img src="<?php echo get_sub_field('section_4_listing_image'); ?>" alt="Corner Wardrobe">
                                    </div>
                                    <div class="card-body">
                                        <h5><?php echo get_sub_field('section_4_listing_title'); ?></h5>
                                        <p><?php echo get_sub_field('section_4_listing_description'); ?></p>
                                        <div class="button-wrapper text-center">
                                            <a href="<?php echo get_sub_field('section_4_listing_btn_link'); ?>" class="btn_1">
                                                <span class="btn-inner">
                                                    <span class="text-span"><?php echo get_sub_field('section_4_listing_btn_text'); ?></span>
                                                    <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                            <path
                                                                d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z">
                                                            </path>
                                                        </svg></span>
                                                </span>
                                            </a>
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

<section class="section-padding about-us-service Outstanding-service-section partitionWallServ sliding-doors-bottom-parent">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-right">
                    <h2 class="text-uppercase"><?php echo get_field('section_5_heading'); ?> </h2>
                    <?php echo get_field('section_5_description'); ?>
                </div>
            </div>
            <div class="Outstanding-service-inner-body">
                <div class="upper-side-top-images">
                    <?php
                    if (have_rows('section_5_listing')) {
                        while (have_rows('section_5_listing')) {
                            the_row(); ?>
                            <div class="images-box-faq">
                                <div class="image-content-top">
                                    <img
                                        src="<?php echo get_sub_field('section_5_listing_image'); ?>"
                                        alt>
                                </div>
                                <div class="image-content-bottom">
                                    <a href="#" data-content="content-1"
                                        href><?php echo get_sub_field('section_5_listing_title'); ?></a>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
                <div class="upper-side-bottom-images">
                    <?php
                    if (have_rows('section_5_listing_1')) {
                        $i = 1;
                        while (have_rows('section_5_listing_1')) {
                            the_row(); ?>
                            <div id="content-<?php echo $i; ?>"
                                class="images-box-faq-content-1">
                                <div class="images-box-faq-content-1-inner">
                                    <div class="images-box-faq-content-1-left">
                                        <div class="images-box-faq-content-1-h">
                                            <h3><?php echo get_sub_field('section_5_listing_1_heading'); ?></h3>
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
                                                        class="text-span">Product
                                                        data sheet (PDF)</span>
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
                    <?php $i++;
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="sliding-doors-bottom">
                <?php echo get_field('section_5_listing_description'); ?>
            </div>
        </div>
    </div>
</section>
<section
    class="section-padding about-us-service Outstanding-service-section light_grey slide-door-section">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-right">
                    <h2 class="text-uppercase"><?php echo get_field('section_6_heading'); ?></h2>
                    <?php echo get_field('section_6_description'); ?>
                </div>
            </div>
            <div class="references-section-list-parent">
                <div class="references-section-list">
                    <div class="Outstanding-service-inner-body">
                        <div class="upper-side-top-images">
                            <?php
                            if (have_rows('section_6_1_listing_1')) {
                                while (have_rows('section_6_1_listing_1')) {
                                    the_row(); ?>
                                    <div class="images-box-faq">
                                        <div class="image-content-top">
                                            <img
                                                src="<?php echo get_sub_field('section_6_1_listing_1_image'); ?>"
                                                alt>
                                        </div>
                                        <div class="image-content-bottom">
                                            <a href="#" data-content="content-s1"
                                                href><?php echo get_sub_field('section_6_1_listing_1_title'); ?></a>
                                        </div>
                                    </div>
                            <?php }
                            }
                            ?>
                        </div>
                        <div class="upper-side-bottom-images">
                            <?php
                            if (have_rows('section_6_1_listing_2')) {
                                $i = 1;
                                while (have_rows('section_6_1_listing_2')) {
                                    the_row(); ?>
                                    <div id="content-s<?php echo $i; ?>"
                                        class="images-box-faq-content-1">
                                        <div class="images-box-faq-content-1-inner">
                                            <div class="images-box-faq-content-1-left">
                                                <div class="images-box-faq-content-1-h">
                                                    <h3><?php echo get_sub_field('section_6_1_listing_2_title'); ?></h3>
                                                </div>
                                                <div class="images-box-faq-content-1-b">
                                                    <?php echo get_sub_field('section_6_1_listing_2_description'); ?>
                                                </div>
                                            </div>
                                            <div class="images-box-faq-content-1-right">
                                                <div class="slider-box sliderBox">
                                                    <?php
                                                    if (have_rows('section_6_1_listing_2_listing')) {
                                                        while (have_rows('section_6_1_listing_2_listing')) {
                                                            the_row(); ?>
                                                            <div>
                                                                <picture>
                                                                    <img
                                                                        src="<?php echo get_sub_field('section_6_1_listing_2_listing_image'); ?>"
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
                            <?php $i++;
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="Outstanding-service-inner-body">
                        <div class="upper-side-top-images">
                            <?php
                            if (have_rows('section_6_2_listing_1')) {
                                while (have_rows('section_6_2_listing_1')) {
                                    the_row(); ?>
                                    <div class="images-box-faq">
                                        <div class="image-content-top">
                                            <img
                                                src="<?php echo get_sub_field('section_6_1_listing_1_image'); ?>"
                                                alt>
                                        </div>
                                        <div class="image-content-bottom">
                                            <a href="#" data-content="content-s4"
                                                href><?php echo get_sub_field('section_6_1_listing_1_title'); ?></a>
                                        </div>
                                    </div>
                            <?php }
                            }
                            ?>
                        </div>
                        <div class="upper-side-bottom-images">
                            <?php
                            if (have_rows('section_6_2_listing_2')) {
                                $i = 4;
                                while (have_rows('section_6_2_listing_2')) {
                                    the_row(); ?>
                                    <div id="content-s<?php echo $i; ?>"
                                        class="images-box-faq-content-1">
                                        <div class="images-box-faq-content-1-inner">
                                            <div class="images-box-faq-content-1-left">
                                                <div class="images-box-faq-content-1-h">
                                                    <h3><?php echo get_sub_field('section_6_2_listing_2_title'); ?></h3>
                                                </div>
                                                <div class="images-box-faq-content-1-b">
                                                    <?php echo get_sub_field('section_6_2_listing_2_description'); ?>
                                                </div>
                                            </div>
                                            <div class="images-box-faq-content-1-right">
                                                <div class="slider-box sliderBox">
                                                    <?php
                                                    if (have_rows('section_6_2_listing_2_listing')) {
                                                        while (have_rows('section_6_2_listing_2_listing')) {
                                                            the_row(); ?>
                                                            <div>
                                                                <picture>
                                                                    <img
                                                                        src="<?php echo get_sub_field('section_6_2_listing_2_listing_image'); ?>"
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
                            <?php $i++;
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="Outstanding-service-inner-body">
                        <div class="upper-side-top-images">
                            <?php
                            if (have_rows('section_6_3_listing_1')) {
                                while (have_rows('section_6_3_listing_1')) {
                                    the_row(); ?>
                                    <div class="images-box-faq">
                                        <div class="image-content-top">
                                            <img
                                                src="<?php echo get_sub_field('section_6_3_listing_1_image'); ?>"
                                                alt>
                                        </div>
                                        <div class="image-content-bottom">
                                            <a href="#" data-content="content-s7"
                                                href><?php echo get_sub_field('section_6_3_listing_1_title'); ?></a>
                                        </div>
                                    </div>
                            <?php }
                            }
                            ?>
                        </div>
                        <div class="upper-side-bottom-images">
                            <?php
                            if (have_rows('section_6_3_listing_2')) {
                                $i = 7;
                                while (have_rows('section_6_3_listing_2')) {
                                    the_row(); ?>
                                    <div id="content-s<?php echo $i; ?>"
                                        class="images-box-faq-content-1">
                                        <div class="images-box-faq-content-1-inner">
                                            <div class="images-box-faq-content-1-left">
                                                <div class="images-box-faq-content-1-h">
                                                    <h3><?php echo get_sub_field('section_6_3_listing_2_title'); ?></h3>
                                                </div>
                                                <div class="images-box-faq-content-1-b">
                                                    <?php echo get_sub_field('section_6_3_listing_2_description'); ?>
                                                </div>
                                            </div>
                                            <div class="images-box-faq-content-1-right">
                                                <div class="slider-box sliderBox">
                                                    <?php
                                                    if (have_rows('section_6_3_listing_2_listing')) {
                                                        while (have_rows('section_6_3_listing_2_listing')) {
                                                            the_row(); ?>
                                                            <div>
                                                                <picture>
                                                                    <img
                                                                        src="<?php echo get_sub_field('section_6_3_listing_2_listing_image'); ?>"
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
                            <?php $i++;
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    class="section-padding about-us-service Outstanding-service-section partitionWallServ sliding-doors-bottom-parent">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-right">
                    <h2 class="text-uppercase"><?php echo get_field('section_7_heading'); ?></h2>
                    <p><?php echo get_field('section_7_description'); ?></p>
                </div>
            </div>
            <div class="Outstanding-service-inner-body">
                <div class="upper-side-top-images">
                    <?php
                    if (have_rows('section_7_listing')) {
                        while (have_rows('section_7_listing')) {
                            the_row(); ?>
                            <div class="images-box-faq">
                                <div class="image-content-top">
                                    <img
                                        src="<?php echo get_sub_field('section_7_listing_image'); ?>"
                                        alt>
                                </div>
                                <div class="image-content-bottom">
                                    <a href="#" data-content="content-31"
                                        href><?php echo get_sub_field('section_7_listing_title'); ?></a>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
                <div class="upper-side-bottom-images">
                    <?php
                    if (have_rows('section_7_listing_1')) {
                        $i = 3;
                        while (have_rows('section_7_listing_1')) {
                            the_row(); ?>
                            <div id="content-<?php echo $i; ?>1"
                                class="images-box-faq-content-1">
                                <div class="images-box-faq-content-1-inner">
                                    <div class="images-box-faq-content-1-left">
                                        <div class="images-box-faq-content-1-h">
                                            <h3><?php echo get_sub_field('section_7_listing_1_heading'); ?>
                                            </h3>
                                        </div>
                                        <div class="images-box-faq-content-1-b">
                                            <?php echo get_sub_field('section_7_listing_1_description'); ?>
                                        </div>
                                    </div>
                                    <div class="images-box-faq-content-1-right">
                                        <div class="slider-box sliderBox">
                                            <?php
                                            if (have_rows('section_7_listing_1_listing')) {
                                                while (have_rows('section_7_listing_1_listing')) {
                                                    the_row(); ?>
                                                    <div>
                                                        <picture>
                                                            <img
                                                                src="<?php echo get_sub_field('section_7_listing_1_listing_image'); ?>"
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
                    <?php $i++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding light_grey grid-box-container">
    <div class="container">
        <div class="grid-box-container">
            <?php
            if (have_rows('section_8_listing')) {
                while (have_rows('section_8_listing')) {
                    the_row(); ?>
                    <div class="grid-box-container-inner">
                        <div class="grid-box-container-inner-image">
                            <img
                                src="<?php echo get_sub_field('section_8_listing_image'); ?>"
                                alt>
                        </div>
                        <div class="grid-box-container-inner-h">
                            <a href="<?php echo get_sub_field('section_8_listing_btn_link'); ?>">
                                <h3><?php echo get_sub_field('section_8_listing_btn_text'); ?></h3>
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

<section class="section-padding about-us-service Outstanding-service-section partitionWallServ1">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-right ">
                    <h2 class="text-uppercase"><?php echo get_field('section_9_heading'); ?></h2>
                    <?php echo get_field('section_9_description'); ?>
                </div>
            </div>
            <div class="Outstanding-service-inner-body">
                <div class="upper-side-bottom-images">
                    <div class="images-box-faq-content-1">
                        <div class="images-box-faq-content-1-inner">
                            <div class="images-box-faq-content-1-left">
                                <div class="images-box-faq-content-1-h">
                                    <h3><?php echo get_field('section_9_title'); ?></h3>
                                </div>
                                <div class="images-box-faq-content-1-b">
                                    <p><?php echo get_field('section_9_subheading'); ?></p>
                                </div>
                            </div>
                            <div class="images-box-faq-content-1-right">
                                <div class="slider-box sliderBox">
                                    <?php
                                    if (have_rows('section_9_listing')) {
                                        while (have_rows('section_9_listing')) {
                                            the_row(); ?>
                                            <div>
                                                <picture>
                                                    <img
                                                        src="<?php echo get_sub_field('section_9_listing_image'); ?>"
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
                </div>
            </div>
        </div>
    </div>
</section>
<section class="call_to_action_home p_t">
    <div class="container">
        <div class="call_to_action_parent">
            <div class="call_to_action_left">
                <h2><?php echo get_field('middle_cta_heading'); ?></h2>
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

<section class="section-padding door-size-table p_t">
    <div class="container">
        <div class="door-size-table">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-right ">
                    <h2 class="text-uppercase"><?php echo get_field('section_10_heading'); ?>
                        <span><?php echo get_field('section_10_color_heading'); ?></span>
                    </h2>
                </div>
            </div>
            <div class="door-size-table-body">
                <div class="ce-bodytext">
                    <table align="center"
                        class="contenttable stickytable-left">
                        <thead>
                            <tr>
                                <th scope="col">Sliding
                                    door</th>
                                <th
                                    class="text-center" scope="col"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/material/csm_Bild1257_Tabelle_01_07a989b412.jpg"
                                        width="100" height="100"
                                        title="Griffvarianten: Griff zum Aufkleben, eckig"
                                        loading="lazy"></th>
                                <th
                                    class="text-center" scope="col"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/material/csm_Griff_eingelassen_S8000_Tabelle_24bf5a5e43.jpg"
                                        width="100" height="100"
                                        title="Griff eingelassen Gleittürsystem S8000"
                                        loading="lazy"></th>
                                <th
                                    class="text-center" scope="col"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/material/csm_Griff_2404_Tabelle_01_cd577ee558.jpg"
                                        width="100" height="100"
                                        title="Griffvarianten: Griff Quader vertikal"
                                        loading="lazy"></th>
                                <th
                                    class="text-center" scope="col"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/material/csm_Griffstange04_S3000_Tabelle_01_0e53db821c.jpg"
                                        width="100" height="100"
                                        title="Griffvarianten: Griffstange"
                                        loading="lazy"></th>
                                <th
                                    class="text-center" scope="col"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/material/csm_Schwenkriegelgriff_S3000_offen_Tabelle_01_ca145e006a.jpg"
                                        width="100" height="100"
                                        title="Griffvarianten: Schwenkriegel"
                                        loading="lazy"></th>
                                <th
                                    class="text-center" scope="col"><img
                                        alt="Griffvarianten: Schwebender Griff"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/material/csm_Bild1465_Tabelle_01_5f7f6e3627.jpg"
                                        width="100" height="100"
                                        title="Griffvarianten: Schwebender Griff"
                                        loading="lazy"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>S720</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                            </tr>
                            <tr>
                                <td>S800</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                            </tr>
                            <tr>
                                <td>S8000</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                            </tr>
                            <tr>
                                <td>S8000 Air</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                            </tr>
                            <tr>
                                <td>S1200</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                            </tr>
                            <tr>
                                <td>S1200 Air</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                            </tr>
                            <tr>
                                <td>S1500</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                            </tr>
                            <tr>
                                <td>S1500 Air</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                            </tr>
                            <tr>
                                <td>S3000</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                            </tr>
                            <tr>
                                <td>S3000 Air</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">+</td>
                                <td
                                    class="text-center">-</td>
                            </tr>
                            <tr>
                                <td colspan="3"><em>+ possible, -
                                        not possible</em></td>
                                <td
                                    class="text-center">&nbsp;</td>
                                <td
                                    class="text-center">&nbsp;</td>
                                <td
                                    class="text-center">&nbsp;</td>
                                <td
                                    class="text-center">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding hotline-section projects_section_parent p_t slide-doors-section-project">
    <div class="hotline-section-inner">
        <div class="hotline-section-body">
            <?php
            if (have_rows('section_11_listing')) {
                while (have_rows('section_11_listing')) {
                    the_row(); ?>
                    <div class="hotline-section-body-box">
                        <div class="container">
                            <div class="hotline-section-body-box-left">
                                <img
                                    src="<?php echo get_sub_field('section_11_listing_image'); ?>"
                                    alt>
                            </div>
                            <div class="hotline-section-body-box-right">
                                <div class="badge-slider-doors">
                                    <span><?php echo get_sub_field('section_11_listing_title'); ?></span>
                                </div>
                                <div class="hotline-section-body-box-right-h">
                                    <h3> <span class="counter-text">1. </span> <?php echo get_sub_field('section_11_listing_heading'); ?>
                                    </h3>
                                </div>
                                <div class="hotline-section-body-box-right-p">
                                    <p><?php echo get_sub_field('section_11_listing_description'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>

<section class="section-padding light_grey grid-box-container">
    <div class="container">
        <div class="grid-box-container">
            <?php
            if (have_rows('section_12_listing')) {
                while (have_rows('section_12_listing')) {
                    the_row(); ?>
                    <div class="grid-box-container-inner">
                        <div class="grid-box-container-inner-image">
                            <img
                                src="<?php echo get_sub_field('section_12_listing_image'); ?>"
                                alt>
                        </div>
                        <div class="grid-box-container-inner-h">
                            <a href="<?php echo get_sub_field('section_12_listing_btn_link'); ?>">
                                <h3><?php echo get_sub_field('section_12_listing_btn_text'); ?></h3>
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
                    <span> <?php echo get_field('section_13_title'); ?></span>
                </div>
                <div class="form-section-h2">
                    <h2><?php echo get_field('section_13_heading'); ?> <span><?php echo get_field('section_13_color_heading'); ?> </span> <?php echo get_field('section_13_normal_heading'); ?> </h2>
                </div>
                <div class="form-section-p">
                    <p><?php echo get_field('section_13_subheading'); ?></p>
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