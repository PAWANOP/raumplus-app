<?php
get_header('header');
/*
Template Name: benefits
*/
?>

<!-- Hero Slider -->
<section id="aboutUsContainer" class="aboutUsContainer" style="background-image: url('<?php echo get_field('banner_image'); ?>)">
    <div class="heading-top">

    </div>
</section>
<div class="container">
    <div class="breadcrumb-link">
        <ul>
            <li><a href>Home</a></li>
            <li>Projects</li>
        </ul>
    </div>
</div>

<section class="section-padding hotline-section p_t projects_section_parent p_b benefits_projects">
    <div class="hotline-section-inner">
        <div class="testimonials-list-section-inner-heading">
            <div
                class="testimonials-list-section-inner-heading-right flex_center">
                <h2><?php echo get_field('section_1_heading'); ?> <span> <?php echo get_field('section_1_color_heading'); ?></span></h2>
            </div>
        </div>
        <div class="hotline-section-body">
            <?php
            if (have_rows('section_1_listing')) {
                while (have_rows('section_1_listing')) {
                    the_row(); ?>
                    <div class="hotline-section-body-box">
                        <div class="container">
                            <div class="hotline-section-body-box-right">
                                <div class="hotline-section-body-box-right-h">
                                    <h3><?php echo get_sub_field('section_1_listing_title'); ?></h3>
                                </div>
                                <div class="hotline-section-body-box-right-p">
                                    <?php echo get_sub_field('section_1_listing_description'); ?>
                                </div>
                            </div>
                            <div class="hotline-section-body-box-left">
                                <figure>
                                    <picture>
                                        <img
                                            src="<?php echo get_sub_field('section_1_listing_image'); ?>"
                                            alt>
                                    </picture>
                                </figure>
                            </div>
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
                    <span> <?php echo get_field('section_2_title'); ?></span>
                </div>
                <div class="form-section-h2">
                    <h2><?php echo get_field('section_2_heading'); ?> <span><?php echo get_field('section_2_color_heading'); ?> </span> <?php echo get_field('section_2_normal_heading'); ?></h2>
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

<?php
get_footer('footer');
?>