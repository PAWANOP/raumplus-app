<?php
get_header('header');
/*
Template Name: references
*/
?>

<!-- Hero Slider -->
<section id="aboutUsContainer" class="aboutUsContainer" style="background-image: url('<?php echo get_field('banner_image'); ?>)">
    <div class="heading-top">

    </div>
</section>
<div class="light_grey">
    <div class="container">
        <div class="breadcrumb-link">
            <ul>
                <li><a href>Home</a></li>
                <li><a href>Projects</a></li>
                <li>References</li>
            </ul>
        </div>
    </div>
</div>

<section class="section-padding references-section light_grey p_t">
    <div class="container">
        <div class="testimonials-section-inner">
            <div class="testimonials-list-section-inner-heading">
                <div
                    class="testimonials-list-section-inner-heading-right">
                    <h1 class="h1_heading"><?php echo get_field('section_1_heading'); ?><span> <?php echo get_field('section_1_color_heading'); ?></span></h1>
                </div>
            </div>
            <div class="references-section-body">
                <div class="references-section-p">
                    <?php echo get_field('section_1_description'); ?>
                </div>
                <div class="references-section-button">
                    <div class="download_pdf_awards">
                        <a href class="btn_1">
                            <span class="btn-inner">
                                <span class="svg-span"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 306.7L246.6 265.3C234.1 252.8 213.8 252.8 201.3 265.3C188.8 277.8 188.8 298.1 201.3 310.6L297.3 406.6C309.8 419.1 330.1 419.1 342.6 406.6L438.6 310.6C451.1 298.1 451.1 277.8 438.6 265.3C426.1 252.8 405.8 252.8 393.3 265.3L352 306.7L352 96zM160 384C124.7 384 96 412.7 96 448L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 448C544 412.7 515.3 384 480 384L433.1 384L376.5 440.6C345.3 471.8 294.6 471.8 263.4 440.6L206.9 384L160 384zM464 440C477.3 440 488 450.7 488 464C488 477.3 477.3 488 464 488C450.7 488 440 477.3 440 464C440 450.7 450.7 440 464 440z"></path>
                                    </svg></span>
                                <span class="text-span">Brochure
                                    references (PDF)</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="references-section-list-parent">
                    <div class="references-section-list">
                        <div class="Outstanding-service-inner-body">
                            <div class="upper-side-top-images">
                                <?php
                                if (have_rows('section_1_listing')) {
                                    $i = 14;
                                    while (have_rows('section_1_listing')) {
                                        the_row(); ?>
                                        <div class="images-box-faq">
                                            <div class="image-content-top">
                                                <img
                                                    src="<?php echo get_sub_field('section_1_listing_image'); ?>"
                                                    alt>
                                            </div>
                                            <div class="image-content-bottom">
                                                <a href="#"
                                                    data-content="content-<?php echo $i; ?>"
                                                    href><?php echo get_sub_field('section_1_listing_title'); ?></a>
                                            </div>
                                        </div>
                                <?php $i++;
                                    }
                                }
                                ?>
                            </div>
                            <div class="upper-side-bottom-images">
                                <?php
                                if (have_rows('section_1_listing_1')) {
                                    $i = 14;
                                    while (have_rows('section_1_listing_1')) {
                                        the_row(); ?>
                                        <div id="content-<?php echo $i; ?>"
                                            class="images-box-faq-content-1">
                                            <div
                                                class="images-box-faq-content-1-inner">
                                                <div
                                                    class="images-box-faq-content-1-left">
                                                    <div
                                                        class="images-box-faq-content-1-h">
                                                        <h3><?php echo get_sub_field('section_1_listing_1_title'); ?></h3>
                                                    </div>
                                                    <div
                                                        class="images-box-faq-content-1-b">
                                                        <?php echo get_sub_field('section_1_listing_1_description'); ?>
                                                    </div>
                                                </div>
                                                <div
                                                    class="images-box-faq-content-1-right">
                                                    <div
                                                        class="slider-box sliderBox">
                                                        <?php
                                                        if (have_rows('section_1_listing_1_listing')) {
                                                            while (have_rows('section_1_listing_1_listing')) {
                                                                the_row(); ?>
                                                                <div>
                                                                    <picture>
                                                                        <img
                                                                            src="<?php echo get_sub_field('section_1_listing_1_listing_image'); ?>"
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
                                if (have_rows('section_2_listing_1')) {
                                    $i = 1;
                                    while (have_rows('section_2_listing_1')) {
                                        the_row(); ?>
                                        <div class="images-box-faq">
                                            <div class="image-content-top">
                                                <img
                                                    src="<?php echo get_sub_field('section_2_listing_1_image'); ?>"
                                                    alt>
                                            </div>
                                            <div class="image-content-bottom">
                                                <a href="#"
                                                    data-content="content-<?php echo $i; ?>"
                                                    href><?php echo get_sub_field('section_2_listing_1_title'); ?></a>
                                            </div>
                                        </div>
                                <?php $i++;
                                    }
                                }
                                ?>
                            </div>
                            <div class="upper-side-bottom-images">
                                <?php
                                if (have_rows('section_2_listing_1')) {
                                    $i = 1;
                                    while (have_rows('section_2_listing_1')) {
                                        the_row(); ?>
                                        <div id="content-<?php echo $i; ?>"
                                            class="images-box-faq-content-1">
                                            <div
                                                class="images-box-faq-content-1-inner">
                                                <div
                                                    class="images-box-faq-content-1-left">
                                                    <div
                                                        class="images-box-faq-content-1-h">
                                                        <h3><?php echo get_sub_field('section_2_listing_1_title'); ?></h3>
                                                    </div>
                                                    <div
                                                        class="images-box-faq-content-1-b">
                                                        <?php echo get_sub_field('section_2_listing_1_description'); ?>
                                                    </div>
                                                </div>
                                                <div
                                                    class="images-box-faq-content-1-right">
                                                    <div
                                                        class="slider-box sliderBox">
                                                        <?php
                                                        if (have_rows('section_2_listing_1_listing')) {
                                                            while (have_rows('section_2_listing_1_listing')) {
                                                                the_row(); ?>
                                                                <div>
                                                                    <picture>
                                                                        <img
                                                                            src="<?php echo get_sub_field('section_2_listing_1_listing_image'); ?>"
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
                                if (have_rows('section_3_listing')) {
                                    $i = 4;
                                    while (have_rows('section_3_listing')) {
                                        the_row(); ?>
                                        <div class="images-box-faq">
                                            <div class="image-content-top">
                                                <img
                                                    src="<?php echo get_sub_field('section_3_listing_image'); ?>"
                                                    alt>
                                            </div>
                                            <div class="image-content-bottom">
                                                <a href="#"
                                                    data-content="content-<?php echo $i; ?>"
                                                    href><?php echo get_sub_field('section_3_listing_title'); ?></a>
                                            </div>
                                        </div>
                                <?php $i++;
                                    }
                                }
                                ?>
                            </div>
                            <div class="upper-side-bottom-images">
                                <?php
                                if (have_rows('section_3_listing_1')) {
                                    $i = 4;
                                    while (have_rows('section_3_listing_1')) {
                                        the_row(); ?>
                                        <div id="content-<?php echo $i; ?>"
                                            class="images-box-faq-content-1">
                                            <div
                                                class="images-box-faq-content-1-inner">
                                                <div
                                                    class="images-box-faq-content-1-left">
                                                    <div
                                                        class="images-box-faq-content-1-h">
                                                        <h3><?php echo get_sub_field('section_3_listing_1_title'); ?></h3>
                                                    </div>
                                                    <div
                                                        class="images-box-faq-content-1-b">
                                                        <?php echo get_sub_field('section_3_listing_1_description'); ?>
                                                    </div>
                                                </div>
                                                <div
                                                    class="images-box-faq-content-1-right">
                                                    <div
                                                        class="slider-box sliderBox">
                                                        <?php
                                                        if (have_rows('section_3_listing_1_listing')) {
                                                            while (have_rows('section_3_listing_1_listing')) {
                                                                the_row(); ?>
                                                                <div>
                                                                    <picture>
                                                                        <img
                                                                            src="<?php echo get_sub_field('section_3_listing_1_listing_image'); ?>"
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
                                if (have_rows('section_4_listing')) {
                                    $i = 7;
                                    while (have_rows('section_4_listing')) {
                                        the_row(); ?>
                                        <div class="images-box-faq">
                                            <div class="image-content-top">
                                                <img
                                                    src="<?php echo get_sub_field('section_4_listing_image'); ?>"
                                                    alt>
                                            </div>
                                            <div class="image-content-bottom">
                                                <a href="#"
                                                    data-content="content-<?php echo $i; ?>"
                                                    href><?php echo get_sub_field('section_4_listing_title'); ?></a>
                                            </div>
                                        </div>
                                <?php $i++;
                                    }
                                }
                                ?>
                            </div>
                            <div class="upper-side-bottom-images">
                                <?php
                                if (have_rows('section_4_listing_1')) {
                                    $i = 7;
                                    while (have_rows('section_4_listing_1')) {
                                        the_row(); ?>
                                        <div id="content-<?php echo $i; ?>"
                                            class="images-box-faq-content-1">
                                            <div
                                                class="images-box-faq-content-1-inner">
                                                <div
                                                    class="images-box-faq-content-1-left">
                                                    <div
                                                        class="images-box-faq-content-1-h">
                                                        <h3><?php echo get_sub_field('section_4_listing_1_title'); ?></h3>
                                                    </div>
                                                    <div
                                                        class="images-box-faq-content-1-b">
                                                        <?php echo get_sub_field('section_4_listing_1_description'); ?>
                                                    </div>
                                                </div>
                                                <div
                                                    class="images-box-faq-content-1-right">
                                                    <div
                                                        class="slider-box sliderBox">
                                                        <?php
                                                        if (have_rows('section_4_listing_1_listing')) {
                                                            while (have_rows('section_4_listing_1_listing')) {
                                                                the_row(); ?>
                                                                <div>
                                                                    <picture>
                                                                        <img
                                                                            src="<?php echo get_sub_field('section_4_listing_1_listing_image'); ?>"
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
                                if (have_rows('section_5_listing')) {
                                    $i = 10;
                                    while (have_rows('section_5_listing')) {
                                        the_row(); ?>
                                        <div class="images-box-faq">
                                            <div class="image-content-top">
                                                <img
                                                    src="<?php echo get_sub_field('section_5_listing_image'); ?>"
                                                    alt>
                                            </div>
                                            <div class="image-content-bottom">
                                                <a href="#"
                                                    data-content="content-<?php echo $i; ?>"
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
                                    $i = 10;
                                    while (have_rows('section_5_listing_1')) {
                                        the_row(); ?>
                                        <div id="content-<?php echo $i; ?>"
                                            class="images-box-faq-content-1">
                                            <div
                                                class="images-box-faq-content-1-inner">
                                                <div
                                                    class="images-box-faq-content-1-left">
                                                    <div
                                                        class="images-box-faq-content-1-h">
                                                        <h3><?php echo get_sub_field('section_5_listing_1_title'); ?></h3>
                                                    </div>
                                                    <div
                                                        class="images-box-faq-content-1-b">
                                                        <?php echo get_sub_field('section_5_listing_1_description'); ?>
                                                    </div>
                                                </div>
                                                <div
                                                    class="images-box-faq-content-1-right">
                                                    <div
                                                        class="slider-box sliderBox">
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
                        <div class="Outstanding-service-inner-body">
                            <div class="upper-side-top-images">
                                <?php
                                if (have_rows('section_6_listing')) {
                                    $i = 17;
                                    while (have_rows('section_6_listing')) {
                                        the_row(); ?>
                                        <div class="images-box-faq">
                                            <div class="image-content-top">
                                                <img
                                                    src="<?php echo get_sub_field('section_6_listing_image'); ?>"
                                                    alt>
                                            </div>
                                            <div class="image-content-bottom">
                                                <a href="#"
                                                    data-content="content-<?php echo $i; ?>"
                                                    href><?php echo get_sub_field('section_6_listing_title'); ?></a>
                                            </div>
                                        </div>
                                <?php $i++;
                                    }
                                }
                                ?>
                            </div>
                            <div class="upper-side-bottom-images">
                                <?php
                                if (have_rows('section_6_listing_1')) {
                                    $i = 17;
                                    while (have_rows('section_6_listing_1')) {
                                        the_row(); ?>
                                        <div id="content-<?php echo $i; ?>"
                                            class="images-box-faq-content-1">
                                            <div
                                                class="images-box-faq-content-1-inner">
                                                <div
                                                    class="images-box-faq-content-1-left">
                                                    <div
                                                        class="images-box-faq-content-1-h">
                                                        <h3><?php echo get_sub_field('section_6_listing_1_title'); ?></h3>
                                                    </div>
                                                    <div
                                                        class="images-box-faq-content-1-b">
                                                        <?php echo get_sub_field('section_6_listing_1_description'); ?>
                                                    </div>
                                                </div>
                                                <div
                                                    class="images-box-faq-content-1-right">
                                                    <div
                                                        class="slider-box sliderBox">
                                                        <?php
                                                        if (have_rows('section_6_listing_1_listing')) {
                                                            while (have_rows('section_6_listing_1_listing')) {
                                                                the_row(); ?>
                                                                <div>
                                                                    <picture>
                                                                        <img
                                                                            src="<?php echo get_sub_field('section_6_listing_1_listing_image'); ?>"
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
                        <div class="references-section-button">
                            <div class="download_pdf_awards">
                                <a href class="btn_1">
                                    <span class="btn-inner">
                                        <span class="svg-span"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 640">
                                                <path
                                                    d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 306.7L246.6 265.3C234.1 252.8 213.8 252.8 201.3 265.3C188.8 277.8 188.8 298.1 201.3 310.6L297.3 406.6C309.8 419.1 330.1 419.1 342.6 406.6L438.6 310.6C451.1 298.1 451.1 277.8 438.6 265.3C426.1 252.8 405.8 252.8 393.3 265.3L352 306.7L352 96zM160 384C124.7 384 96 412.7 96 448L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 448C544 412.7 515.3 384 480 384L433.1 384L376.5 440.6C345.3 471.8 294.6 471.8 263.4 440.6L206.9 384L160 384zM464 440C477.3 440 488 450.7 488 464C488 477.3 477.3 488 464 488C450.7 488 440 477.3 440 464C440 450.7 450.7 440 464 440z"></path>
                                            </svg></span>
                                        <span class="text-span">Brochure
                                            references (PDF)</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
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
                    <span> <?php echo get_field('section_7_title'); ?></span>
                </div>
                <div class="form-section-h2">
                    <h2><?php echo get_field('section_7_heading'); ?> <span><?php echo get_field('section_7_color_heading'); ?> </span> <?php echo get_field('section_7_normal_heading'); ?></h2>
                </div>
                <div class="form-section-p">
                    <p><?php echo get_field('section_7_subheading'); ?></p>
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