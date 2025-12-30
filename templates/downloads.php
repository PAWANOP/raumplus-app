<?php
get_header('header');
/*
Template Name: downloads
*/
?>
<section id="aboutUsContainer" class="aboutUsContainer" style="background-image: url('<?php echo get_field('banner_image'); ?>');">
    <div class="heading-top">

    </div>
</section>
<div class="container">
    <div class="breadcrumb-link">
        <ul>
            <li><a href>Home</a></li>
            <li>Downloads</li>
        </ul>
    </div>
</div>
<section class="section-padding intelligent-list-section wardrobe-design-4grid download-grid p_t">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span><?php echo get_field('section_1_title'); ?></span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h1 class="h1_heading"><?php echo get_field('section_1_heading'); ?> <span> <?php echo get_field('section_1_color_heading'); ?> </span><?php echo get_field('section_1_normal_heading'); ?></h1>
                    <div class="downloads-box-p">
                        <p><?php echo get_field('section_1_subheading'); ?></p>
                    </div>
                </div>
            </div>
            <div class="intelligent-list-section-inner-body">
                <div class="row">
                    <?php
                    if (have_rows('section_1_listing')) {
                        while (have_rows('section_1_listing')) {
                            the_row(); ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-card card">
                                    <div class="product-card-image">
                                        <img src="<?php echo get_sub_field('section_1_listing_image'); ?>" alt="Corner Wardrobe">
                                    </div>
                                    <div class="card-body">
                                        <h5><?php echo get_sub_field('section_1_listing_title'); ?></h5>
                                        <p><?php echo get_sub_field('section_1_listing_subheading'); ?></p>
                                        <div class="button-wrapper ">
                                            <div class="download_pdf_awards">
                                                <a href="<?php echo get_sub_field('section_1_listing_file'); ?>" class="btn_1 call_downlods">
                                                    <span class="btn-inner">
                                                        <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                                                <path d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 306.7L246.6 265.3C234.1 252.8 213.8 252.8 201.3 265.3C188.8 277.8 188.8 298.1 201.3 310.6L297.3 406.6C309.8 419.1 330.1 419.1 342.6 406.6L438.6 310.6C451.1 298.1 451.1 277.8 438.6 265.3C426.1 252.8 405.8 252.8 393.3 265.3L352 306.7L352 96zM160 384C124.7 384 96 412.7 96 448L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 448C544 412.7 515.3 384 480 384L433.1 384L376.5 440.6C345.3 471.8 294.6 471.8 263.4 440.6L206.9 384L160 384zM464 440C477.3 440 488 450.7 488 464C488 477.3 477.3 488 464 488C450.7 488 440 477.3 440 464C440 450.7 450.7 440 464 440z"></path>
                                                            </svg></span>
                                                        <span class="text-span">Overview of awards (PDF)</span>
                                                    </span>
                                                </a>
                                            </div>
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

<!-- Hero Slider -->
<section class="section-padding form-section-bottom-side">
    <div class="container">
        <div class="form-section-bottom-side-inner">
            <div class="form-section-bottom-left">
                <div class="form-section-subtitle">
                    <span> <?php echo get_field('section_2_title'); ?></span>
                </div>
                <div class="form-section-h2">
                    <h2><?php echo get_field('section_2_heading'); ?> <span> <?php echo get_field('section_2_color_heading'); ?> </span> </h2>
                </div>
                <div class="form-section-p">
                    <p><?php echo get_field('section_2_subheading'); ?></p>
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
<?php get_footer('footer') ?>