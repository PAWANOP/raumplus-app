<?php
get_header('header');
/*
Template Name: Contact us
*/
?>
<!-- Hero Slider -->
<div id="aboutUsContainer" class="aboutUsContainer" style="background-image: url('<?php echo get_field('banner_image'); ?>');">
    <div class="heading-top">

    </div>
</div>
<section class="section-padding contactUs-section ">
    <div class="container">
        <div class="breadcrumb-link">
            <ul>
                <li><a href>Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
        <div class="contactUs-section-inner">
            <div class="contact-info-inner-bottom">
                <div class="contact-info-inner-bottom-left ">
                    <div class="testimonials-list-section-inner-heading">
                        <div
                            class="testimonials-list-section-inner-heading-left">
                            <span><?php echo get_field('section_1_title'); ?></span>
                        </div>
                        <div
                            class="testimonials-list-section-inner-heading-right">
                            <?php echo get_field('section_1_description'); ?>
                        </div>
                    </div>
                    <div class="contact-info-inner-middle">
                        <div class="contact-info-inner-middle-box">
                            <?php
                            if (have_rows('section_1_listing')) {
                                while (have_rows('section_1_listing')) {
                                    the_row(); ?>
                                    <div
                                        class="contact-box  contact-info-inner-middle-1 light_grey">
                                        <span>
                                            <img style="width: 30px;" src="<?php echo get_sub_field('section_1_listing_icon'); ?>" alt="">
                                        </span>
                                        <div class="contact-info-address">
                                            <h3><?php echo get_sub_field('section_1_listing_title'); ?></h3>
                                            <p><?php echo get_sub_field('section_1_listing_description'); ?></p>
                                        </div>
                                    </div>
                            <?php }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="contact-info-follow-us">
                        <h5><?php echo get_field('section_2_title'); ?></h5>
                        <div class="contact-info-follow-us-inner">
                            <a class="facebook-a"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z" />
                                </svg></a>
                            <a class="insta-a"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z" />
                                </svg></a>
                            <a class="twitter-a"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M453.2 112L523.8 112L369.6 288.2L551 528L409 528L297.7 382.6L170.5 528L99.8 528L264.7 339.5L90.8 112L236.4 112L336.9 244.9L453.2 112zM428.4 485.8L467.5 485.8L215.1 152L173.1 152L428.4 485.8z" />
                                </svg></a>
                            <a class="youtube-a"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M581.7 188.1C575.5 164.4 556.9 145.8 533.4 139.5C490.9 128 320.1 128 320.1 128C320.1 128 149.3 128 106.7 139.5C83.2 145.8 64.7 164.4 58.4 188.1C47 231 47 320.4 47 320.4C47 320.4 47 409.8 58.4 452.7C64.7 476.3 83.2 494.2 106.7 500.5C149.3 512 320.1 512 320.1 512C320.1 512 490.9 512 533.5 500.5C557 494.2 575.5 476.3 581.8 452.7C593.2 409.8 593.2 320.4 593.2 320.4C593.2 320.4 593.2 231 581.8 188.1zM264.2 401.6L264.2 239.2L406.9 320.4L264.2 401.6z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="contact-info-inner-bottom-right light_grey">
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
    </div>
</section>

<div class="map-view-info-section">
    <div class="container">
        <div class="responsive-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.0933424417094!2d72.8844293746713!3d19.32751154402959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7af13fa0ac50b%3A0x93a129f67b05311c!2sraumplus%20Partners%20Saviesa%20%E2%80%93%20Modular%20Kitchen%20%26%20Wardrobe%20Designers%2C%20Sliding%20%26%20Partition%20Systems%20%7C%20Mumbai%2C%20India!5e1!3m2!1sen!2sin!4v1755176354386!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<?php
get_footer('footer');
?>