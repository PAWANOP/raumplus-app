<?php
get_header('header');
/*
Template Post Type: wardrobs
Template Name: wardrobs
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
                <div class="carousel-item active" style="background-image: url('<?php echo get_sub_field('banner_listing'); ?>');"></div>
        <?php }
        }
        ?>

    </div>
</div>
<div class="container">
    <div class="breadcrumb-link">
        <ul>
            <li><a href>Home</a></li>
            <li>Folding Door</li>
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
                    <h3><?php echo get_field('section_1_listing_title'); ?></h3>
                    <p><?php echo get_field('section_1_listing_description'); ?></p>
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
<section class="section-padding features-benefits light_grey">
    <div class="container">
        <h2 class="section-title">Features & Benefits</h2>
        <div class="features-benefits-parent">
            <div class="features-benefits-inner">
                <div class="col-md-3 col-sm-6">
                    <i class="fas fa-drafting-compass fa-3x"></i>
                    <h3>Smooth folding mechanism</h3>
                    <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <i class="fas fa-drafting-compass fa-3x"></i>
                    <h3>German-engineered track system</h3>
                    <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <i class="fas fa-drafting-compass fa-3x"></i>
                    <h3>Noise-free & durable</h3>
                    <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <i class="fas fa-drafting-compass fa-3x"></i>
                    <h3>Multiple material finishes (glass, wood, lacquer, aluminum) </h3>
                    <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding video-slider-section">
    <div class="container">
        <div class="video-slider-section-container">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span>Our Process</span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h2>Applications</h2>
                </div>
            </div>
            <div class="video-slider-section-container-body">
                <div class="video-slider-section-container-inner owl-carousel-doors">
                    <div class="video-slider-section-box">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/Delu3Zwu1S8" title="Product series: Pivot Door S1200" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-slider-section-box">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/Delu3Zwu1S8" title="Product series: Pivot Door S1200" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="video-slider-section-box">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/Delu3Zwu1S8" title="Product series: Pivot Door S1200" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding door-ideas-single-design">
    <div class="container">
        <div class="door-ideas-single-design">
            <div class="door-ideas-single-design-header">
                <div class="door-ideas-single-design-header-left">
                    <span>Our Services</span>
                </div>
                <div class="door-ideas-single-design-header-right">
                    <h2>Design <span> Variants </span></h2>
                </div>
            </div>
            <div class="door-ideas-box-right-side-parent">
                <div class="door-ideas-box-right-side-inner owl-carousel-variant">
                    <div class="variant-box">
                        <div class="door-ideas-box-right-side">
                            <div class="door-ideas-box-right-side-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-img/walls/partition-wall.png" alt="">
                            </div>
                            <div class="door-ideas-box-right-side-content">
                                <h3>Frameless folding doors</h3>
                                <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                            </div>
                        </div>
                        <div class="door-ideas-box-right-side">
                            <div class="door-ideas-box-right-side-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-img/walls/partition-wall.png" alt="">
                            </div>
                            <div class="door-ideas-box-right-side-content">
                                <h3>Slim aluminum frames with glass</h3>
                                <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                            </div>
                        </div>
                    </div>
                    <div class="variant-box">
                        <div class="door-ideas-box-right-side">
                            <div class="door-ideas-box-right-side-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-img/walls/partition-wall.png" alt="">
                            </div>
                            <div class="door-ideas-box-right-side-content">
                                <h3>Frameless folding doors</h3>
                                <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                            </div>
                        </div>
                        <div class="door-ideas-box-right-side">
                            <div class="door-ideas-box-right-side-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-img/walls/partition-wall.png" alt="">
                            </div>
                            <div class="door-ideas-box-right-side-content">
                                <h3>Slim aluminum frames with glass</h3>
                                <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding wardrobe-single-design-box light_grey">
    <div class="container">
        <div class="door-ideas-single-design">
            <div class="door-ideas-single-design-header">
                <div class="door-ideas-single-design-header-left">
                    <span>Our Services</span>
                </div>
                <div class="door-ideas-single-design-header-right">
                    <h2>Design <span> Variants </span></h2>
                </div>
            </div>
            <div class="door-ideas-box-right-side-parent">
                <div class="door-ideas-box-right-side-inner">
                    <div class="door-ideas-box-right-side">

                        <div class="door-ideas-box-right-side-content">
                            <div class="column-heading">
                                <i class="fas fa-drafting-compass fa-2x"></i>
                                <h3>Frameless folding doors</h3>
                            </div>
                            <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                        </div>
                    </div>
                    <div class="door-ideas-box-right-side">

                        <div class="door-ideas-box-right-side-content">
                            <div class="column-heading">
                                <i class="fas fa-drafting-compass fa-2x"></i>
                                <h3>Frameless folding doors</h3>
                            </div>
                            <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                        </div>
                    </div>
                    <div class="door-ideas-box-right-side">

                        <div class="door-ideas-box-right-side-content">
                            <div class="column-heading">
                                <i class="fas fa-drafting-compass fa-2x"></i>
                                <h3>Frameless folding doors</h3>
                            </div>
                            <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                        </div>
                    </div>
                    <div class="door-ideas-box-right-side">
                        <div class="door-ideas-box-right-side-content">
                            <div class="column-heading">
                                <i class="fas fa-drafting-compass fa-2x"></i>
                                <h3>Frameless folding doors</h3>
                            </div>
                            <p>raumplus is a manufacturer of custom-made sliding doors, room dividers and wardrobe systems.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding process-list-section application-list-section grid-4-section">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span>Our Process</span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h2>Applications</h2>
                </div>
            </div>
            <div class="process-section-card-box">
                <div class="process-section-card-box-inner">
                    <div class="process-section-box">
                        <div class="process-section-box-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-img/walls/partition-wall.png" alt="">
                        </div>
                        <div class="process-section-box-bottom">
                            <h3>Bedroom wardrobes</h3>
                        </div>
                    </div>
                    <div class="process-section-box">
                        <div class="process-section-box-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-img/walls/partition-wall.png" alt="">
                        </div>
                        <div class="process-section-box-bottom">
                            <h3>Walk-in closets</h3>
                        </div>
                    </div>
                    <div class="process-section-box">
                        <div class="process-section-box-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-img/walls/partition-wall.png" alt="">
                        </div>
                        <div class="process-section-box-bottom">
                            <h3>Partition for compact rooms</h3>
                        </div>
                    </div>
                    <div class="process-section-box">
                        <div class="process-section-box-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-img/walls/partition-wall.png" alt="">
                        </div>
                        <div class="process-section-box-bottom">
                            <h3>Office spaces</h3>
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
                    <span> <span class="dot"></span> Started In 1991</span>
                </div>
                <div class="heading-text">
                    <h2>Where Spaces Inspire, and <span> Design Comes Alive </span></h2>
                </div>
                <div class="listing-style">
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#1f1f1f">
                                <path d="M400-304 240-464l56-56 104 104 264-264 56 56-320 320Z" />
                            </svg>Latest technologies</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#1f1f1f">
                                <path d="M400-304 240-464l56-56 104 104 264-264 56 56-320 320Z" />
                            </svg>High-Quality Designs</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#1f1f1f">
                                <path d="M400-304 240-464l56-56 104 104 264-264 56 56-320 320Z" />
                            </svg>5 Years Warranty </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#1f1f1f">
                                <path d="M400-304 240-464l56-56 104 104 264-264 56 56-320 320Z" />
                            </svg>Residential Design</li>
                    </ul>
                </div>
                <div class="left-para">
                    <p>With over 39 years of global expertise, Raumplus is a German brand known for its innovative
                        sliding door systems, room dividers, and intelligent wardrobe solutions. Present in 70+
                        countries, we combine engineering excellence with timeless design to create tailor-made
                        interior solutions for modern living.</p>
                </div>
                <div class="about-us-more">
                    <a href="" class="btn_1">
                        <span class="btn-inner">
                            <span class="text-span">More About Us</span>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Awards/P1001101_75.jpg" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="section-padding testimonials-section projects_testimonials light_grey">
    <div class="container">
        <div class="testimonials-section-inner">
            <div class="testimonials-list-section-inner-heading">
                <div
                    class="testimonials-list-section-inner-heading-left">
                    <span>What Our Clients Say</span>
                </div>
                <div
                    class="testimonials-list-section-inner-heading-right">
                    <h2>Real stories from <span> happy
                            spaces.</span></h2>
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
<section class="section-padding faq-question-section ">
    <div class="container">
        <div class="faq-question-section-inner">
            <div class="testimonials-list-section-inner-heading">
                <div class="testimonials-list-section-inner-heading-left">
                    <span>Faq</span>
                </div>
                <div class="testimonials-list-section-inner-heading-right">
                    <h2>Faq on The <span>Lawyer Of Confidence</span></h2>
                </div>
            </div>
            <div class="faq-question-section-body">
                <div class="faq-question-section-body-first">
                    <div class="faq-question-section-body-first-top">
                        <a href="#">FAQs on the lawyer of confidence</a>
                    </div>
                    <div class="faq-question-section-body-first-bottom">
                        <ul>
                            <li>
                                <a href="#" class="faq-question-header">What are the tasks of the lawyer of confidence?</a>
                                <div class="faq-question-body">
                                    <p>Employees have the right to point out circumstances that indicate a violation of laws or internal rules. The confidential lawyer accepts these reports. He offers a legally protected and confidential area outside the company. He/she informs the whistleblower about his/her rights and how to proceed. Only with the consent of the whistleblower will the confidential counsellor forward the report to his/her contact person in the company. </p>
                                    <p>The confidential lawyer can be involved in the process as a person of trust. He/she is available to the whistleblower as a contact person at all times. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Who can contact the lawyer of trust?</a>
                                <div class="faq-question-body">
                                    <p>All employees and external parties, such as suppliers or service providers, can contact the confidential counsellor. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">What information does the lawyer of confidence accept?</a>
                                <div class="faq-question-body">
                                    <p>The confidential lawyer receives reports of breaches of the law and internal violations. The main aim is to investigate and prevent economic crimes, accounting offenses and damage to assets. However, all breaches of the Code of Conduct, e.g. discrimination, can also be reported.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Can I be sure that the trusted lawyer will only pass on as much information as I allow him to?</a>
                                <div class="faq-question-body">
                                    <p>Yes, travel expenses will be reimbursed by the company. The settlement will be handled by the lawyer of trust, so that anonymity - if necessary - is also maintained here. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Will it cost me anything if I use the lawyer of trust?</a>
                                <div class="faq-question-body">
                                    <p>No, anyone can make use of the lawyer of confidence free of charge.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Can I also contact the lawyer of trust anonymously?</a>
                                <div class="faq-question-body">
                                    <p>Yes, whistleblowers can also contact the lawyer of confidence anonymously. This applies from the first contact with the lawyer of confidence. If desired, the confidential lawyer will subsequently maintain the anonymity of the whistleblower vis-à-vis the company. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">What happens to my report?</a>
                                <div class="faq-question-body">
                                    <p>The report will be investigated in accordance with the law and internal rules, taking into account the interests of all parties involved. To this end, the confidential counsellor will forward the report to his contact person in the company after prior examination. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">May I contact the lawyer of confidence about the status of the proceedings?</a>
                                <div class="faq-question-body">
                                    <p>The whistleblower can contact the lawyer of trust at any time to find out about the status of the case. The whistleblower will be informed of the outcome by the confidential counsellor at the latest after the case has been concluded, to the extent permitted by law. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Will the lawyer of trust become "my lawyer" if I contact him?</a>
                                <div class="faq-question-body">
                                    <p>No, the lawyer of confidence may not represent a whistleblower in official or court proceedings. Therefore, the lawyer of confidence cannot and must not take any steps to enforce the individual rights or claims of the whistleblower in court.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Is the lawyer of trust really independent?</a>
                                <div class="faq-question-body">
                                    <p>Yes, the lawyer of confidence acts as an independent and autonomous lawyer and is not subject to any instructions from the company regarding the handling of the matter. The lawyer of confidence decides on the basis of his own dutiful examination whether and to what extent he may pass on a matter submitted to him to the company.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">How is the first contact made?</a>
                                <div class="faq-question-body">
                                    <p>The first contact can be made by phone, email, text message, post or in a personal meeting. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Can I continue to contact the responsible departments in the company?</a>
                                <div class="faq-question-body">
                                    <p>Yes, every employee can continue to contact their line manager, the works council and the management.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Am I protected as a whistleblower?</a>
                                <div class="faq-question-body">
                                    <p>Yes, the whistleblower is protected. Any act of retaliation against the whistleblower will not be tolerated. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">How is abuse of the facility (denunciation) prevented?</a>
                                <div class="faq-question-body">
                                    <p>Despite repeated expressions of skepticism, cases of whistleblowing when appointing a confidential lawyer are very rare. Nevertheless, at the beginning of the conversation, the confidential lawyer informs the whistleblower that misuse of the whistleblowing system will not be tolerated and that the confidential lawyer is obliged to pass on the personal details of the whistleblower to the company in the event of deliberate, i.e. knowing, misuse. In any case, employees who deliberately misuse the whistleblowing system may face disciplinary consequences. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">How are data protection and data security complied with?</a>
                                <div class="faq-question-body">
                                    <p>The confidential lawyer ensures compliance with the statutory retention obligations and data protection regulations. The personal data collected is limited to information on the identity of the whistleblower and the person(s) concerned. The company's data protection officer regularly checks the data protection compliance of the whistleblowing management.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Will I be dismissed immediately if I am affected by a notice?</a>
                                <div class="faq-question-body">
                                    <p>No. The presumption of innocence applies. Every report is investigated in accordance with the law and internal rules, taking into account the interests of all parties involved. A decision on possible measures will only be made once the matter has been concluded.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">What happens if I give a tip but it turns out to be wrong?</a>
                                <div class="faq-question-body">
                                    <p>If the tip-off was given in good faith, i.e. not intentionally false, the whistleblower does not have to fear any consequences.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Do I have to contact the lawyer of trust if I suspect a violation of the law?</a>
                                <div class="faq-question-body">
                                    <p>No, recourse to the lawyer of confidence is voluntary. It has been set up as an additional point of contact.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Can I also visit the lawyer of confidence in person?</a>
                                <div class="faq-question-body">
                                    <p>Yes, you can visit the lawyer of confidence in person at any time for a confidential discussion.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">May I contact or even visit the lawyer of confidence during working hours?</a>
                                <div class="faq-question-body">
                                    <p>Yes.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Will my travel expenses be reimbursed by the company?</a>
                                <div class="faq-question-body">
                                    <p>Yes, travel expenses will be reimbursed by the company. The settlement will be handled by the lawyer of trust, so that anonymity - if necessary - is also maintained here. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Will I be notified when my tip has been processed?</a>
                                <div class="faq-question-body">
                                    <p>Yes, the whistleblower will be informed of the outcome by the lawyer of trust at the latest after the process has been completed, to the extent permitted by law.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Does the lawyer of confidence have to disclose my identity if he is questioned as a witness in criminal or civil proceedings?</a>
                                <div class="faq-question-body">
                                    <p>No. If the lawyer of confidence is questioned as a witness in criminal, civil or other proceedings, he will only disclose the name and identity of the whistleblower seeking advice if he has been expressly permitted to do so by both the company and the whistleblower. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Can I contact the lawyer of trust and only decide at the end of the interview whether the facts of the case and/or my personal details will be passed on to the company?</a>
                                <div class="faq-question-body">
                                    <p>Yes, the confidential lawyer can initially be contacted in complete confidence. The confidential lawyer will inform the whistleblower of his or her rights at the beginning of the conversation. Only at the end of the conversation does the whistleblower then decide whether and in what form the information should be passed on to the company group. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Should I also contact the lawyer of trust if I could have made myself liable to prosecution?</a>
                                <div class="faq-question-body">
                                    <p>The lawyer of confidence can also be contacted if the whistleblower has made himself/herself liable to prosecution. On the one hand, the lawyer of confidence can inform the whistleblower of his or her rights, and on the other hand, a voluntary disclosure will be viewed positively in the context of the existing employment relationship and can have a mitigating effect in any subsequent court proceedings.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">Is the lawyer of trust obliged to pass on information about a criminal offense directly to the public prosecutor's office?</a>
                                <div class="faq-question-body">
                                    <p>No. Only in narrowly defined exceptional cases involving really serious criminal offenses is everyone obliged to pass on information about a criminal offense to the public prosecutor's office. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">How is a report processed if the contact person in the company is affected?</a>
                                <div class="faq-question-body">
                                    <p>In this case, the confidential lawyer can contact the company management directly. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faq-question-header">How long does it take until a result is available?</a>
                                <div class="faq-question-body">
                                    <p>There is no general answer to this question. There are cases that can be processed within a few hours. In the case of extensive investigations, processing can take several weeks.</p>
                                </div>
                            </li>
                        </ul>
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
                    <span> Virtual Tour</span>
                </div>
                <div class="form-section-h2">
                    <h2>Have A <span>Project In Mind? </span> Let’s Make It Happen </h2>
                </div>
                <div class="form-section-p">
                    <p>Elegant partition wall for a corporate office.</p>
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