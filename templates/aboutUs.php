<?php
get_header('header');
/*
Template Name: About us
*/
?>

<!-- Hero Slider -->
<section id="aboutUsContainer" class="aboutUsContainer" style="background-image: url('<?php echo get_field('banner_image'); ?>');">
    <div class="heading-top">

    </div>
</section>
<div class="container">
    <div class="breadcrumb-link">
        <ul>
            <li><a href="">Home</a></li>
            <li>About Us</li>
        </ul>
    </div>
</div>
<section class="section-padding about-left-right-section">
    <div class="container">
        <div class="about-left-right-section-p">
            <div class="about-left-right-section-left">
                <div class="about-left-right-section-left-inner">
                    <div class="heading-title">
                        <span> <span class="dot"></span> <?php echo get_field('section_1_title'); ?></span>
                    </div>
                    <div class="heading-text">
                        <h1><?php echo get_field('section_1_heading'); ?> <span><?php echo get_field('section_1_color_heading'); ?></span> </h1>
                        <?php echo get_field('section_1_description'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video-section-box">
    <div class="container">
        <div class="video-section-box-inner">
            <video part="video" controls autoplay playsinline muted>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/material/Imagefilm_Webseite_EN.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>
<section class="join-venture-section about-us-join-venture">
    <div class="container">
        <div class="join-venture-section-inner">
            <div class="left-image">
                <img src="<?php echo get_field('section_2_1st_image'); ?>" alt="">
            </div>
            <h2> <?php echo get_field('section_2_title'); ?> </h2>
            <div class="right-image">
                <img src="<?php echo get_field('section_2_2nd_image'); ?>" alt="">
            </div>
        </div>
        <div class="join-venture-section-left-right">
            <div class="join-venture-section-right">
                <div class="hotline-section-body-box-right-h">
                    <h3><?php echo get_field('section_2_heading'); ?></h3>
                </div>
                <div class="hotline-section-body-box-right-p">
                    <?php echo get_field('section_2_subheading'); ?>
                </div>
            </div>
            <div class="join-venture-section-left">
                <img src="<?php echo get_field('section_2_3rd_image'); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<section id="philosophy" class="section-padding hotline-section">
    <div class="container">
        <div class="hotline-section-inner">
            <div class="testimonials-list-section-inner-heading">
                <div class="testimonials-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_3_title'); ?></h2>
                </div>
            </div>
            <div class="hotline-section-body">
                <div class="hotline-section-body-box">
                    <div class="hotline-section-body-box-left">
                        <img src="<?php echo get_field('section_3_image'); ?>" alt="">
                    </div>
                    <div class="hotline-section-body-box-right">
                        <div class="hotline-section-body-box-right-h">
                            <h3><?php echo get_field('section_3_heading'); ?></h3>
                        </div>
                        <div class="hotline-section-body-box-right-p">
                            <?php echo get_field('section_3_description'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="history" class="section-padding timeline-section-box light_grey">
    <div class="container">
        <div class="testimonials-section-inner">
            <div class="testimonials-list-section-inner-heading">
                <div class="testimonials-list-section-inner-heading-left">
                    <span><?php echo get_field('section_4_title'); ?></span>
                </div>
                <div class="testimonials-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_4_heading'); ?> <span> <?php echo get_field('section_4_color_heading'); ?></span> <?php echo get_field('section_4_normal_heading'); ?></h2>

                    <a target="_blank" href="<?php echo get_field('section_4_btn_link'); ?>" class="btn_1">
                        <span class="btn-inner">
                            <span class="text-span"><?php echo get_field('section_4_btn_text'); ?> </span>
                            <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z" />
                                </svg></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="timeline-section-box-scroll">
            <div class="timeline-section-box-slider owl-carousel-timeline">
                <?php
                if (have_rows('section_4_listing')) {
                    while (have_rows('section_4_listing')) {
                        the_row(); ?>
                        <div class="item-box-inner">
                            <div class="item-box-inner-img">
                                <img src="<?php echo get_sub_field('section_4_listing_image'); ?>" alt="">
                            </div>
                            <div class="elementor-timeline-year"> <span><?php echo get_sub_field('section_4_listing_title'); ?></span></div>
                            <div class="elementor-timeline-content">
                                <div class="elementor-timeline-description"><?php echo get_sub_field('section_4_listing_description'); ?></div>
                                <a class="read-more-link">Read more</a>
                            </div>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section id="fact_figure" class="section-padding faq-list-section-images ">
    <div class="container">
        <div class="faq-list-section-images-inner">
            <div class="testimonials-list-section-inner-heading">
                <div class="testimonials-list-section-inner-heading-left">
                    <span> <?php echo get_field('section_5_title'); ?></span>
                </div>
                <div class="testimonials-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_5_heading'); ?> <span> <?php echo get_field('section_5_color_heading'); ?></span> <?php echo get_field('section_5_normal_heading'); ?></h2>
                </div>
            </div>
            <div class="faq-list-section-images-inner-parent">
                <div class="faq-list-section-images-right">
                    <div class="faq-list-content-right">
                        <?php
                        if (have_rows('section_5_listing')) {
                            while (have_rows('section_5_listing')) {
                                the_row(); ?>
                                <div data-bs-target="fag1" class="faq-list-content-inner toggleParent">
                                    <div id="fag1" class="faq-list-section-images-left-img d-b">
                                        <img src="<?php echo get_sub_field('section_5_listing_image'); ?>" alt="">
                                    </div>
                                    <div class="heading-faq faq-list-content-inner-top">
                                        <div class="heading-faq-left">
                                            <h5><?php echo get_sub_field('section_5_listing_title'); ?></h5>
                                        </div>
                                    </div>
                                    <div class="heading-faq faq-list-content-inner-bottom">
                                        <p><?php echo get_sub_field('section_5_listing_description'); ?></p>
                                        <a class="read-more-link">Read more</a>
                                    </div>
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

<section id="cooperation" class="section-padding about-us-service Outstanding-service-section light_grey Cooperations_section">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_6_heading'); ?></h2>
                    <?php echo get_field('section_6_description'); ?>
                </div>
            </div>
            <div class="Outstanding-service-inner-body">
                <div class="upper-side-top-images">
                    <div class="images-box-faq">
                        <div class="image-content-top">
                            <img src="<?php echo get_field('section_7_listing_1_image'); ?>" alt="">
                        </div>
                        <div class="image-content-bottom">
                            <a href="#" data-content="content-1" href=""><?php echo get_field('section_7_listing_1_title'); ?></a>
                        </div>
                    </div>
                    <div class="images-box-faq">
                        <div class="image-content-top">
                            <img src="<?php echo get_field('section_7_listing_2_image'); ?>" alt="">
                        </div>
                        <div class="image-content-bottom">
                            <a href="#" data-content="content-2" href=""><?php echo get_field('section_7_listing_2_title'); ?></a>
                        </div>
                    </div>
                    <div class="images-box-faq">
                        <div class="image-content-top">
                            <img src="<?php echo get_field('section_7_listing_3_image'); ?>" alt="">
                        </div>
                        <div class="image-content-bottom">
                            <a href="#" data-content="content-3" href=""><?php echo get_field('section_7_listing_3_title'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="upper-side-bottom-images">
                    <div id="content-1" class="images-box-faq-content-1">
                        <?php
                        if (have_rows('section_7_listing_1')) {
                            while (have_rows('section_7_listing_1')) {
                                the_row(); ?>
                                <div class="images-box-faq-content-1-inner">
                                    <div class="images-box-faq-content-1-left">
                                        <div class="images-box-faq-content-1-h">
                                            <h3><?php echo get_sub_field('section_7_listing_1_heading'); ?></h3>
                                        </div>
                                        <div class="images-box-faq-content-1-b">
                                            <?php echo get_sub_field('section_7_listing_1_description'); ?>
                                        </div>
                                    </div>
                                    <div class="images-box-faq-content-1-right">
                                        <div class="slider-box sliderBox">
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_7_listing_1_image_1'); ?>" alt="">
                                                </picture>
                                            </div>
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_7_listing_1_image_2'); ?>" alt="">
                                                </picture>
                                            </div>
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_7_listing_1_image_3'); ?>" alt="">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>
                    <div id="content-2" class="images-box-faq-content-1">
                        <?php
                        if (have_rows('section_7_listing_2')) {
                            while (have_rows('section_7_listing_2')) {
                                the_row(); ?>
                                <div class="images-box-faq-content-1-inner">
                                    <div class="images-box-faq-content-1-left">
                                        <div class="images-box-faq-content-1-h">
                                            <h3><?php echo get_sub_field('section_7_listing_2_heading'); ?></h3>
                                        </div>
                                        <div class="images-box-faq-content-1-b">
                                            <?php echo get_sub_field('section_7_listing_2_description'); ?>
                                        </div>
                                    </div>
                                    <div class="images-box-faq-content-1-right">
                                        <div class="slider-box sliderBox">
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_7_listing_2_image_1'); ?>" alt="">
                                                </picture>
                                            </div>
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_7_listing_2_image_2'); ?>" alt="">
                                                </picture>
                                            </div>
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_7_listing_2_image_3'); ?>" alt="">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>
                    <div id="content-3" class="images-box-faq-content-1">
                        <?php
                        if (have_rows('section_7_listing_3')) {
                            while (have_rows('section_7_listing_3')) {
                                the_row(); ?>
                                <div class="images-box-faq-content-1-inner">
                                    <div class="images-box-faq-content-1-left">
                                        <div class="images-box-faq-content-1-h">
                                            <h3><?php echo get_sub_field('section_7_listing_3_heading'); ?></h3>
                                        </div>
                                        <div class="images-box-faq-content-1-b">
                                            <?php echo get_sub_field('section_7_listing_3_description'); ?>
                                        </div>
                                    </div>
                                    <div class="images-box-faq-content-1-right">
                                        <div class="slider-box sliderBox">
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_7_listing_3_image_1'); ?>" alt="">
                                                </picture>
                                            </div>
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_7_listing_3_image_2'); ?>" alt="">
                                                </picture>
                                            </div>
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_7_listing_3_image_3'); ?>" alt="">
                                                </picture>
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
    </div>
</section>

<section class="section-padding faq-question-section ">
    <div class="container">
        <div class="faq-question-section-inner">
            <div class="testimonials-list-section-inner-heading">
                <div class="testimonials-list-section-inner-heading-left">
                    <span><?php echo get_field('section_8_title'); ?></span>
                </div>
                <div class="testimonials-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_8_heading'); ?> <span><?php echo get_field('section_8_color_heading'); ?></span></h2>
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
<div class="history-view-model-popup">
    <div class="history-view-model-popup-backdrop"></div>
    <div>
        <div class="history-view-model-inner">
            <section>
                <div class="history-view-box">
                    <div class="history-view-box-header">
                        <h3>Talk to a designer</h3>
                        <button class="close_history_view">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path
                                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="history-view-box-body" id="total_history">
                         
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php
get_footer('footer');
?>