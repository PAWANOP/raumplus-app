<!-- Hero Slider -->
<?php
get_header('header');
/*
Template Name: Home Page
*/
?>
<!-- Hero Slider -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
        <?php
        if (have_rows('banner_image_listing')) {
            while (have_rows('banner_image_listing')) {
                the_row(); ?>
                <div class="carousel-item active" style="background-image: url('<?php echo get_sub_field('banner_image'); ?>');">
                </div>
        <?php }
        }
        ?>
    </div>
</div>

<section class="call_to_action">
    <div class="container">
        <div class="call_to_action_parent">
            <div class="call_to_action_left">
                <h2><?php echo get_field('section_1_heading'); ?></h2>
                <a href="<?php echo get_field('section_1_btn_link'); ?>" id="call_action" class="btn_1">
                    <span class="btn-inner">
                        <span class="text-span"><?php echo get_field('section_1_btn_text'); ?></span>
                        <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"></path>
                            </svg></span>
                    </span>
                </a>
            </div>
            <div class="call_to_action_right">
                <?php
                if (have_rows('section_1_listing')) {
                    while (have_rows('section_1_listing')) {
                        the_row(); ?>
                        <div class="call_to_action_right_box">
                            <span><img src="<?php echo get_sub_field('section_1_listing_image'); ?>" alt=""></span>
                            <h5><?php echo get_sub_field('section_1_listing_count'); ?></h5>
                            <p><?php echo get_sub_field('section_1_listing_text'); ?></p>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section class="section-padding readmore_content ">
    <div class="container">
        <div class="readmore_content_inner">
            <div>
                <h2><strong><?php echo get_field('section_2_heading'); ?>

                    </strong></h2>
                <?php echo get_field('section_2_description'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Raumplus Section -->
<section class="section-padding why-choose">
    <div class="container">
        <h2 class="section-title"><?php echo get_field('section_3_heading'); ?></h2>
        <div class="row owl-carousel-why-choose">
            <?php
            if (have_rows('section_3_listing')) {
                while (have_rows('section_3_listing')) {
                    the_row(); ?>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="why-choose-item">
                            <span><img src="<?php echo get_sub_field('section_3_listing_icon'); ?>" alt="" style="height: 60px;"></span>
                            <h5><?php echo get_sub_field('section_3_listing_text'); ?></h5>
                            <div class="overlay-text">
                                <p><?php echo get_sub_field('section_3_listing_hover_text'); ?></p>
                            </div>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>

<section class="section-padding process-list-section">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span><?php echo get_field('section_4_title'); ?></span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_4_heading'); ?> <span> <?php echo get_field('section_4_color_text'); ?> </span> <?php echo get_field('section_4_normal_text'); ?></h2>
                </div>
            </div>
            <div class="process-section-card-box">
                <div class="process-section-card-box-inner">
                    <?php
                    if (have_rows('section_4_listing')) {
                        while (have_rows('section_4_listing')) {
                            the_row(); ?>
                            <div class="process-section-box">
                                <div class="process-section-box-image">
                                    <img src="<?php echo get_sub_field('section_4_listing_image'); ?>" alt="">
                                </div>
                                <div class="process-section-box-bottom">
                                    <h3><span><?php echo get_sub_field('section_4_listing_count'); ?></span><?php echo get_sub_field('section_4_listing_title'); ?></h3>
                                    <p>With smart corner solutions, which can continued seamlessly, they can make use of the space all the way to the last corner. The possibilities of our raumplus systems are almost limitless.</p>
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

<section class="join-venture-section">
    <div class="container">
        <div class="join-venture-section-inner">
            <div class="left-image">
                <img src="<?php echo get_field('section_5_1_image'); ?>" alt="">
            </div>
            <h2> <?php echo get_field('section_5_title'); ?> </h2>
            <div class="right-image">
                <img src="<?php echo get_field('section_5_2_image'); ?>" alt="">
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="section-padding about-us-section">
    <div class="container">
        <div class="about-us-section-inner">
            <div class="about-us-section-left">
                <div class="heading-title">
                    <span> <span class="dot"></span> <?php echo get_field('section_6_title'); ?></span>
                </div>
                <div class="heading-text">
                    <h2><?php echo get_field('section_6_heading'); ?> <span> <?php echo get_field('section_6_color_text'); ?> </span></h2>
                </div>
                <div class="left-para">
                    <?php echo get_field('section_6_description'); ?>
                </div>
                <div class="about-us-more">
                    <a href="<?php echo get_field('section_6_btn_link'); ?>" class="btn_1">
                        <span class="btn-inner">
                            <span class="text-span"><?php echo get_field('section_6_btn_text'); ?></span>
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
                        <img src="<?php echo get_field('section_6_image'); ?>" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="virtual-tour-heading section-padding light_grey">
    <div class="container">
        <div class="projects-list-section-inner-heading">
            <div class="projects-list-section-inner-heading-left">
                <span> <?php echo get_field('section_7_title'); ?></span>
            </div>
            <div class="projects-list-section-inner-heading-right">
                <h2><?php echo get_field('section_7_heading'); ?> <span> <?php echo get_field('section_7_color_text'); ?> </span></h2>
            </div>
            <p><?php echo get_field('section_7_subheading'); ?></p>
        </div>
    </div>
</section>

<!-- Virtual Tour Section -->
<section id="virtual-tour" class="section-padding virtual-tour-section" style="background-image: url('<?php echo get_field('section_7_image') ?>');">
    <div class="container">

        <div class="virtual-tour-content text-center animate__animated animate__fadeInUp">
            <div class="start_tour_box">
                <a href="<?php echo get_field('section_7_btn_link'); ?>" target="_blank"
                    class="btn btn-primary virtual-tour-btn"><?php echo get_field('section_7_btn_text'); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding individual-material-inspiration-section ">
    <div class="container">
        <div class="individual-material-inspiration-i">
            <div class="individual-material-inspiration-i-h">
                <h2><?php echo get_field('section_8_heading'); ?></h2>
                <?php echo get_field('section_8_subheading'); ?>
            </div>
            <div class="tab-box-inspiration">
                <span>Please select now your :</span>
                <div class="tab-box-inspiration-inner">
                    <a href="" class="active" data-scene="31">Sliding door front</a>
                    <a href="" data-scene="32">Wardrobe surface</a>
                </div>
            </div>
            <div class="individual-material-inspiration-i-b">
                <div class="individual-material-inspiration-ibox">
                    <div id="material-controls" class="left-side-faq">
                        <div data-scene="31" class="control-scene current">
                            <div class="control-toggle">
                                <span class="styled-checkbox">

                                    <input id="tcb31" type="checkbox" data-default="0" onclick="txMaterialChangeScene(event, (this.checked ? '33' : '31'), (this.checked ? '31' : '33'));">

                                    <span></span>
                                </span>
                                <label for="tcb31">&nbsp;Without rails</label>
                            </div>
                            <ul class="control-position">
                                <li>
                                    <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;">Panel
                                        material (top)</a>
                                    <ul class="control-group">
                                        <li>
                                            <a href="" data-scene="31" data-position="0" data-group="0"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;">Wooden
                                                decor</a>
                                            <ul class="control-media">
                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_0">
                                                        <img width="50" height="50" loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1180_ST37_RZ_ad09fd054d.jpg"
                                                            alt="" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_1">
                                                        <img width="50" height="50" loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1181_ST37_RZ_c2150077c2.jpg"
                                                            alt="" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_2">
                                                        <img width="50" height="50" loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1223_ST19_Sevilla_Esche_d03a9f2e78.png"
                                                            alt="" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_3">
                                                        <img width="50" height="50" loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1307_ST19_Warmia_Nussbaum_Braun_e930ac5947.png"
                                                            alt="" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_4">
                                                        <img width="50" height="50" loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1715_ST12_Parona_Nussbaum_eb642d974f.png"
                                                            alt="" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_5">
                                                        <img width="50" height="50" loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3043_ST12_Eukalyptus_Dunkelbraun_a05aac26fa.png"
                                                            alt="" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_6">
                                                        <img width="50" height="50" loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3158_ST19_Vicenza_Eiche_Grau_848fe142fe.png"
                                                            alt="" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_7">
                                                        <img width="50" height="50" loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3180_TM37_Halifax_Eiche_Braun_0dd595dfd0.png"
                                                            alt="" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_8">
                                                        <img width="50" height="50" loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3331_ST10_Nebraska_Eiche_Natur_7b23eea888.png"
                                                            alt="" longdesc>
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="0" data-group="1">Fantasy decor</a>
                                            <ul class="control-media">
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="1_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F501_ST2_RZ_67554418e3.jpg"
                                                            width="50" height="50" alt="Aluminum brushed"
                                                            longdesc="" title="Aluminum brushed"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="1_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F509_ST2_RZ_c074eb9a91.jpg"
                                                            width="50" height="50" alt="Aluminum" longdesc=""
                                                            title="Aluminum"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="1_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F527_ST19_Brushed_Metal_Gold_48922ef4a3.png"
                                                            width="50" height="50" alt="Brushed Metal Gold"
                                                            longdesc="" title="Brushed Metal Gold"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="1_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F528_ST20_Brushed_Metal_Bronze_c7aa50910c.png"
                                                            width="50" height="50" alt="Brushed Metal Bronze"
                                                            longdesc="" title="Brushed Metal Bronze"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="0" data-group="2">Uni Dekor</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U104_ST9_RZ_da7dcb5d8c.jpg"
                                                            width="50" height="50" alt="Alabaster White" longdesc=""
                                                            title="Alabaster White"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U114_ST9_Brilliantgelb_3138c2c340.png"
                                                            width="50" height="50" alt="Brilliant Yellow"
                                                            longdesc="" title="Brilliant Yellow"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U708_ST9_RZ_6cc474b3d1.jpg"
                                                            width="50" height="50" alt="Light Gray" longdesc=""
                                                            title="Light Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U325_ST9_Antikrosa_7224c7499f.png"
                                                            width="50" height="50" alt="Antique Pink " longdesc=""
                                                            title="Antique Pink "></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U350_ST9_Sienaorange_d11aa0f4f6.png"
                                                            width="50" height="50" alt="Siena Orange " longdesc=""
                                                            title="Siena Orange "></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U727_ST9_RZ_5967138d60.jpg"
                                                            width="50" height="50" alt="Stone Gray" longdesc=""
                                                            title="Stone Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_6"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U741_ST9_RZ_d7e88181b6.jpg"
                                                            width="50" height="50" alt="Lava Gray" longdesc=""
                                                            title="Lava Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_7"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U500_ST9_Gletscherblau_40cd13456f.png"
                                                            width="50" height="50" alt="Glacier Blue" longdesc=""
                                                            title="Glacier Blue"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_8"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U999_ST2_RZ_ce4de0db00.jpg"
                                                            width="50" height="50" alt="Black" longdesc=""
                                                            title="Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_9"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U540_ST9_Denimblau_718d3377da.png"
                                                            width="50" height="50" alt="Denim Blue " longdesc=""
                                                            title="Denim Blue "></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_10"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U606_ST9_Waldgruen_033d5fe3f1.png"
                                                            width="50" height="50" alt="Forest Green" longdesc=""
                                                            title="Forest Green"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_11"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U399_ST9_Granatrot_df008afbfc.png"
                                                            width="50" height="50" alt="Garnet Red " longdesc=""
                                                            title="Garnet Red "></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_12"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U646_ST9_Niagaragruen_8451bd408e.png"
                                                            width="50" height="50" alt="Niagara Green " longdesc=""
                                                            title="Niagara Green "></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="2_13"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U767_PM_Cubanitgrau_566cd73442.png"
                                                            width="50" height="50" alt="Cubanit Grey" longdesc=""
                                                            title="Cubanit Grey"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="0" data-group="3">White decor</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="3_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_W980_SM_RZ_9f16579c8d.jpg"
                                                            width="50" height="50" alt="Platinum White (Semi mat)"
                                                            longdesc="" title="Platinum White (Semi mat)"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="3_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_W980_ST2_RZ_97ed2bcef8.jpg"
                                                            width="50" height="50" alt="Platinum White" longdesc=""
                                                            title="Platinum White"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="3_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_W1000_ST9_RZ_67f09cdaa6.jpg"
                                                            width="50" height="50" alt="Premium White" longdesc=""
                                                            title="Premium White"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="0" data-group="4">Urban
                                                Structures</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Clay_Kreide_yosemite_s011_1_gross_RZ_4121d13fa8.jpg"
                                                            width="50" height="50" alt="Clay Chalk" longdesc=""
                                                            title="Clay Chalk"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_FabricSand_fa44_gross_RZ_a446bce65f.jpg"
                                                            width="50" height="50" alt="Fabric Sand" longdesc=""
                                                            title="Fabric Sand"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Fabric_Schiefer_penelope_fa46_1_gross_RZ_92144cce20.jpg"
                                                            width="50" height="50" alt="Fabric Slate" longdesc=""
                                                            title="Fabric Slate"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Fabric_Stein_penelope_fa42_1_gross_RZ_c86bb923fc.jpg"
                                                            width="50" height="50" alt="Fabric Stone" longdesc=""
                                                            title="Fabric Stone"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Idea_Curio_idea_fb86_1_gross_RZ_4b87f6a734.jpg"
                                                            width="50" height="50" alt="Idea Curio" longdesc=""
                                                            title="Idea Curio"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Idea_Renio_idea_fb80_1_gross_RZ_2ff7b532e4.jpg"
                                                            width="50" height="50" alt="Idea Renio" longdesc=""
                                                            title="Idea Renio"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_6"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Maloja_Nussbaum_maloja_s032_1_gross_RZ_9fc6b1a1bf.jpg"
                                                            width="50" height="50" alt="Maloja Walnut" longdesc=""
                                                            title="Maloja Walnut"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_7"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_MillenniumBeton_S084_gross_RZ_d6334d4800.jpg"
                                                            width="50" height="50" alt="Millennium Cement "
                                                            longdesc="" title="Millennium Cement "></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_8"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_MillenniumSchnee_B073_gross_RZ_a6b101a12c.jpg"
                                                            width="50" height="50" alt="Millennium Snow" longdesc=""
                                                            title="Millennium Snow"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_9"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Conero_c649454193.png"
                                                            width="50" height="50" alt="Conero" longdesc=""
                                                            title="Conero"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_10"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Nadir_Greige_nadir_fa45_1_gross_RZ_ba3321c1b4.jpg"
                                                            width="50" height="50" alt="Nadir Greige" longdesc=""
                                                            title="Nadir Greige"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_11"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Hickory_Black_32cb63deff.png"
                                                            width="50" height="50" alt="Hickory Black" longdesc=""
                                                            title="Hickory Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_12"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Linea_Beige_19db63a3d6.png"
                                                            width="50" height="50" alt="Linea Beige" longdesc=""
                                                            title="Linea Beige"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_13"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Nadir_Schwarz_nadir_u129_1_gross_RZ_25561db246.jpg"
                                                            width="50" height="50" alt="Nadir Black" longdesc=""
                                                            title="Nadir Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_14"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Linea_Brown_acd14041c2.png"
                                                            width="50" height="50" alt="Linea Brown" longdesc=""
                                                            title="Linea Brown"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_15"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Shanghai_Schnee_RZ_d61eaf3e48.jpg"
                                                            width="50" height="50" alt="Shanghai Snow" longdesc=""
                                                            title="Shanghai Snow"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_16"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_TiranoEscheGrau_gross_RZ_a184db7140.jpg"
                                                            width="50" height="50" alt="Tirano Ash Gray" longdesc=""
                                                            title="Tirano Ash Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="4_17"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Wave_Dunkel_Grau_RZ_f708a66d5a.jpg"
                                                            width="50" height="50" alt="Wave Dark Gray" longdesc=""
                                                            title="Wave Dark Gray"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="0" data-group="5">Float glass</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Authentic_Anthracite_RZ_3b2c6641fb.jpg"
                                                            width="50" height="50" alt="Authentic Anthracite"
                                                            longdesc="" title="Authentic Anthracite"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Classic_Black_RZ_98c55d90b8.jpg"
                                                            width="50" height="50" alt="Classic Black" longdesc=""
                                                            title="Classic Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Classic_Gray_RZ_775acc85d3.jpg"
                                                            width="50" height="50" alt="Classic Gray" longdesc=""
                                                            title="Classic Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Extraweiss_RZ_fb6de56c2c.jpg"
                                                            width="50" height="50" alt="Pure White" longdesc=""
                                                            title="Pure White"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Light_Beige_RZ_b788dac395.jpg"
                                                            width="50" height="50" alt="Light Beige" longdesc=""
                                                            title="Light Beige"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Metal_Grey_REF_9006_RZ_8a53a6c862.jpg"
                                                            width="50" height="50" alt="Metal Gray" longdesc=""
                                                            title="Metal Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_6"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Rich_Aluminium_RZ_d65e18d3a0.jpg"
                                                            width="50" height="50" alt="Rich Aluminum" longdesc=""
                                                            title="Rich Aluminum"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_7"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Pearl_White_RZ_91ed3bb16a.jpg"
                                                            width="50" height="50" alt="Pearl White" longdesc=""
                                                            title="Pearl White"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_8"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Shadow_Blue_RZ_1cc6ad1db2.jpg"
                                                            width="50" height="50" alt="Shadow Blue" longdesc=""
                                                            title="Shadow Blue"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_9"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Soft_White_RZ_5105d0457b.jpg"
                                                            width="50" height="50" alt="Soft White" longdesc=""
                                                            title="Soft White"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="5_10"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Starlight_Black_RZ_2f76774764.jpg"
                                                            width="50" height="50" alt="Starlight Black" longdesc=""
                                                            title="Starlight Black"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="0" data-group="6">Matelac®</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="6_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Classic_Black_RZ_98c55d90b8.jpg"
                                                            width="50" height="50" alt="Classic Black" longdesc=""
                                                            title="Classic Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="6_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Clear_Silver_RZ_b332e2e15f.jpg"
                                                            width="50" height="50" alt="Clear Silver" longdesc=""
                                                            title="Clear Silver"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="6_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Pearl_White_RZ_91ed3bb16a.jpg"
                                                            width="50" height="50" alt="Pearl White" longdesc=""
                                                            title="Pearl White"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="6_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Pure_White_RZ_c6164ba8b5.jpg"
                                                            width="50" height="50" alt="Pure White" longdesc=""
                                                            title="Pure White"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="0" data-group="7">Safety glass and
                                                special glass</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="7_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Klarglas_RZ_76db80a71e.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass clear / Clear laminated safety glass"
                                                            longdesc=""
                                                            title="Tempered glass clear / Clear laminated safety glass"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="7_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Glas_satiniert_RZ_0955cac181.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Satin-finished White" longdesc=""
                                                            title="Tempered glass Satin-finished White"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="7_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Glas_mit_Folie_WEiss_matt_RZ_ad394299d4.jpg"
                                                            width="50" height="50"
                                                            alt="Laminated safety glass with mat white film"
                                                            longdesc=""
                                                            title="Laminated safety glass with mat white film"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="7_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Parsolglas-Bronze_RZ_8b10116e04.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Bronze clear / Parsol® Bronze"
                                                            longdesc=""
                                                            title="Tempered glass Bronze clear / Parsol® Bronze"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="7_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Parsolglas-Grau_RZ_e61f210a4a.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Gray clear / Parsol® Gray"
                                                            longdesc=""
                                                            title="Tempered glass Gray clear / Parsol® Gray"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="7_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Parsolglas-Schwarz_RZ_314a0d78c3.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Black clear / Parsol® Black"
                                                            longdesc=""
                                                            title="Tempered glass Black clear / Parsol® Black"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="0" data-group="8">Mirror</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="8_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Spiegel_Bronze_RZ_6030a080cd.jpg"
                                                            width="50" height="50" alt="Mirror Bronze" longdesc=""
                                                            title="Mirror Bronze"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="8_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Spiegel_Grau_RZ_acd8f5e12f.jpg"
                                                            width="50" height="50" alt="Mirror Gray" longdesc=""
                                                            title="Mirror Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="8_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Spiegel_Silber_RZ_8de649f515.jpg"
                                                            width="50" height="50" alt="Mirror Silver" longdesc=""
                                                            title="Mirror Silver"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="8_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Bronze_satinert_RZ_339a6c2ffa.jpg"
                                                            width="50" height="50" alt="Satin-finished Bronze"
                                                            longdesc="" title="Satin-finished Bronze"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="8_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Grau_satinert_RZ_86eecc8502.jpg"
                                                            width="50" height="50" alt="Satin-finished Gray "
                                                            longdesc="" title="Satin-finished Gray "></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="0" data-group="9">Veneer</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="9_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_3391_BS_Dekor_Buche_gross_RZ_34a77e423c.jpg"
                                                            width="50" height="50" alt="Beech " longdesc=""
                                                            title="Beech "></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="9_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_37727_SE_Eiche_gross_RZ_40734b2fcf.jpg"
                                                            width="50" height="50" alt="Oak" longdesc=""
                                                            title="Oak"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="9_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_37769_SU_Esche_gross_RZ_f7a4c0787f.jpg"
                                                            width="50" height="50" alt="Ash" longdesc=""
                                                            title="Ash"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="9_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_39345_BS_Kirschbaum_gross_RZ_41deec410e.jpg"
                                                            width="50" height="50" alt="American Cherry" longdesc=""
                                                            title="American Cherry"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="9_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Bambus3_5_RZ_471501d112.jpg"
                                                            width="50" height="50" alt="Bamboo Rods across (3.5mm)"
                                                            longdesc="" title="Bamboo Rods across (3.5mm)"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="9_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Erle_N_gross_RZ_91c5698c74.jpg"
                                                            width="50" height="50" alt="Alder" longdesc=""
                                                            title="Alder"></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;">Panel
                                        material (middle)</a>
                                    <ul class="control-group">
                                        <li>
                                            <a href="" data-scene="31" data-position="1" data-group="0"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;">Wooden
                                                decor</a>
                                            <ul class="control-media">
                                                <li class="control-material">
                                                    <a href="#" data-position="1" data-index="0_0">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1180_ST37_RZ_ad09fd054d.jpg"
                                                            alt="Natural Halifax Oak" title="Natural Halifax Oak" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="1" data-index="0_1">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1181_ST37_RZ_c2150077c2.jpg"
                                                            alt="Tobacco Halifax Oak" title="Tobacco Halifax Oak " longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="1" data-index="0_2">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H305_ST12_Tonsberg_Eiche_Natur_eb1f0331c4.png"
                                                            alt="Natural Tonsberg Oak" title="Natural Tonsberg Oak" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="1" data-index="0_3">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1223_ST19_Sevilla_Esche_d03a9f2e78.png"
                                                            alt="Sevilla Ash" title="Sevilla Ash" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="1" data-index="0_4">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1307_ST19_Warmia_Nussbaum_Braun_e930ac5947.png"
                                                            alt="Warmia Walnut" title="Warmia Walnut" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="1" data-index="0_5">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1715_ST12_Parona_Nussbaum_eb642d974f.png"
                                                            alt="Parona Walnut" title="Parona Walnut" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="1" data-index="0_6">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3043_ST12_Eukalyptus_Dunkelbraun_a05aac26fa.png"
                                                            alt="Dark Brown Eucalyptus" title="Dark Brown Eucalyptus" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="1" data-index="0_7">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3158_ST19_Vicenza_Eiche_Grau_848fe142fe.png"
                                                            alt="Gray Vicenza Oak" title="Gray Vicenza Oak" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="1" data-index="0_8">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3180_TM37_Halifax_Eiche_Braun_0dd595dfd0.png"
                                                            alt="Brown Halifax Oak " title="Brown Halifax Oak " longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="1" data-index="0_9">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3331_ST10_Nebraska_Eiche_Natur_7b23eea888.png"
                                                            alt="Natural Nebraska Oak " title="Natural Nebraska Oak " longdesc>
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="1">Fantasy decor</a>
                                            <ul class="control-media">
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="1_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F501_ST2_RZ_67554418e3.jpg"
                                                            width="50" height="50" alt="Aluminum brushed"
                                                            longdesc="" title="Aluminum brushed"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="1_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F509_ST2_RZ_c074eb9a91.jpg"
                                                            width="50" height="50" alt="Aluminum" longdesc=""
                                                            title="Aluminum"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="1_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F527_ST19_Brushed_Metal_Gold_48922ef4a3.png"
                                                            width="50" height="50" alt="Brushed Metal Gold"
                                                            longdesc="" title="Brushed Metal Gold"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="1_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F528_ST20_Brushed_Metal_Bronze_c7aa50910c.png"
                                                            width="50" height="50" alt="Brushed Metal Bronze"
                                                            longdesc="" title="Brushed Metal Bronze"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="2">Uni Dekor</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U104_ST9_RZ_da7dcb5d8c.jpg"
                                                            width="50" height="50" alt="Alabaster White" longdesc=""
                                                            title="Alabaster White"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U114_ST9_Brilliantgelb_3138c2c340.png"
                                                            width="50" height="50" alt="Brilliant Yellow"
                                                            longdesc="" title="Brilliant Yellow"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U708_ST9_RZ_6cc474b3d1.jpg"
                                                            width="50" height="50" alt="Light Gray" longdesc=""
                                                            title="Light Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U325_ST9_Antikrosa_7224c7499f.png"
                                                            width="50" height="50" alt="Antique Pink " longdesc=""
                                                            title="Antique Pink "></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U350_ST9_Sienaorange_d11aa0f4f6.png"
                                                            width="50" height="50" alt="Siena Orange " longdesc=""
                                                            title="Siena Orange "></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U727_ST9_RZ_5967138d60.jpg"
                                                            width="50" height="50" alt="Stone Gray" longdesc=""
                                                            title="Stone Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_6"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U741_ST9_RZ_d7e88181b6.jpg"
                                                            width="50" height="50" alt="Lava Gray" longdesc=""
                                                            title="Lava Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_7"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U500_ST9_Gletscherblau_40cd13456f.png"
                                                            width="50" height="50" alt="Glacier Blue" longdesc=""
                                                            title="Glacier Blue"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_8"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U999_ST2_RZ_ce4de0db00.jpg"
                                                            width="50" height="50" alt="Black" longdesc=""
                                                            title="Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_9"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U540_ST9_Denimblau_718d3377da.png"
                                                            width="50" height="50" alt="Denim Blue " longdesc=""
                                                            title="Denim Blue "></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_10"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U606_ST9_Waldgruen_033d5fe3f1.png"
                                                            width="50" height="50" alt="Forest Green" longdesc=""
                                                            title="Forest Green"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_11"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U399_ST9_Granatrot_df008afbfc.png"
                                                            width="50" height="50" alt="Garnet Red " longdesc=""
                                                            title="Garnet Red "></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_12"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U646_ST9_Niagaragruen_8451bd408e.png"
                                                            width="50" height="50" alt="Niagara Green " longdesc=""
                                                            title="Niagara Green "></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_13"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U665_ST9_Steingruen_8aae93a349.png"
                                                            width="50" height="50" alt="Stone Green" longdesc=""
                                                            title="Stone Green"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="2_14"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U767_PM_Cubanitgrau_566cd73442.png"
                                                            width="50" height="50" alt="Cubanit Grey" longdesc=""
                                                            title="Cubanit Grey"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="3">White decor</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="3_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_W980_SM_RZ_9f16579c8d.jpg"
                                                            width="50" height="50" alt="Platinum White (Semi mat)"
                                                            longdesc="" title="Platinum White (Semi mat)"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="3_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_W980_ST2_RZ_97ed2bcef8.jpg"
                                                            width="50" height="50" alt="Platinum White" longdesc=""
                                                            title="Platinum White"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="3_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_W1000_ST9_RZ_67f09cdaa6.jpg"
                                                            width="50" height="50" alt="Premium White" longdesc=""
                                                            title="Premium White"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="4">Urban
                                                Structures</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Clay_Kreide_yosemite_s011_1_gross_RZ_4121d13fa8.jpg"
                                                            width="50" height="50" alt="Clay Chalk" longdesc=""
                                                            title="Clay Chalk"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_FabricSand_fa44_gross_RZ_a446bce65f.jpg"
                                                            width="50" height="50" alt="Fabric Sand" longdesc=""
                                                            title="Fabric Sand"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Fabric_Schiefer_penelope_fa46_1_gross_RZ_92144cce20.jpg"
                                                            width="50" height="50" alt="Fabric Slate" longdesc=""
                                                            title="Fabric Slate"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Fabric_Stein_penelope_fa42_1_gross_RZ_c86bb923fc.jpg"
                                                            width="50" height="50" alt="Fabric Stone" longdesc=""
                                                            title="Fabric Stone"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Idea_Curio_idea_fb86_1_gross_RZ_4b87f6a734.jpg"
                                                            width="50" height="50" alt="Idea Curio" longdesc=""
                                                            title="Idea Curio"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Idea_Renio_idea_fb80_1_gross_RZ_2ff7b532e4.jpg"
                                                            width="50" height="50" alt="Idea Renio" longdesc=""
                                                            title="Idea Renio"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_6"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Maloja_Nussbaum_maloja_s032_1_gross_RZ_9fc6b1a1bf.jpg"
                                                            width="50" height="50" alt="Maloja Walnut" longdesc=""
                                                            title="Maloja Walnut"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_7"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_MillenniumBeton_S084_gross_RZ_d6334d4800.jpg"
                                                            width="50" height="50" alt="Millennium Cement "
                                                            longdesc="" title="Millennium Cement "></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_8"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_MillenniumSchnee_B073_gross_RZ_a6b101a12c.jpg"
                                                            width="50" height="50" alt="Millennium Snow" longdesc=""
                                                            title="Millennium Snow"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_9"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Conero_c649454193.png"
                                                            width="50" height="50" alt="Conero" longdesc=""
                                                            title="Conero"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_10"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Nadir_Greige_nadir_fa45_1_gross_RZ_ba3321c1b4.jpg"
                                                            width="50" height="50" alt="Nadir Greige" longdesc=""
                                                            title="Nadir Greige"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_11"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Hickory_Black_32cb63deff.png"
                                                            width="50" height="50" alt="Hickory Black" longdesc=""
                                                            title="Hickory Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_12"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Linea_Beige_19db63a3d6.png"
                                                            width="50" height="50" alt="Linea Beige" longdesc=""
                                                            title="Linea Beige"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_13"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Nadir_Schwarz_nadir_u129_1_gross_RZ_25561db246.jpg"
                                                            width="50" height="50" alt="Nadir Black" longdesc=""
                                                            title="Nadir Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_14"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Linea_Brown_acd14041c2.png"
                                                            width="50" height="50" alt="Linea Brown" longdesc=""
                                                            title="Linea Brown"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_15"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Shanghai_Schnee_RZ_d61eaf3e48.jpg"
                                                            width="50" height="50" alt="Shanghai Snow" longdesc=""
                                                            title="Shanghai Snow"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_16"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_TiranoEscheGrau_gross_RZ_a184db7140.jpg"
                                                            width="50" height="50" alt="Tirano Ash Gray" longdesc=""
                                                            title="Tirano Ash Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="4_17"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Wave_Dunkel_Grau_RZ_f708a66d5a.jpg"
                                                            width="50" height="50" alt="Wave Dark Gray" longdesc=""
                                                            title="Wave Dark Gray"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="5">Float glass</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Authentic_Anthracite_RZ_3b2c6641fb.jpg"
                                                            width="50" height="50" alt="Authentic Anthracite"
                                                            longdesc="" title="Authentic Anthracite"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Classic_Black_RZ_98c55d90b8.jpg"
                                                            width="50" height="50" alt="Classic Black" longdesc=""
                                                            title="Classic Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Classic_Gray_RZ_775acc85d3.jpg"
                                                            width="50" height="50" alt="Classic Gray" longdesc=""
                                                            title="Classic Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Extraweiss_RZ_fb6de56c2c.jpg"
                                                            width="50" height="50" alt="Pure White" longdesc=""
                                                            title="Pure White"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Light_Beige_RZ_b788dac395.jpg"
                                                            width="50" height="50" alt="Light Beige" longdesc=""
                                                            title="Light Beige"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Light_Brown_RZ_7b07336aa1.jpg"
                                                            width="50" height="50" alt="Metal Gray" longdesc=""
                                                            title="Metal Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_6"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Metal_Grey_REF_9006_RZ_8a53a6c862.jpg"
                                                            width="50" height="50" alt="Rich Aluminum" longdesc=""
                                                            title="Rich Aluminum"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_7"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Pearl_White_RZ_91ed3bb16a.jpg"
                                                            width="50" height="50" alt="Pearl White" longdesc=""
                                                            title="Pearl White"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_8"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Rich_Aluminium_RZ_d65e18d3a0.jpg"
                                                            width="50" height="50" alt="Rich Aluminum" longdesc=""
                                                            title="Rich Aluminum"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_9"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Shadow_Blue_RZ_1cc6ad1db2.jpg"
                                                            width="50" height="50" alt="Shadow Blue" longdesc=""
                                                            title="Shadow Blue"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_10"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Soft_White_RZ_5105d0457b.jpg"
                                                            width="50" height="50" alt="Soft White" longdesc=""
                                                            title="Soft White"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="5_11"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Starlight_Black_RZ_2f76774764.jpg"
                                                            width="50" height="50" alt="Starlight Black" longdesc=""
                                                            title="Starlight Black"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="6">Matelac®</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="6_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Classic_Black_RZ_98c55d90b8.jpg"
                                                            width="50" height="50" alt="Classic Black" longdesc=""
                                                            title="Classic Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="6_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Pearl_White_RZ_91ed3bb16a.jpg"
                                                            width="50" height="50" alt="Pearl White" longdesc=""
                                                            title="Pearl White"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="6_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Clear_Silver_RZ_b332e2e15f.jpg"
                                                            width="50" height="50" alt="Clear Silver" longdesc=""
                                                            title="Clear Silver"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="6_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Pure_White_RZ_c6164ba8b5.jpg"
                                                            width="50" height="50" alt="Pure White" longdesc=""
                                                            title="Pure White"></a></li>


                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="7">Safety glass and
                                                special glass</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="7_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Klarglas_RZ_76db80a71e.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass clear / Clear laminated safety glass"
                                                            longdesc=""
                                                            title="Tempered glass clear / Clear laminated safety glass"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="7_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Glas_satiniert_RZ_0955cac181.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Satin-finished White" longdesc=""
                                                            title="Tempered glass Satin-finished White"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="7_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Glas_mit_Folie_WEiss_matt_RZ_ad394299d4.jpg"
                                                            width="50" height="50"
                                                            alt="Laminated safety glass with mat white film"
                                                            longdesc=""
                                                            title="Laminated safety glass with mat white film"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="7_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Parsolglas-Bronze_RZ_8b10116e04.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Bronze clear / Parsol® Bronze"
                                                            longdesc=""
                                                            title="Tempered glass Bronze clear / Parsol® Bronze"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="7_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Parsolglas-Grau_RZ_e61f210a4a.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Gray clear / Parsol® Gray"
                                                            longdesc=""
                                                            title="Tempered glass Gray clear / Parsol® Gray"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="7_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Parsolglas-Schwarz_RZ_314a0d78c3.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Black clear / Parsol® Black"
                                                            longdesc=""
                                                            title="Tempered glass Black clear / Parsol® Black"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="8">Mirror</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="8_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Spiegel_Bronze_RZ_6030a080cd.jpg"
                                                            width="50" height="50" alt="Mirror Bronze" longdesc=""
                                                            title="Mirror Bronze"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="8_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Spiegel_Grau_RZ_acd8f5e12f.jpg"
                                                            width="50" height="50" alt="Mirror Gray" longdesc=""
                                                            title="Mirror Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="8_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Spiegel_Silber_RZ_8de649f515.jpg"
                                                            width="50" height="50" alt="Mirror Silver" longdesc=""
                                                            title="Mirror Silver"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="8_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Bronze_satinert_RZ_339a6c2ffa.jpg"
                                                            width="50" height="50" alt="Satin-finished Bronze"
                                                            longdesc="" title="Satin-finished Bronze"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="8_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Grau_satinert_RZ_86eecc8502.jpg"
                                                            width="50" height="50" alt="Satin-finished Gray "
                                                            longdesc="" title="Satin-finished Gray "></a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="9">3D surface</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="9_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Wave_Alpi-Eiche_hell_quer_RZ_eb60a061b8.jpg"
                                                            width="50" height="50" alt="Wave Light Recut Oak"
                                                            longdesc="" title="Wave Light Recut Oak"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="9_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Wave_Alpi-Eiche_schoko_quer_RZ_414a95b057.jpg"
                                                            width="50" height="50" alt="Wave Chocolate Recut Oak "
                                                            longdesc="" title="Wave Chocolate Recut Oak "></a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="10">Wooden Selection</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="10_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_BALKENEICHE_COLOR_Silber_ef0ca9275c.jpg"
                                                            width="50" height="50" alt="Beam Oak Color Silver"
                                                            longdesc="" title="Beam Oak Color Silver"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="10_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_BALKENEICHE_COLOR_Vintagegrau_c58c8b0f3b.jpg"
                                                            width="50" height="50"
                                                            alt="Beam Oak Color Vintage Gray" longdesc=""
                                                            title="Beam Oak Color Vintage Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="10_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_EICHE_COLOR_Graphitgrau_c230e307ca.jpg"
                                                            width="50" height="50" alt="Oak Color Graphite Gray"
                                                            longdesc="" title="Oak Color Graphite Gray"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="10_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_EICHE_COLOR_Samtschwarz_4ddb86b940.jpg"
                                                            width="50" height="50" alt="Oak Color Velvet Black"
                                                            longdesc="" title="Oak Color Velvet Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="10_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_OLD_NATURE_Oak_Grey_6bdca00239.jpg"
                                                            width="50" height="50" alt="Old Nature Oak Gray"
                                                            longdesc="" title="Old Nature Oak Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="10_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_OLD_NATURE_Oak_Nature_eca9b7b992.jpg"
                                                            width="50" height="50" alt="Old Nature Oak Gray"
                                                            longdesc="" title="Old Nature Oak Gray"></a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="1" data-group="11">Veneer</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="11_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_3391_BS_Dekor_Buche_gross_RZ_34a77e423c.jpg"
                                                            width="50" height="50" alt="Beech " longdesc=""
                                                            title="Beech "></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="11_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_37727_SE_Eiche_gross_RZ_40734b2fcf.jpg"
                                                            width="50" height="50" alt="Oak" longdesc=""
                                                            title="Oak"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="11_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_37769_SU_Esche_gross_RZ_f7a4c0787f.jpg"
                                                            width="50" height="50" alt="Ash" longdesc=""
                                                            title="Ash"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="11_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_39345_BS_Kirschbaum_gross_RZ_41deec410e.jpg"
                                                            width="50" height="50" alt="American Cherry" longdesc=""
                                                            title="American Cherry"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="11_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Bambus3_5_RZ_471501d112.jpg"
                                                            width="50" height="50" alt="Bamboo Rods across (3.5mm)"
                                                            longdesc="" title="Bamboo Rods across (3.5mm)"></a></li>
                                                <li class="control-material"><a href="#" data-position="1"
                                                        data-index="11_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Erle_N_gross_RZ_91c5698c74.jpg"
                                                            width="50" height="50" alt="Alder" longdesc=""
                                                            title="Alder"></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;">Panel
                                        material (bottom)</a>
                                    <ul class="control-group">
                                        <li>
                                            <a href="" data-scene="31" data-position="2" data-group="0"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;">Wooden
                                                decor</a>
                                            <ul class="control-media">
                                                <li class="control-material">
                                                    <a href="#" data-position="2" data-index="0_0">
                                                        <img width="50" height="50" alt="Natural Halifax Oak" title="Natural Halifax Oak"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1180_ST37_RZ_ad09fd054d.jpg"
                                                            longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="2" data-index="0_1">
                                                        <img width="50" height="50" alt="Natural Tonsberg Oak" title="Natural Tonsberg Oak"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H305_ST12_Tonsberg_Eiche_Natur_eb1f0331c4.png"
                                                            longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="2" data-index="0_2">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1181_ST37_RZ_c2150077c2.jpg"
                                                            alt="Tobacco Halifax Oak" title="Tobacco Halifax Oak " longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="2" data-index="0_3">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1223_ST19_Sevilla_Esche_d03a9f2e78.png"
                                                            alt="Sevilla Ash" title="Sevilla Ash " longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="2" data-index="0_4">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1307_ST19_Warmia_Nussbaum_Braun_e930ac5947.png"
                                                            alt="Warmia Walnut" title="Warmia Walnut " longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="2" data-index="0_5">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1715_ST12_Parona_Nussbaum_eb642d974f.png"
                                                            alt="Parona Walnut " title="Parona Walnut " longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="2" data-index="0_6">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3043_ST12_Eukalyptus_Dunkelbraun_a05aac26fa.png"
                                                            title="Dark Brown Eucalyptus" alt="Dark Brown Eucalyptus" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="2" data-index="0_7">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3158_ST19_Vicenza_Eiche_Grau_848fe142fe.png"
                                                            alt="Gray Vicenza Oak" title="Gray Vicenza Oak" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="2" data-index="0_8">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3180_TM37_Halifax_Eiche_Braun_0dd595dfd0.png"
                                                            alt="Brown Halifax Oak" title="Brown Halifax Oak" longdesc>
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="2" data-index="0_9">
                                                        <img width="50" height="50"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H3331_ST10_Nebraska_Eiche_Natur_7b23eea888.png"
                                                            alt="Natural Nebraska Oak" title="Natural Nebraska Oak" longdesc>
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="2" data-group="1">Fantasy decor</a>
                                            <ul class="control-media">
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="1_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F501_ST2_RZ_67554418e3.jpg"
                                                            width="50" height="50" alt="Aluminum brushed"
                                                            longdesc="" title="Aluminum brushed"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="1_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F509_ST2_RZ_c074eb9a91.jpg"
                                                            width="50" height="50" alt="Aluminum" longdesc=""
                                                            title="Aluminum"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="1_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F527_ST19_Brushed_Metal_Gold_48922ef4a3.png"
                                                            width="50" height="50" alt="Brushed Metal Gold"
                                                            longdesc="" title="Brushed Metal Gold"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="1_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_F528_ST20_Brushed_Metal_Bronze_c7aa50910c.png"
                                                            width="50" height="50" alt="Brushed Metal Bronze"
                                                            longdesc="" title="Brushed Metal Bronze"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="2" data-group="2">Uni Dekor</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U104_ST9_RZ_da7dcb5d8c.jpg"
                                                            width="50" height="50" alt="Alabaster White" longdesc=""
                                                            title="Alabaster White"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U114_ST9_Brilliantgelb_3138c2c340.png"
                                                            width="50" height="50" alt="Brilliant Yellow"
                                                            longdesc="" title="Brilliant Yellow"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U708_ST9_RZ_6cc474b3d1.jpg"
                                                            width="50" height="50" alt="Light Gray" longdesc=""
                                                            title="Light Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U325_ST9_Antikrosa_7224c7499f.png"
                                                            width="50" height="50" alt="Antique Pink " longdesc=""
                                                            title="Antique Pink "></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U350_ST9_Sienaorange_d11aa0f4f6.png"
                                                            width="50" height="50" alt="Siena Orange " longdesc=""
                                                            title="Siena Orange "></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U727_ST9_RZ_5967138d60.jpg"
                                                            width="50" height="50" alt="Stone Gray" longdesc=""
                                                            title="Stone Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_6"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U741_ST9_RZ_d7e88181b6.jpg"
                                                            width="50" height="50" alt="Lava Gray" longdesc=""
                                                            title="Lava Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_7"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U500_ST9_Gletscherblau_40cd13456f.png"
                                                            width="50" height="50" alt="Glacier Blue" longdesc=""
                                                            title="Glacier Blue"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_8"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U999_ST2_RZ_ce4de0db00.jpg"
                                                            width="50" height="50" alt="Black" longdesc=""
                                                            title="Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_9"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U540_ST9_Denimblau_718d3377da.png"
                                                            width="50" height="50" alt="Denim Blue " longdesc=""
                                                            title="Denim Blue "></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_10"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U606_ST9_Waldgruen_033d5fe3f1.png"
                                                            width="50" height="50" alt="Forest Green" longdesc=""
                                                            title="Forest Green"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_11"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U399_ST9_Granatrot_df008afbfc.png"
                                                            width="50" height="50" alt="Garnet Red " longdesc=""
                                                            title="Garnet Red "></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_12"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U646_ST9_Niagaragruen_8451bd408e.png"
                                                            width="50" height="50" alt="Niagara Green " longdesc=""
                                                            title="Niagara Green "></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_13"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U665_ST9_Steingruen_8aae93a349.png"
                                                            width="50" height="50" alt="Stone Green" longdesc=""
                                                            title="Stone Green"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="2_14"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U767_PM_Cubanitgrau_566cd73442.png"
                                                            width="50" height="50" alt="Cubanit Grey" longdesc=""
                                                            title="Cubanit Grey"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="2" data-group="3">White decor</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="3_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_W980_SM_RZ_9f16579c8d.jpg"
                                                            width="50" height="50" alt="Platinum White (Semi mat)"
                                                            longdesc="" title="Platinum White (Semi mat)"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="3_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_W980_ST2_RZ_97ed2bcef8.jpg"
                                                            width="50" height="50" alt="Platinum White" longdesc=""
                                                            title="Platinum White"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="3_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_W1000_ST9_RZ_67f09cdaa6.jpg"
                                                            width="50" height="50" alt="Premium White" longdesc=""
                                                            title="Premium White"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="2" data-group="4">Urban
                                                Structures</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Clay_Kreide_yosemite_s011_1_gross_RZ_4121d13fa8.jpg"
                                                            width="50" height="50" alt="Clay Chalk" longdesc=""
                                                            title="Clay Chalk"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_FabricSand_fa44_gross_RZ_a446bce65f.jpg"
                                                            width="50" height="50" alt="Fabric Sand" longdesc=""
                                                            title="Fabric Sand"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Fabric_Schiefer_penelope_fa46_1_gross_RZ_92144cce20.jpg"
                                                            width="50" height="50" alt="Fabric Slate" longdesc=""
                                                            title="Fabric Slate"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Fabric_Stein_penelope_fa42_1_gross_RZ_c86bb923fc.jpg"
                                                            width="50" height="50" alt="Fabric Stone" longdesc=""
                                                            title="Fabric Stone"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Idea_Curio_idea_fb86_1_gross_RZ_4b87f6a734.jpg"
                                                            width="50" height="50" alt="Idea Curio" longdesc=""
                                                            title="Idea Curio"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Idea_Renio_idea_fb80_1_gross_RZ_2ff7b532e4.jpg"
                                                            width="50" height="50" alt="Idea Renio" longdesc=""
                                                            title="Idea Renio"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_6"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Maloja_Nussbaum_maloja_s032_1_gross_RZ_9fc6b1a1bf.jpg"
                                                            width="50" height="50" alt="Maloja Walnut" longdesc=""
                                                            title="Maloja Walnut"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_7"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_MillenniumBeton_S084_gross_RZ_d6334d4800.jpg"
                                                            width="50" height="50" alt="Millennium Cement "
                                                            longdesc="" title="Millennium Cement "></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_8"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_MillenniumSchnee_B073_gross_RZ_a6b101a12c.jpg"
                                                            width="50" height="50" alt="Millennium Snow" longdesc=""
                                                            title="Millennium Snow"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_9"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Conero_c649454193.png"
                                                            width="50" height="50" alt="Conero" longdesc=""
                                                            title="Conero"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_10"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Nadir_Greige_nadir_fa45_1_gross_RZ_ba3321c1b4.jpg"
                                                            width="50" height="50" alt="Nadir Greige" longdesc=""
                                                            title="Nadir Greige"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_11"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Hickory_Black_32cb63deff.png"
                                                            width="50" height="50" alt="Hickory Black" longdesc=""
                                                            title="Hickory Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_12"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Linea_Beige_19db63a3d6.png"
                                                            width="50" height="50" alt="Linea Beige" longdesc=""
                                                            title="Linea Beige"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_13"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Nadir_Schwarz_nadir_u129_1_gross_RZ_25561db246.jpg"
                                                            width="50" height="50" alt="Nadir Black" longdesc=""
                                                            title="Nadir Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_14"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Linea_Brown_acd14041c2.png"
                                                            width="50" height="50" alt="Linea Brown" longdesc=""
                                                            title="Linea Brown"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_15"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Shanghai_Schnee_RZ_d61eaf3e48.jpg"
                                                            width="50" height="50" alt="Shanghai Snow" longdesc=""
                                                            title="Shanghai Snow"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_16"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_TiranoEscheGrau_gross_RZ_a184db7140.jpg"
                                                            width="50" height="50" alt="Tirano Ash Gray" longdesc=""
                                                            title="Tirano Ash Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="4_17"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Wave_Dunkel_Grau_RZ_f708a66d5a.jpg"
                                                            width="50" height="50" alt="Wave Dark Gray" longdesc=""
                                                            title="Wave Dark Gray"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="2" data-group="5">Float glass</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Authentic_Anthracite_RZ_3b2c6641fb.jpg"
                                                            width="50" height="50" alt="Authentic Anthracite"
                                                            longdesc="" title="Authentic Anthracite"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Classic_Black_RZ_98c55d90b8.jpg"
                                                            width="50" height="50" alt="Classic Black" longdesc=""
                                                            title="Classic Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Classic_Gray_RZ_775acc85d3.jpg"
                                                            width="50" height="50" alt="Classic Gray" longdesc=""
                                                            title="Classic Gray"></a></li>

                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Extraweiss_RZ_fb6de56c2c.jpg"
                                                            width="50" height="50" alt="Pure White" longdesc=""
                                                            title="Pure White"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Light_Beige_RZ_b788dac395.jpg"
                                                            width="50" height="50" alt="Light Beige" longdesc=""
                                                            title="Light Beige"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Light_Brown_RZ_7b07336aa1.jpg"
                                                            width="50" height="50" alt="Light Beige" longdesc=""
                                                            title="Light Brown"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_6"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Metal_Grey_REF_9006_RZ_8a53a6c862.jpg"
                                                            width="50" height="50" alt="Metal Gray" longdesc=""
                                                            title="Metal Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_7"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Pearl_White_RZ_91ed3bb16a.jpg"
                                                            width="50" height="50" alt="Pearl White" longdesc=""
                                                            title="Pearl White"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_8"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Rich_Aluminium_RZ_d65e18d3a0.jpg"
                                                            width="50" height="50" alt="Rich Aluminum" longdesc=""
                                                            title="Rich Aluminum"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_9"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Shadow_Blue_RZ_1cc6ad1db2.jpg"
                                                            width="50" height="50" alt="Shadow Blue" longdesc=""
                                                            title="Shadow Blue"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_10"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Soft_White_RZ_5105d0457b.jpg"
                                                            width="50" height="50" alt="Soft White" longdesc=""
                                                            title="Soft White"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="5_11"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Starlight_Black_RZ_2f76774764.jpg"
                                                            width="50" height="50" alt="Starlight Black" longdesc=""
                                                            title="Starlight Black"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="2" data-group="6">Matelac®</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="6_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Classic_Black_RZ_98c55d90b8.jpg"
                                                            width="50" height="50" alt="Classic Black" longdesc=""
                                                            title="Classic Black"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="6_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Clear_Silver_RZ_b332e2e15f.jpg"
                                                            width="50" height="50" alt="Clear Silver" longdesc=""
                                                            title="Clear Silver"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="6_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Pearl_White_RZ_91ed3bb16a.jpg"
                                                            width="50" height="50" alt="Pearl White" longdesc=""
                                                            title="Pearl White"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="6_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Pure_White_RZ_c6164ba8b5.jpg"
                                                            width="50" height="50" alt="Pure White" longdesc=""
                                                            title="Pure White"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="2" data-group="7">Safety glass and
                                                special glass</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="7_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Klarglas_RZ_76db80a71e.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass clear / Clear laminated safety glass"
                                                            longdesc=""
                                                            title="Tempered glass clear / Clear laminated safety glass"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="7_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Glas_satiniert_RZ_0955cac181.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Satin-finished White" longdesc=""
                                                            title="Tempered glass Satin-finished White"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="7_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Glas_mit_Folie_WEiss_matt_RZ_ad394299d4.jpg"
                                                            width="50" height="50"
                                                            alt="Laminated safety glass with mat white film"
                                                            longdesc=""
                                                            title="Laminated safety glass with mat white film"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="7_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Parsolglas-Bronze_RZ_8b10116e04.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Bronze clear / Parsol® Bronze"
                                                            longdesc=""
                                                            title="Tempered glass Bronze clear / Parsol® Bronze"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="7_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Parsolglas-Grau_RZ_e61f210a4a.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Gray clear / Parsol® Gray"
                                                            longdesc=""
                                                            title="Tempered glass Gray clear / Parsol® Gray"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="7_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Parsolglas-Schwarz_RZ_314a0d78c3.jpg"
                                                            width="50" height="50"
                                                            alt="Tempered glass Black clear / Parsol® Black"
                                                            longdesc=""
                                                            title="Tempered glass Black clear / Parsol® Black"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="2" data-group="8">Mirror</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="8_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Spiegel_Bronze_RZ_6030a080cd.jpg"
                                                            width="50" height="50" alt="Mirror Bronze" longdesc=""
                                                            title="Mirror Bronze"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="8_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Spiegel_Grau_RZ_acd8f5e12f.jpg"
                                                            width="50" height="50" alt="Mirror Gray" longdesc=""
                                                            title="Mirror Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="8_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Spiegel_Silber_RZ_8de649f515.jpg"
                                                            width="50" height="50" alt="Mirror Silver" longdesc=""
                                                            title="Mirror Silver"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="8_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Bronze_satinert_RZ_339a6c2ffa.jpg"
                                                            width="50" height="50" alt="Satin-finished Bronze"
                                                            longdesc="" title="Satin-finished Bronze"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="8_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Grau_satinert_RZ_86eecc8502.jpg"
                                                            width="50" height="50" alt="Satin-finished Gray "
                                                            longdesc="" title="Satin-finished Gray "></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="2" data-group="9">Veneer</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="9_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_3391_BS_Dekor_Buche_gross_RZ_34a77e423c.jpg"
                                                            width="50" height="50" alt="Beech " longdesc=""
                                                            title="Beech "></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="9_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_37727_SE_Eiche_gross_RZ_40734b2fcf.jpg"
                                                            width="50" height="50" alt="Oak" longdesc=""
                                                            title="Oak"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="9_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_37769_SU_Esche_gross_RZ_f7a4c0787f.jpg"
                                                            width="50" height="50" alt="Ash" longdesc=""
                                                            title="Ash"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="9_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_39345_BS_Kirschbaum_gross_RZ_41deec410e.jpg"
                                                            width="50" height="50" alt="American Cherry" longdesc=""
                                                            title="American Cherry"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="9_4"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Bambus3_5_RZ_471501d112.jpg"
                                                            width="50" height="50" alt="Bamboo Rods across (3.5mm)"
                                                            longdesc="" title="Bamboo Rods across (3.5mm)"></a></li>
                                                <li class="control-material"><a href="#" data-position="2"
                                                        data-index="9_5"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Erle_N_gross_RZ_91c5698c74.jpg"
                                                            width="50" height="50" alt="Alder" longdesc=""
                                                            title="Alder"></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;">
                                        Frame colour of the sliding door</a>
                                    <ul class="control-group">
                                        <li>
                                            <a href="" onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="3" data-group="1">Anodised</a>
                                            <ul class="control-media">
                                                <li class="control-material">
                                                    <a href="#" data-position="3" data-index="0_0">
                                                        <img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Silber_eloxiert_RZ_e728d98ad1.jpg"
                                                            width="50" height="50" alt="Silver" longdesc=""
                                                            title="Silver">
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="3" data-index="0_1">
                                                        <img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Eloxal_Hellbronze_RZ_5f8a488be4.jpg"
                                                            width="50" height="50" alt="Light Bronze" longdesc=""
                                                            title="Light Bronze">
                                                    </a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="3" data-index="0_2">
                                                        <img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Eloxal_Dunkelbronze_RZ_1E_e9de4f6147.jpg"
                                                            width="50" height="50" alt="Dark Bronze" longdesc=""
                                                            title="Dark Bronze">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="31" data-position="3" data-group="1">Powder-coated</a>
                                            <ul class="control-media">
                                                <li class="control-material">
                                                    <a href="#" data-position="3" data-index="1_0">
                                                        <img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Schwarz_RZ_3986b5694c.jpg"
                                                            width="50" height="50" alt="Black" longdesc=""
                                                            title="Black"></a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="3" data-index="1_1">
                                                        <img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Weiss_RZ_5d0f474fd1.jpg"
                                                            width="50" height="50" alt="White" longdesc=""
                                                            title="White"></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div data-scene="32" class="control-scene">

                            <ul class="control-position">
                                <li class="current">
                                    <a href="#"
                                        onclick="txMaterialToggleSubmenu(event, this); return false;">Surface</a>
                                    <ul class="control-group">
                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="32" data-position="0" data-group="0">Decor</a>
                                            <ul class="control-media">

                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_0">
                                                        <img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Schrank-Innenleben-DEKOR-U104_A3_10DE_Weiss_3df9b75bd7.jpg"
                                                            width="50" height="50" alt="White" longdesc=""
                                                            title="White"></a>
                                                </li>
                                                <li class="control-material">
                                                    <a href="#" data-position="0" data-index="0_1"><img
                                                            loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Schrank-Innenleben-DEKOR_Hellgrau_214c907d21.jpg"
                                                            width="50" height="50" alt="Light Gray" longdesc=""
                                                            title="Light Gray"></a>
                                                </li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="0_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_U727_PM_Steingrau_RZ_f210f9cb59.jpg"
                                                            width="50" height="50" alt="Stone Gray" longdesc=""
                                                            title="Stone Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="0_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Schrank-Innenleben-DEKOR2-Staubgrau_U732_ST9_6e643f1e7d.jpg"
                                                            width="50" height="50" alt="Dust Gray" longdesc=""
                                                            title="Dust Gray"></a></li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="32" data-position="0" data-group="1">UrbanStructures</a>
                                            <ul class="control-media">

                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="1_0"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Maloja_Nussbaum_maloja_s032_1_gross_RZ_9fc6b1a1bf.jpg"
                                                            width="50" height="50" alt="Maloja Walnut" longdesc=""
                                                            title="Maloja Walnut"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="1_1"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Hickory_Marrone_35c22cb4a5.png"
                                                            width="50" height="50" alt="Hickory Marrone" longdesc=""
                                                            title="Hickory Marrone"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="1_2"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_TiranoEscheGrau_gross_RZ_a184db7140.jpg"
                                                            width="50" height="50" alt="Tirano Ash Gray" longdesc=""
                                                            title="Tirano Ash Gray"></a></li>
                                                <li class="control-material"><a href="#" data-position="0"
                                                        data-index="1_3"><img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Urban_Structures_Hickory_Black_bfd797e2ee.png"
                                                            width="50" height="50" alt="Hickory Black" longdesc=""
                                                            title="Hickory Black"></a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div data-scene="33" class="control-scene">

                            <div class="control-toggle">
                                <span class="styled-checkbox active">

                                    <input id="tcb33" type="checkbox" checked="checked" data-default="1" onclick="txMaterialChangeScene(event, (this.checked ? '33' : '31'), (this.checked ? '31' : '33'));">

                                    <span></span>
                                </span>
                                <label for="tcb33">&nbsp;Without rails</label>
                            </div>
                            <ul class="control-position">

                                <li>
                                    <a href="#" onclick="txMaterialToggleSubmenu(event, this); return false;">Panel
                                        material</a>
                                    <ul class="control-group">

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="0" data-group="0">Wooden decor</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="0" data-group="1">Fantasy decor</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="0" data-group="2">Uni Dekor</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="0" data-group="3">White decor</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="0" data-group="4">Urban
                                                Structures</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="0" data-group="5">Float glass</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="0" data-group="6">Matelac®</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="0" data-group="7">Safety glass and
                                                special glass</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="0" data-group="8">Mirror</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="0" data-group="9">Veneer</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="#" onclick="txMaterialToggleSubmenu(event, this); return false;">Frame
                                        colour of the sliding door</a>
                                    <ul class="control-group">

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="1" data-group="0">Anodised</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"
                                                onclick="txMaterialToggleSubmenu(event, this); return false;"
                                                data-scene="33" data-position="1" data-group="1">Powder-coated</a>
                                            <ul class="control-media">

                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div id="material-scene" class="right-side-content">
                        <div id="material-preview">
                            <div id="material-preview-inner">
                                <img loading="lazy" src="" alt="Vorschau">
                                <div id="material-preview-title">&nbsp;</div>
                            </div>
                        </div>
                        <div class="material-image static-background">
                            <picture>
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_P2-Szene-Innenleben_8c24d506fa.jpg" alt="">
                            </picture>
                        </div>
                        <div data-scene="31" class="current">
                            <div data-pos="0" data-index="0_0" class="material-image current">
                                <picture>
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1180_ST37_4caa6eb4ae.webp"
                                        alt="Natural Halifax Oak" longdesc="">
                                </picture>

                            </div>
                            <div data-pos="1" data-index="0_0" class="material-image current">
                                <picture>
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1180_ST37_d7de7c7967.webp"
                                        alt="Natural Halifax Oak" longdesc="">
                                </picture>
                            </div>
                            <div data-pos="2" data-index="0_0" class="material-image current ">
                                <picture>
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1180_ST37_2d98440008.webp"
                                        alt="Natural Halifax Oak" longdesc="">
                                </picture>
                            </div>
                            <div data-pos="3" data-index="0_0" class="material-image current">
                                <picture>
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Silber_eloxiert_54c05e73d5.webp"
                                        alt="Silver" longdesc="">
                                </picture>
                            </div>
                        </div>
                        <div data-scene="32">
                            <div data-pos="0" data-index="0_0" class="material-image current">
                                <picture>
                                    <!-- <source srcset="/fileadmin/_processed_/4/7/csm_Schrank-Innenleben-DEKOR-U104_A3_10DE_Weiss_e0954fdf10.webp" media="(min-width: 750px)" type="image/webp">
									<source srcset="/fileadmin/_processed_/4/7/csm_Schrank-Innenleben-DEKOR-U104_A3_10DE_Weiss_c305e0ad17.webp" media="(min-width: 559px)" type="image/webp">
									<source srcset="/fileadmin/_processed_/4/7/csm_Schrank-Innenleben-DEKOR-U104_A3_10DE_Weiss_da4c7c067c.webp" media="(max-width: 558px)" type="image/webp">
									<source srcset="/fileadmin/_processed_/4/7/csm_Schrank-Innenleben-DEKOR-U104_A3_10DE_Weiss_3ccab50062.png" media="(min-width: 750px)" type="image/png">
									<source srcset="/fileadmin/_processed_/4/7/csm_Schrank-Innenleben-DEKOR-U104_A3_10DE_Weiss_7539f3783b.png" media="(min-width: 559px)" type="image/png"> -->
                                    <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Schrank-Innenleben-DEKOR-U104_A3_10DE_Weiss_e0954fdf10.webp"
                                        alt="White" longdesc="">
                                </picture>
                            </div>
                        </div>
                        <div data-scene="33">
                            <div data-pos="0" data-index="0_0" class="material-image current">
                                <picture>
                                    <!-- <source srcset="/fileadmin/_processed_/8/6/csm_H1150_ST10_1694f63618.webp" media="(min-width: 750px)" type="image/webp">
						        			<source srcset="/fileadmin/_processed_/8/6/csm_H1150_ST10_e4039e0558.webp" media="(min-width: 559px)" type="image/webp">
						        			<source srcset="/fileadmin/_processed_/8/6/csm_H1150_ST10_d1acf8285e.webp" media="(max-width: 558px)" type="image/webp">
						        			<source srcset="/fileadmin/_processed_/8/6/csm_H1150_ST10_5c1ddd9ea1.png" media="(min-width: 750px)" type="image/png">
						        			<source srcset="/fileadmin/_processed_/8/6/csm_H1150_ST10_6445f0760f.png" media="(min-width: 559px)" type="image/png"> -->
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_H1150_ST10_1694f63618.webp"
                                        alt="Arizona Oak Gray" longdesc="">
                                </picture>

                            </div>
                            <div data-pos="1" data-index="0_0" class="material-image current">
                                <picture>
                                    <!-- <source srcset="/fileadmin/_processed_/d/7/csm_Silber_eloxiert_e0ebc8c36e.webp" media="(min-width: 750px)" type="image/webp">
						        			<source srcset="/fileadmin/_processed_/d/7/csm_Silber_eloxiert_033d2d16fe.webp" media="(min-width: 559px)" type="image/webp">
						        			<source srcset="/fileadmin/_processed_/d/7/csm_Silber_eloxiert_507661e92b.webp" media="(max-width: 558px)" type="image/webp">
						        			<source srcset="/fileadmin/_processed_/d/7/csm_Silber_eloxiert_69eec89fbf.png" media="(min-width: 750px)" type="image/png">
						        			<source srcset="/fileadmin/_processed_/d/7/csm_Silber_eloxiert_4dbee0aab1.png" media="(min-width: 559px)" type="image/png"> -->
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/material/csm_Silber_eloxiert_e0ebc8c36e.webp"
                                        alt="Silver" longdesc="">
                                </picture>

                            </div>

                        </div>
                        <div class="download_section">
                            <p>The panels and surfaces shown are only a selection of the range. For further options,
                                please contact your <a href="/dealer-search"> specialist dealer.</a></p>
                            <div class="download_pdf_awards">
                                <a href="" class="btn_1 call_downlods">
                                    <span class="btn-inner">
                                        <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 640">
                                                <path
                                                    d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 306.7L246.6 265.3C234.1 252.8 213.8 252.8 201.3 265.3C188.8 277.8 188.8 298.1 201.3 310.6L297.3 406.6C309.8 419.1 330.1 419.1 342.6 406.6L438.6 310.6C451.1 298.1 451.1 277.8 438.6 265.3C426.1 252.8 405.8 252.8 393.3 265.3L352 306.7L352 96zM160 384C124.7 384 96 412.7 96 448L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 448C544 412.7 515.3 384 480 384L433.1 384L376.5 440.6C345.3 471.8 294.6 471.8 263.4 440.6L206.9 384L160 384zM464 440C477.3 440 488 450.7 488 464C488 477.3 477.3 488 464 488C450.7 488 440 477.3 440 464C440 450.7 450.7 440 464 440z">
                                                </path>
                                            </svg></span>
                                        <span class="text-span">Download (PDF)</span>
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

<section class="section-padding intelligent-list-section light_grey">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span><?php echo get_field('section_9_title'); ?></span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_9_heading'); ?> <span> <?php echo get_field('section_9_color_text'); ?> </span><?php echo get_field('section_9_normal_text'); ?></h2>
                </div>
            </div>
            <div class="intelligent-list-section-inner-body">
                <div class="row">
                    <?php
                    if (have_rows('section_9_listing')) {
                        while (have_rows('section_9_listing')) {
                            the_row(); ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-card card">
                                    <img src="<?php echo get_sub_field('section_9_listing_image'); ?>" alt="Corner Wardrobe">
                                    <div class="card-body">
                                        <h5><?php echo get_sub_field('section_9_listing_title'); ?></h5>
                                        <p><?php echo get_sub_field('section_9_listing_description'); ?></p>
                                        <div class="button-wrapper text-center">
                                            <a href="<?php echo get_sub_field('section_9_listing_btn_link'); ?>" class="btn_1">
                                                <span class="btn-inner">
                                                    <span class="text-span"><?php echo get_sub_field('section_9_listing_btn_text'); ?></span>
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

<section class="call_to_action_home">
    <div class="container">
        <div class="call_to_action_parent">
            <div class="call_to_action_left">
                <h2><?php echo get_field('section_10_heading'); ?></h2>
                <p><?php echo get_field('section_10_subheading'); ?></p>
                <a href="<?php echo get_field('section_10_btn_link'); ?>" id="call_action" class="btn_1">
                    <span class="btn-inner">
                        <span class="text-span"><?php echo get_field('section_10_btn_text'); ?></span>
                        <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"></path>
                            </svg></span>
                    </span>
                </a>
            </div>
            <div class="call_to_action_right">
                <div class="kt-inside-inner-col" style="background-image: url('<?php echo get_field('section_10_image') ?>');"></div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding Outstanding-service-section light_grey">
    <div class="container">
        <div class="intelligent-list-section-inner">
            <div class="projects-list-section-inner-heading">
                <div class="projects-list-section-inner-heading-left">
                    <span><?php echo get_field('section_11_title'); ?></span>
                </div>
                <div class="projects-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_11_heading'); ?> <span> <?php echo get_field('section_11_color_text'); ?></span> <?php echo get_field('section_11_normal_text'); ?></h2>
                </div>
            </div>
            <div class="Outstanding-service-inner-body">
                <div class="upper-side-top-images">
                    <div class="images-box-faq">
                        <div class="image-content-top">
                            <img src="<?php echo get_field('section_11_1st_record_image_1'); ?>" alt="">
                        </div>
                        <div class="image-content-bottom">
                            <a href="#" data-content="content-1" href=""><?php echo get_field('section_11_1st_record_text'); ?></a>
                        </div>
                        <img src="<?php echo get_field('section_11_1st_record_image_2'); ?>" alt="">
                    </div>
                    <div class="images-box-faq">
                        <div class="image-content-top">
                            <img src="<?php echo get_field('section_11_2nd_record_image_1'); ?>" alt="">
                        </div>
                        <div class="image-content-bottom">
                            <a href="#" data-content="content-2" href=""><?php echo get_field('section_11_2nd_record_text'); ?></a>
                        </div>
                        <img src="<?php echo get_field('section_11_2nd_record_image_2'); ?>" alt="">
                    </div>
                    <div class="images-box-faq">
                        <div class="image-content-top">
                            <img src="<?php echo get_field('section_11_3rd_record_image_1'); ?>" alt="">
                        </div>
                        <div class="image-content-bottom">
                            <a href="#" data-content="content-3" href=""><?php echo get_field('section_11_3rd_record_text'); ?></a>
                        </div>
                        <img src="<?php echo get_field('section_11_3rd_record_image_2'); ?>" alt="">
                    </div>
                </div>
                <div class="upper-side-bottom-images">
                    <div id="content-1" class="images-box-faq-content-1">
                        <?php
                        if (have_rows('section_11_1st_record_listing')) {
                            while (have_rows('section_11_1st_record_listing')) {
                                the_row(); ?>
                                <div class="images-box-faq-content-1-inner">
                                    <div class="images-box-faq-content-1-left">
                                        <div class="images-box-faq-content-1-h">
                                            <h3><?php echo get_sub_field('section_11_1st_record_listing_title'); ?></h3>
                                        </div>
                                        <div class="images-box-faq-content-1-b">
                                            <?php echo get_sub_field('section_11_1st_record_listing_description'); ?>
                                        </div>
                                    </div>
                                    <div class="images-box-faq-content-1-right">
                                        <div class="slider-box sliderBox">
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_11_1st_record_listing_image_1'); ?>" alt="">
                                                </picture>
                                            </div>
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_11_1st_record_listing_image_2'); ?>" alt="">
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
                        if (have_rows('section_11_2nd_record_listing')) {
                            while (have_rows('section_11_2nd_record_listing')) {
                                the_row(); ?>
                                <div class="images-box-faq-content-1-inner">
                                    <div class="images-box-faq-content-1-left">
                                        <div class="images-box-faq-content-1-h">
                                            <h3><?php echo get_sub_field('section_11_2nd_record_listing_title'); ?></h3>
                                        </div>
                                        <div class="images-box-faq-content-1-b">
                                            <?php echo get_sub_field('section_11_2nd_record_listing_description'); ?>
                                        </div>
                                    </div>
                                    <div class="images-box-faq-content-1-right">
                                        <div class="slider-box sliderBox">
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_11_2nd_record_listing_image_1'); ?>" alt="">
                                                </picture>
                                            </div>
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_11_2nd_record_listing_image_2'); ?>" alt="">
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
                        if (have_rows('section_11_3rd_record_listing')) {
                            while (have_rows('section_11_3rd_record_listing')) {
                                the_row(); ?>
                                <div class="images-box-faq-content-1-inner">
                                    <div class="images-box-faq-content-1-left">
                                        <div class="images-box-faq-content-1-h">
                                            <h3><?php echo get_sub_field('section_11_3rd_record_listing_title'); ?></h3>
                                        </div>
                                        <div class="images-box-faq-content-1-b">
                                            <?php echo get_sub_field('section_11_3rd_record_listing_description'); ?>
                                        </div>
                                    </div>
                                    <div class="images-box-faq-content-1-right">
                                        <div class="slider-box sliderBox">
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_11_3rd_record_listing_image_1'); ?>" alt="">
                                                </picture>
                                            </div>
                                            <div>
                                                <picture>
                                                    <img src="<?php echo get_sub_field('section_11_3rd_record_listing_image_2'); ?>" alt="">
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

<section class="section-padding awards-list-section  home-index">
    <div class="container">
        <div class="awards-list-section-inner">
            <div class="awards-list-section-inner-heading">
                <div class="testimonials-list-section-inner-heading-left">
                    <span><?php echo get_field('section_12_title'); ?></span>
                </div>
                <div class="testimonials-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_12_heading'); ?> <span> <?php echo get_field('section_12_color_text'); ?></span></h2>
                </div>
            </div>
            <div class="awards-list-section-inner-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <img src="<?php echo get_field('section_12_image'); ?>" alt="Raumplus India Awards"
                            class="rounded img-fluid">
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="carousel-wrapper">
                            <div class="awards-carousel owl-carousel" id="awardCarousel">
                                <div class="slide-unit">
                                    <div class="row">
                                        <?php
                                        if (have_rows('section_12_listing')) {
                                            while (have_rows('section_12_listing')) {
                                                the_row(); ?>
                                                <div class="col-4 image-container">
                                                    <div class="image-container-inner">
                                                        <img src="<?php echo get_sub_field('section_12_listing_image'); ?>" alt="Award 1">
                                                        <div class="overlay-text">
                                                            <p><strong>2025<br> Winner German Design Award</strong></p>
                                                            <p>Pivot Door S1200</p>
                                                            <p>Winner in the Product Design 2025 category</p>
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
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding testimonials-section light_grey">
    <div class="container">
        <div class="testimonials-section-inner">
            <div class="testimonials-list-section-inner-heading">
                <div class="testimonials-list-section-inner-heading-left">
                    <span><?php echo get_field('section_13_title'); ?></span>
                </div>
                <div class="testimonials-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_13_heading'); ?> <span> <?php echo get_field('section_13_color_text'); ?></span></h2>
                </div>
            </div>
            <div id="testimonials_owl" class="testimonials-list-section-inner-body">
                <?php
                $args = array(
                    'post_type'      => 'testimonials',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'testimonial_category',
                            'field'    => 'slug',
                            'terms'    => 'home',
                        ),
                    ),
                );
                $testimonials = new WP_Query($args);

                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                        $gender = get_field('reviewer_gender');
                        $rating = get_field('review_rating');
                ?>
                        <div class="testimonials-list-section-inner-box">
                            <div class="tesM-list-section-i-box-top">
                                <figure>
                                    <iframe width="853" height="480" src="https://www.youtube.com/embed/FggHnYNvbjk" title="Product series: Sliding door system Facet" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </figure>
                            </div>
                            <div class="tesM-list-section-i-box-bottom">
                                <div class="tesM-list-section-i-box-bottom-p">
                                    <div class="e-rating-wrapper">
                                        <?php
                                        if ($rating) {
                                            $rating = intval($rating); // ensure it's a number
                                            for ($i = 1; $i <= 5; $i++) {
                                                $filled = $i <= $rating ? 'filled' : '';
                                        ?>
                                                <span class="start-inner <?php echo $filled; ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                                        <path d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                                                    </svg>
                                                </span>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>


                                    <p>
                                        <?php echo get_field('reveiwer_description'); ?></p>
                                    <div class="tesM-profile-bottom">
                                        <div class="tesM-profile-bottom-left">
                                            <?php
                                            if ($gender == 'Male') { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Male.jpg" alt="">
                                            <?php } else if ($gender == 'Female') { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Female.jpg" alt="">
                                            <?php }
                                            ?>

                                        </div>
                                        <div class="tesM-profile-bottom-right">
                                            <span class="name"><?php echo get_field('reveiwer_name'); ?></span>
                                            <span class="job"> <?php echo get_field('reveiwer_title'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<section class="section-padding map-view-box-sectiob ">
    <div class="container   ">
        <div class="map-list-section-inner">
            <div class="blog-list-section-inner-heading">
                <div class="blog-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_14_heading'); ?> <span> <?php echo get_field('section_14_color_text'); ?> </span></h2>
                </div>
                <?php echo get_field('section_14_description'); ?>
            </div>
            <div id="map">
            </div>
        </div>
    </div>
</section>

<section class="section-padding blog-list-section light_grey">
    <div class="container">
        <div class="blog-list-section-inner">
            <div class="blog-list-section-inner-heading">
                <div class="blog-list-section-inner-heading-left">
                    <span><?php echo get_field('section_15_title'); ?></span>
                </div>
                <div class="blog-list-section-inner-heading-right">
                    <h2><?php echo get_field('section_15_heading'); ?> <span> <?php echo get_field('section_15_color_text'); ?> </span></h2>
                </div>
            </div>
            <div class="blog-list-section-inner-body">
                <div class="blog-list-section-inner-box">
                    <div class="blog-list-section-inner-box-top">
                        <div class="cateogry_list">
                            <a href="">
                                <span class="category_name">Minimalist Style</span>
                            </a>
                        </div>
                        <a href="" class="">
                            <picture>
                                <img src="https://demo.raumplus.co.in/images/product-img/walls/partition-wall.png"
                                    alt="">
                            </picture>
                        </a>
                    </div>
                    <div class="blog-list-section-inner-box-bottom">
                        <span class="authur_name">By <a href="">Admin</a></span>
                        <h3>
                            <a href="" class="">
                                Minimal Design, Maximum
                            </a>
                        </h3>
                        <p>Discover how minimalist design can make your home feel spacious and serene. Learn how to
                            balance simplicity with style in every corner.</p>
                    </div>
                </div>
                <div class="blog-list-section-inner-box">
                    <div class="blog-list-section-inner-box-top">
                        <div class="cateogry_list">
                            <a href="">
                                <span class="category_name">Budget Decor</span>
                            </a>
                        </div>
                        <a href="" class="">
                            <picture>
                                <img src="https://demo.raumplus.co.in/images/product-img/walls/partition-wall.png"
                                    alt="">
                            </picture>
                        </a>
                    </div>
                    <div class="blog-list-section-inner-box-bottom">
                        <span class="authur_name">By <a href="">Admin</a></span>
                        <h3>
                            <a href="" class="">
                                Budget-Friendly Decor Ideas
                            </a>
                        </h3>
                        <p>Get creative with affordable decor ideas that make a big impact. These easy hacks will
                            refresh your space while saving money.</p>
                    </div>
                </div>
                <div class="blog-list-section-inner-box">
                    <div class="blog-list-section-inner-box-top">
                        <div class="cateogry_list">
                            <a href="">
                                <span class="category_name">Color Psychology</span>
                            </a>
                        </div>
                        <a href="" class="">
                            <picture>
                                <img src="https://demo.raumplus.co.in/images/product-img/walls/partition-wall.png"
                                    alt="">
                            </picture>
                        </a>
                    </div>
                    <div class="blog-list-section-inner-box-bottom">
                        <span class="authur_name">By <a href="">Admin</a></span>
                        <h3>
                            <a href="" class="">
                                Power of Color Psychology
                            </a>
                        </h3>
                        <p>Discover how minimalist design can make your home feel spacious and serene. Learn how to
                            balance simplicity with style in every corner.</p>
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
                    <span> <?php echo get_field('section_16_title'); ?></span>
                </div>
                <div class="form-section-h2">
                    <h2><?php echo get_field('section_16_heading'); ?> <span><?php echo get_field('section_16_color_text'); ?> </span> <?php echo get_field('section_16_normal_text'); ?> </h2>
                </div>
                <div class="form-section-p">
                    <p><?php echo get_field('section_16_subheading'); ?></p>
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