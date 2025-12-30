<?php
get_header('header');
/*
Template Name: room divider
*/
?>
<!-- Hero Slider -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel"
            data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel"
            data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel"
            data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php
        if (have_rows('banner_listing')) {
            while (have_rows('banner_listing')) {
                the_row(); ?>
                <div class="carousel-item active"
                    style="background-image: url('<?php echo get_sub_field('banner_listing_image'); ?>');">
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
                        <span class="svg-span"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 640">
                                <path
                                    d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"></path>
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
            <li><a href>Home</a></li>
            <li>Room Divider</li>
        </ul>
    </div>
</div>
<section class="readmore_content partitionWalls_readMore">
    <div class="container">
        <div class="readmore_content_inner">
            <div>
                <h1 class="h1_heading"><?php echo get_field('section_1_heading'); ?></h1>
                <?php echo get_field('section_1_description'); ?>
                <div class="textwraper" id="more" data-content="1"
                    style="display: none;">
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
                <span id="dots" style="display: inline;">...</span><a
                    id="read-more-link" onclick="readMore1()"
                    data-content="1">Read more</a>
            </div>
        </div>
    </div>
</section>
<section class="section-padding features-benefits light_grey">
    <div class="container">
        <h2 class="section-title"> <?php echo get_field('section_2_heading'); ?></h2>
        <div class="features-benefits-parent">
            <div class="features-benefits-inner">
                <?php
                if (have_rows('section_2_listing')) {
                    while (have_rows('section_2_listing')) {
                        the_row(); ?>
                        <div class="col-md-3 col-sm-6">
                            <span><img src="<?php echo get_sub_field('section_2_listing_icon'); ?>" alt="" style="height: 60px;"></span>
                            <h3><?php echo get_sub_field('section_2_listing_title'); ?></h3>
                            <p><?php echo get_sub_field('section_2_listing_description'); ?></p>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="section-padding process-list-section application-list-section grid-4-section room-divider-slider">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="room-divider-heading">
                <div class="projects-list-section-inner-heading">
                    <div class="projects-list-section-inner-heading-left">
                        <span><?php echo get_field('section_3_title'); ?></span>
                    </div>
                    <div class="projects-list-section-inner-heading-right">
                        <h2><?php echo get_field('section_3_heading'); ?></h2>
                    </div>
                </div>
                <div class="right-side-swiper">
                    <button class="custom-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
                        </svg></button>
                    <button class="custom-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
                        </svg></path></svg></button>
                </div>
            </div>
            <div class="process-section-card-box">
                <div class="process-section-card-box-inner owl-carousel-collection">
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
<section class="room-divider-section-1200 section-padding about-us-service Outstanding-service-section partitionWallServ1 light_grey">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-right ">
                    <h2 class="text-uppercase"><?php echo get_field('section_4_heading'); ?> </h2>
                    <?php echo get_field('section_4_description'); ?>
                </div>
            </div>
            <div class="Outstanding-service-inner-body">
                <div class="upper-side-bottom-images">
                    <div class="images-box-faq-content-1">
                        <div class="images-box-faq-content-1-inner">
                            <div class="images-box-faq-content-1-left">
                                <div class="images-box-faq-content-1-h">
                                    <h3><?php echo get_field('section_4_title'); ?></h3>
                                </div>
                                <div class="images-box-faq-content-1-b">
                                    <p><?php echo get_field('section_4_description'); ?></p>
                                </div>
                                <div class="download_pdf_awards">
                                    <a href="<?php echo get_field('section_4_file'); ?>" class="btn_1">
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
                                <div
                                    class="slider-box sliderBox owl-loaded owl-drag">

                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-1126px, 0px, 0px); transition: all; width: 3378px;">
                                            <?php
                                            if (have_rows('section_4_listing')) {
                                                while (have_rows('section_4_listing')) {
                                                    the_row(); ?>
                                                    <div
                                                        class="owl-item cloned"
                                                        style="width: 558px; margin-right: 5px;">
                                                        <div
                                                            class="images-box-faq-content-1-right-video">
                                                            <iframe width="853" height="480" src="<?php echo get_sub_field('section_4_listing_embed_link'); ?>" title="Product series: Pivot Door S1200" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                                        </div>
                                                    </div>
                                            <?php }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div
                                        class="owl-nav"><button
                                            type="button"
                                            role="presentation"
                                            class="owl-prev">
                                            <div
                                                class="prev-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
                                                </svg></div>
                                        </button><button
                                            type="button"
                                            role="presentation"
                                            class="owl-next">
                                            <div
                                                class="next-arrow"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
                                                </svg></div>
                                        </button></div>
                                    <div
                                        class="owl-dots"><button
                                            role="button"
                                            class="owl-dot active"><span></span></button><button
                                            role="button"
                                            class="owl-dot"><span></span></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding room-divider-inspiration">
    <div class="container">
        <div class="room-divider-inspiration-swiper">
            <div class="room-divider-inspiration-header">
                <div class="room-divider-inspiration-header-left">
                    <span><?php echo get_field('section_5_title'); ?></span>
                </div>
                <div class="room-divider-inspiration-header-right">
                    <h2><?php echo get_field('section_5_heading'); ?></h2>
                </div>
            </div>
            <div class="right-side-swiper">
                <button class="custom-prev1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
                    </svg></button>
                <button class="custom-next1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
                    </svg></button>
            </div>
        </div>
        <div class="room-divider-inspiration-body owl-carousel-material">
            <?php
            if (have_rows('section_5_listing')) {
                while (have_rows('section_5_listing')) {
                    the_row(); ?>
                    <div class="room-divider-inspiration-inner-box">
                        <div class="project-transition">
                            <a href="">
                                <img src="<?php echo get_sub_field('section_5_listing_image'); ?>" alt="">
                            </a>
                        </div>
                        <div class="project-text-box">
                            <h3 class="project-category"><a rel="tag"><?php echo get_sub_field('section_5_listing_title'); ?></a></h3>
                        </div>
                    </div>
            <?php }
            }
            ?>

        </div>
    </div>
</section>
<section class="call_to_action_home p_t p_b">
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
<section class="section-padding faq-question-section ">
    <div class="container">
        <div class="faq-question-section-inner">
            <div class="testimonials-list-section-inner-heading">
                <div
                    class="testimonials-list-section-inner-heading-left">
                    <span><?php echo get_field('section_6_title'); ?></span>
                </div>
                <div
                    class="testimonials-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_6_heading'); ?> <span><?php echo get_field('section_6_color_heading'); ?></span></h2>
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
                                <a href="#"
                                    class="faq-question-header">What are
                                    the tasks of the lawyer of
                                    confidence?</a>
                                <div class="faq-question-body">
                                    <p>Employees have the right to point
                                        out circumstances that indicate
                                        a violation of laws or internal
                                        rules. The confidential lawyer
                                        accepts these reports. He offers
                                        a legally protected and
                                        confidential area outside the
                                        company. He/she informs the
                                        whistleblower about his/her
                                        rights and how to proceed. Only
                                        with the consent of the
                                        whistleblower will the
                                        confidential counsellor forward
                                        the report to his/her contact
                                        person in the company. </p>
                                    <p>The confidential lawyer can be
                                        involved in the process as a
                                        person of trust. He/she is
                                        available to the whistleblower
                                        as a contact person at all
                                        times. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Who can
                                    contact the lawyer of trust?</a>
                                <div class="faq-question-body">
                                    <p>All employees and external
                                        parties, such as suppliers or
                                        service providers, can contact
                                        the confidential counsellor.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">What
                                    information does the lawyer of
                                    confidence accept?</a>
                                <div class="faq-question-body">
                                    <p>The confidential lawyer receives
                                        reports of breaches of the law
                                        and internal violations. The
                                        main aim is to investigate and
                                        prevent economic crimes,
                                        accounting offenses and damage
                                        to assets. However, all breaches
                                        of the Code of Conduct, e.g.
                                        discrimination, can also be
                                        reported.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Can I be
                                    sure that the trusted lawyer will
                                    only pass on as much information as
                                    I allow him to?</a>
                                <div class="faq-question-body">
                                    <p>Yes, travel expenses will be
                                        reimbursed by the company. The
                                        settlement will be handled by
                                        the lawyer of trust, so that
                                        anonymity - if necessary - is
                                        also maintained here. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Will it
                                    cost me anything if I use the lawyer
                                    of trust?</a>
                                <div class="faq-question-body">
                                    <p>No, anyone can make use of the
                                        lawyer of confidence free of
                                        charge.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Can I
                                    also contact the lawyer of trust
                                    anonymously?</a>
                                <div class="faq-question-body">
                                    <p>Yes, whistleblowers can also
                                        contact the lawyer of confidence
                                        anonymously. This applies from
                                        the first contact with the
                                        lawyer of confidence. If
                                        desired, the confidential lawyer
                                        will subsequently maintain the
                                        anonymity of the whistleblower
                                        vis-à-vis the company. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">What
                                    happens to my report?</a>
                                <div class="faq-question-body">
                                    <p>The report will be investigated
                                        in accordance with the law and
                                        internal rules, taking into
                                        account the interests of all
                                        parties involved. To this end,
                                        the confidential counsellor will
                                        forward the report to his
                                        contact person in the company
                                        after prior examination. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">May I
                                    contact the lawyer of confidence
                                    about the status of the
                                    proceedings?</a>
                                <div class="faq-question-body">
                                    <p>The whistleblower can contact the
                                        lawyer of trust at any time to
                                        find out about the status of the
                                        case. The whistleblower will be
                                        informed of the outcome by the
                                        confidential counsellor at the
                                        latest after the case has been
                                        concluded, to the extent
                                        permitted by law. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Will the
                                    lawyer of trust become "my lawyer"
                                    if I contact him?</a>
                                <div class="faq-question-body">
                                    <p>No, the lawyer of confidence may
                                        not represent a whistleblower in
                                        official or court proceedings.
                                        Therefore, the lawyer of
                                        confidence cannot and must not
                                        take any steps to enforce the
                                        individual rights or claims of
                                        the whistleblower in court.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Is the
                                    lawyer of trust really
                                    independent?</a>
                                <div class="faq-question-body">
                                    <p>Yes, the lawyer of confidence
                                        acts as an independent and
                                        autonomous lawyer and is not
                                        subject to any instructions from
                                        the company regarding the
                                        handling of the matter. The
                                        lawyer of confidence decides on
                                        the basis of his own dutiful
                                        examination whether and to what
                                        extent he may pass on a matter
                                        submitted to him to the
                                        company.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">How is
                                    the first contact made?</a>
                                <div class="faq-question-body">
                                    <p>The first contact can be made by
                                        phone, email, text message, post
                                        or in a personal meeting. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Can I
                                    continue to contact the responsible
                                    departments in the company?</a>
                                <div class="faq-question-body">
                                    <p>Yes, every employee can continue
                                        to contact their line manager,
                                        the works council and the
                                        management.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Am I
                                    protected as a whistleblower?</a>
                                <div class="faq-question-body">
                                    <p>Yes, the whistleblower is
                                        protected. Any act of
                                        retaliation against the
                                        whistleblower will not be
                                        tolerated. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">How is
                                    abuse of the facility (denunciation)
                                    prevented?</a>
                                <div class="faq-question-body">
                                    <p>Despite repeated expressions of
                                        skepticism, cases of
                                        whistleblowing when appointing a
                                        confidential lawyer are very
                                        rare. Nevertheless, at the
                                        beginning of the conversation,
                                        the confidential lawyer informs
                                        the whistleblower that misuse of
                                        the whistleblowing system will
                                        not be tolerated and that the
                                        confidential lawyer is obliged
                                        to pass on the personal details
                                        of the whistleblower to the
                                        company in the event of
                                        deliberate, i.e. knowing,
                                        misuse. In any case, employees
                                        who deliberately misuse the
                                        whistleblowing system may face
                                        disciplinary consequences. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">How are
                                    data protection and data security
                                    complied with?</a>
                                <div class="faq-question-body">
                                    <p>The confidential lawyer ensures
                                        compliance with the statutory
                                        retention obligations and data
                                        protection regulations. The
                                        personal data collected is
                                        limited to information on the
                                        identity of the whistleblower
                                        and the person(s) concerned. The
                                        company's data protection
                                        officer regularly checks the
                                        data protection compliance of
                                        the whistleblowing
                                        management.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Will I
                                    be dismissed immediately if I am
                                    affected by a notice?</a>
                                <div class="faq-question-body">
                                    <p>No. The presumption of innocence
                                        applies. Every report is
                                        investigated in accordance with
                                        the law and internal rules,
                                        taking into account the
                                        interests of all parties
                                        involved. A decision on possible
                                        measures will only be made once
                                        the matter has been
                                        concluded.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">What
                                    happens if I give a tip but it turns
                                    out to be wrong?</a>
                                <div class="faq-question-body">
                                    <p>If the tip-off was given in good
                                        faith, i.e. not intentionally
                                        false, the whistleblower does
                                        not have to fear any
                                        consequences.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Do I
                                    have to contact the lawyer of trust
                                    if I suspect a violation of the
                                    law?</a>
                                <div class="faq-question-body">
                                    <p>No, recourse to the lawyer of
                                        confidence is voluntary. It has
                                        been set up as an additional
                                        point of contact.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Can I
                                    also visit the lawyer of confidence
                                    in person?</a>
                                <div class="faq-question-body">
                                    <p>Yes, you can visit the lawyer of
                                        confidence in person at any time
                                        for a confidential
                                        discussion.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">May I
                                    contact or even visit the lawyer of
                                    confidence during working hours?</a>
                                <div class="faq-question-body">
                                    <p>Yes.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Will my
                                    travel expenses be reimbursed by the
                                    company?</a>
                                <div class="faq-question-body">
                                    <p>Yes, travel expenses will be
                                        reimbursed by the company. The
                                        settlement will be handled by
                                        the lawyer of trust, so that
                                        anonymity - if necessary - is
                                        also maintained here. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Will I
                                    be notified when my tip has been
                                    processed?</a>
                                <div class="faq-question-body">
                                    <p>Yes, the whistleblower will be
                                        informed of the outcome by the
                                        lawyer of trust at the latest
                                        after the process has been
                                        completed, to the extent
                                        permitted by law.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Does the
                                    lawyer of confidence have to
                                    disclose my identity if he is
                                    questioned as a witness in criminal
                                    or civil proceedings?</a>
                                <div class="faq-question-body">
                                    <p>No. If the lawyer of confidence
                                        is questioned as a witness in
                                        criminal, civil or other
                                        proceedings, he will only
                                        disclose the name and identity
                                        of the whistleblower seeking
                                        advice if he has been expressly
                                        permitted to do so by both the
                                        company and the whistleblower.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Can I
                                    contact the lawyer of trust and only
                                    decide at the end of the interview
                                    whether the facts of the case and/or
                                    my personal details will be passed
                                    on to the company?</a>
                                <div class="faq-question-body">
                                    <p>Yes, the confidential lawyer can
                                        initially be contacted in
                                        complete confidence. The
                                        confidential lawyer will inform
                                        the whistleblower of his or her
                                        rights at the beginning of the
                                        conversation. Only at the end of
                                        the conversation does the
                                        whistleblower then decide
                                        whether and in what form the
                                        information should be passed on
                                        to the company group. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Should I
                                    also contact the lawyer of trust if
                                    I could have made myself liable to
                                    prosecution?</a>
                                <div class="faq-question-body">
                                    <p>The lawyer of confidence can also
                                        be contacted if the
                                        whistleblower has made
                                        himself/herself liable to
                                        prosecution. On the one hand,
                                        the lawyer of confidence can
                                        inform the whistleblower of his
                                        or her rights, and on the other
                                        hand, a voluntary disclosure
                                        will be viewed positively in the
                                        context of the existing
                                        employment relationship and can
                                        have a mitigating effect in any
                                        subsequent court
                                        proceedings.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">Is the
                                    lawyer of trust obliged to pass on
                                    information about a criminal offense
                                    directly to the public prosecutor's
                                    office?</a>
                                <div class="faq-question-body">
                                    <p>No. Only in narrowly defined
                                        exceptional cases involving
                                        really serious criminal offenses
                                        is everyone obliged to pass on
                                        information about a criminal
                                        offense to the public
                                        prosecutor's office. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">How is a
                                    report processed if the contact
                                    person in the company is
                                    affected?</a>
                                <div class="faq-question-body">
                                    <p>In this case, the confidential
                                        lawyer can contact the company
                                        management directly. </p>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="faq-question-header">How long
                                    does it take until a result is
                                    available?</a>
                                <div class="faq-question-body">
                                    <p>There is no general answer to
                                        this question. There are cases
                                        that can be processed within a
                                        few hours. In the case of
                                        extensive investigations,
                                        processing can take several
                                        weeks.</p>
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

<script>
    $(document).on('click', '.partitionWallsInspiration .left-side-faq .control-position li a', function(e) {
        let currentId = $(this).attr("data-tab");
        $(".partitionWallsInspiration .left-side-faq .control-position li a").removeClass("current");
        $(this).addClass("current");
        $(".partitionWallsInspiration #material-scene .material-image.static-background").removeClass("current");
        $("#" + currentId).addClass("current");
        return false;
    });
</script>
<?php
get_footer('footer');
?>