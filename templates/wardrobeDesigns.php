<?php
get_header('header');
/*
Template Name: wardrobsdesign
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
<div class="container">
    <div class="breadcrumb-link">
        <ul>
            <li><a href="">Home</a></li>
            <li>Wardrobe Designs</li>
        </ul>
    </div>
</div>

<section class="readmore_content partitionWalls_readMore">
    <div class="container">
        <div class="readmore_content_inner">
            <div>
                <h1 class="h1_heading"><?php echo get_field('section_1_heading'); ?></h1>
                <?php echo get_field('section_1_description'); ?>
                <div class="textwraper" id="more" data-content="1" style="display: none;">
                    <h3><?php echo get_field('section_1_listing_heading'); ?></h3>
                    <p><?php echo get_field('section_1_listing_subheading'); ?></p>
                    <?php
                    if (have_rows('section_1_listing')) {
                        while (have_rows('section_1_listing')) {
                            the_row(); ?>
                            <ul>
                                <li><strong><?php echo get_sub_field('section_1_listing_title'); ?></strong></li>
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
<section class="section-padding why-choose doots-ideas-main-why-choose">
    <div class="container">
        <h2 class="section-title"><?php echo get_field('section_2_heading'); ?></h2>
        <div class="row owl-carousel-why-choose">
            <?php
            if (have_rows('section_2_listing')) {
                while (have_rows('section_2_listing')) {
                    the_row(); ?>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="why-choose-item">
                            <span><img src="<?php echo get_sub_field('section_2_listing_icon'); ?>" style="width: 55px;" alt=""></span>
                            <h5><?php echo get_sub_field('section_2_listing_title'); ?></h5>
                            <div class="overlay-text">
                                <p>All the designs are a combination of long-lasting performance.</p>
                            </div>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>
<section class="section-padding intelligent-list-section wardrobe-design-4grid">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span><?php echo get_field('section_3_title'); ?></span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_3_heading'); ?> <span> <?php echo get_field('section_3_color_heading'); ?> </span><?php echo get_field('section_3_noraml_heading'); ?></h2>
                </div>
            </div>
            <div class="intelligent-list-section-inner-body">
                <div class="row">
                    <?php
                    if (have_rows('section_3_listing')) {
                        while (have_rows('section_3_listing')) {
                            the_row(); ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-card card">
                                    <div class="product-card-image">
                                        <img src="<?php echo get_sub_field('section_3_listing_image'); ?>" alt="Corner Wardrobe">
                                    </div>
                                    <div class="card-body">
                                        <h5><?php echo get_sub_field('section_3_listing_title'); ?></h5>
                                        <p><?php echo get_sub_field('section_3_listing_description'); ?></p>
                                        <div class="button-wrapper text-center">
                                            <a href="<?php echo get_sub_field('section_3_listing_btn_link'); ?>" class="btn_1">
                                                <span class="btn-inner">
                                                    <span class="text-span"><?php echo get_sub_field('section_3_listing_btn_text'); ?></span>
                                                    <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 640 640">
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
<section class="section-padding projects-list-gallery gallery-design-4grid light_grey">
    <div class="container">
        <div class="projects-list-gallery-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span><?php echo get_field('section_4_title'); ?></span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_4_heading'); ?> <span> <?php echo get_field('section_4_color_heading'); ?></span> <?php echo get_field('section_4_normal_heading'); ?></h2>
                </div>
            </div>
            <div class="filter-buttons">
                <?php
                if (have_rows('section_4_listing_1')) {
                    $i = 0; // counter variable
                    while (have_rows('section_4_listing_1')) {
                        the_row();
                        $title = get_sub_field('section_4_listing_1_title');
                        $active_class = ($i == 0) ? 'active' : ''; // active only for first
                ?>
                        <button class="btn <?php echo $active_class; ?>" data-filter="<?php echo esc_attr($title); ?>">
                            <?php echo esc_html($title); ?>
                        </button>
                <?php
                        $i++;
                    }
                }
                ?>

            </div>
            <div class="projects-list-gallery-b">
                <div class="projects-list-gallery-b-inner owl-carousel owl-theme">
                    <?php
                    if (have_rows('section_4_listing_2')) {
                        while (have_rows('section_4_listing_2')) {
                            the_row(); ?>
                            <div class="projects-list-gallery-b-box <?php echo get_sub_field('section_4_listing_2_class_name'); ?>">
                                <div class="projects-list-gallery-b-box-images">
                                    <img width="50" height="50" loading="lazy" src="<?php echo get_sub_field('section_4_listing_2_image'); ?>" alt="" longdesc="">
                                </div>
                                <div class="projects-list-gallery-b-box-text">
                                    <h3 class="client_type"><?php echo get_sub_field('section_4_listing_2_title'); ?> </h3>
                                    <p><?php echo get_sub_field('section_4_listing_2_description'); ?></p>
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
<section class="section-padding about-us-section">
    <div class="container">
        <div class="about-us-section-inner">
            <div class="about-us-section-left">
                <div class="heading-title">
                    <span> <span class="dot"></span> <?php echo get_field('section_5_title'); ?></span>
                </div>
                <div class="heading-text">
                    <h2><?php echo get_field('section_5_heading'); ?> <span> <?php echo get_field('section_5_color_heading'); ?> </span></h2>
                </div>
                <div class="listing-style">
                    <ul>
                        <?php
                        if (have_rows('section_5_listing')) {
                            while (have_rows('section_5_listing')) {
                                the_row(); ?>
                                <li><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#1f1f1f">
                                        <path d="M400-304 240-464l56-56 104 104 264-264 56 56-320 320Z" />
                                    </svg><?php echo get_sub_field('section_5_listing_title'); ?></li>
                        <?php }
                        }
                        ?>
                    </ul>
                </div>
                <div class="left-para">
                    <?php echo get_field('section_5_description'); ?>
                </div>
                <div class="about-us-more">
                    <a href="<?php echo get_field('section_5_btn_link'); ?>" class="btn_1">
                        <span class="btn-inner">
                            <span class="text-span"><?php echo get_field('section_5_btn_text'); ?></span>
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
                        <img src="<?php echo get_field('section_5_image'); ?>" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding projects-list-gallery gallery-design-3grid light_grey wardrobe-design-filter">
    <div class="container">
        <div class="projects-list-gallery-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span><?php echo get_field('section_6_title'); ?></span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_6_heading'); ?> <span> <?php echo get_field('section_6_color_heading'); ?></span> <?php echo get_field('section_6_normal_heading'); ?></h2>
                </div>
            </div>
            <div class="filter-buttons">
                <?php
                if (have_rows('section_6_listing_1')) {
                    $i = 0; // counter variable
                    while (have_rows('section_6_listing_1')) {
                        the_row();
                        $title = get_sub_field('section_6_listing_1_title');
                        $filter = sanitize_title($title); 
                        $active_class = ($i == 0) ? 'active' : ''; // active only for first button
                ?>
                        <button class="btn <?php echo $active_class; ?>" data-filter="<?php echo esc_attr($filter); ?>">
                            <?php echo esc_html($title); ?>
                        </button>
                <?php
                        $i++;
                    }
                }
                ?>
            </div>
            <div class="projects-list-gallery-b">
                <div class="projects-list-gallery-b-inner owl-carousel owl-theme">
                    <?php
                    if (have_rows('section_6_listing_2')) {
                        while (have_rows('section_6_listing_2')) {
                            the_row(); ?>
                            <div class="projects-list-gallery-b-box <?php echo sanitize_title(get_sub_field('section_6_listing_2_class_name')); ?>">
                                <div class="projects-list-gallery-b-box-images">
                                    <a href="">
                                        <img src="<?php echo get_sub_field('section_6_listing_2_image'); ?>" alt="">
                                        <button><svg xmlns="http://www.w3.org/2000/svg" height="20px"
                                                viewBox="0 -960 960 960" width="20px" fill="#1f1f1f">
                                                <path d="M444-144v-300H144v-72h300v-300h72v300h300v72H516v300h-72Z" />
                                            </svg></button>
                                    </a>
                                </div>
                                <div class="projects-list-gallery-b-box-text">

                                    <span class="client_location"><?php echo get_sub_field('section_6_listing_2_title'); ?> </span>
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
<section class="section-padding form-section-bottom-side">
    <div class="container">
        <div class="form-section-bottom-side-inner">
            <div class="form-section-bottom-left">
                <div class="form-section-subtitle">
                    <span> <?php echo get_field('section_7_title'); ?></span>
                </div>
                <div class="form-section-h2">
                    <h2><?php echo get_field('section_7_heading'); ?> <span> <?php echo get_field('section_7_color_heading'); ?> </span> </h2>
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