<?php
get_header('header');
?>
<!-- Hero Slider -->
<section id="aboutUsContainer" class="aboutUsContainer blogDetailBanner" style="background-image: url('<?php echo get_field('banner_image'); ?>');">
    <div class="heading-top">

    </div>
</section>

<div class="container">
    <div class="breadcrumb-link">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Blog</a></li>
            <li>Blog Detail</li>
        </ul>
    </div>
</div>

<section class="section-padding blog-detail-parent">
    <div class="container">
        <div class="blog-list-section-parent-box">
            <div class="left-blog-box">
                <article>
                    <div class="article-header">
                        <div class="article-header-top">
                            <div class="b-cateogry">
                                <a>Power Tools</a>
                            </div>
                            <div class="b-date">
                                <span><?php echo get_the_date(); ?></span>
                            </div>
                            <div class="b-auhor-nae">
                                By <a><?php the_author(); ?></a>
                            </div>
                        </div>
                        <div class="article-header-bottom">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="article-body">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="article-body-images">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        <?php endif; ?>
                        <?php the_content(); ?>
                    </div>
                    <div class="article-form">

                    </div>
                    <div class="article-faq">
                        <h3>Faq</h3>
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

                            </ul>
                        </div>
                    </div>
                    <div class="article-social">
                        <div class="sharer-wrapper">
                            <ul class="sharer-list">
                                <li class="sharer-item"><a target="_blank" class="sharer-item-facebook"><span class="sharer-icon facebook-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                                <path d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z" />
                                            </svg></span><span class="sharer-name">Facebook</span></a></li>
                                <li class="sharer-item"><a target="_blank" class="sharer-item-linkedin"><span class="sharer-icon linkedin-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                                <path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z" />
                                            </svg></span><span class="sharer-name">LinkedIn</span></a></li>
                                <li class="sharer-item"><a target="_blank" class="sharer-item-pinterest"><span class="sharer-icon pinterest-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                                <path d="M332 70.5C229.4 70.5 128 138.9 128 249.6C128 320 167.6 360 191.6 360C201.5 360 207.2 332.4 207.2 324.6C207.2 315.3 183.5 295.5 183.5 256.8C183.5 176.4 244.7 119.4 323.9 119.4C392 119.4 442.4 158.1 442.4 229.2C442.4 282.3 421.1 381.9 352.1 381.9C327.2 381.9 305.9 363.9 305.9 338.1C305.9 300.3 332.3 263.7 332.3 224.7C332.3 158.5 238.4 170.5 238.4 250.5C238.4 267.3 240.5 285.9 248 301.2C234.2 360.6 206 449.1 206 510.3C206 529.2 208.7 547.8 210.5 566.7C213.9 570.5 212.2 570.1 217.4 568.2C267.8 499.2 266 485.7 288.8 395.4C301.1 418.8 332.9 431.4 358.1 431.4C464.3 431.4 512 327.9 512 234.6C512 135.3 426.2 70.5 332 70.5z" />
                                            </svg></span><span class="sharer-name">Pinterest</span></a></li>
                                <li class="sharer-item"><a target="_blank" class="sharer-item-twitter"><span class="sharer-icon twitter-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                                <path d="M453.2 112L523.8 112L369.6 288.2L551 528L409 528L297.7 382.6L170.5 528L99.8 528L264.7 339.5L90.8 112L236.4 112L336.9 244.9L453.2 112zM428.4 485.8L467.5 485.8L215.1 152L173.1 152L428.4 485.8z" />
                                            </svg></span><span class="sharer-name">Twitter</span></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
            <div class="right-blog-box">
                <div class="right-side-CTA">
                    <div class="right-side-CTA-inner">
                        <h4>Your home needs a makeover?</h4>
                        <p>Our designers can help!</p>
                        <a href="#" id="call_action" class="btn_1">
                            <span class="btn-inner">
                                <span class="text-span">Book now</span>
                                <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z" />
                                    </svg></span>
                            </span>
                        </a>
                    </div>
                </div>
                <h2>Recent Post</h2>
                <div class="recent-blog-list-parent">
                    <?php
                    $recent_posts = new WP_Query(array(
                        'post_type'      => 'post',
                        'posts_per_page' => 5,
                        'post_status'    => 'publish'
                    ));

                    if ($recent_posts->have_posts()) :
                        while ($recent_posts->have_posts()) : $recent_posts->the_post();
                    ?>
                            <div class="recent-blog-list">
                                <div class="recent-blog-list-left">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="recent-blog-list-right">
                                    <span><?php echo get_the_date(); ?></span>
                                    <h3>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>

                <h2 class="popular_category_h3">Popular Categories</h2>
                <div class="popular-category">
                    <div class="popular-category-list">
                        <?php
                        $categories = get_categories(array(
                            'orderby' => 'count',   // popularity
                            'order'   => 'DESC',
                            'number'  => 5
                        ));

                        foreach ($categories as $category) :
                        ?>
                            <div class="popular-category-list-box">
                                <a href="<?php echo get_category_link($category->term_id); ?>">
                                    <h3><?php echo esc_html($category->name); ?></h3>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <h2 class="popular_category_h3">Browse By All Topics</h2>
                <div class="faq-question-section-body-first-bottom">
                    <ul>
                        <li>
                            <a href="#" class="faq-question-header">Rooms</a>
                            <div class="faq-question-body">
                                <a href="">Balcony</a>
                                <a href="">Bathroom</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="faq-question-header">Rooms</a>
                            <div class="faq-question-body">
                                <a href="">Balcony</a>
                                <a href="">Bathroom</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="faq-question-header">Rooms</a>
                            <div class="faq-question-body">
                                <a href="">Balcony</a>
                                <a href="">Bathroom</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="faq-question-header">Rooms</a>
                            <div class="faq-question-body">
                                <a href="">Balcony</a>
                                <a href="">Bathroom</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="action-view-box">
                    <div class="action-view-box-body">
                        <form>
                            <div class="form-label-div">
                                <label for="">Full Name</label>
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="form-label-div">
                                <label for="">Email Address *</label>
                                <input type="text" placeholder="Email Address">
                            </div>
                            <div class="form-label-div">
                                <label for="">Phone *</label>
                                <input type="text" placeholder="Phone">
                            </div>
                            <div class="form-label-div">
                                <label for="">Your Location *</label>
                                <input type="text" placeholder="Your Location">
                            </div>
                            <div class="form-label-div">
                                <label for="">Your Message*</label>
                                <textarea cols="40" rows="4" type="text" placeholder="Type Your Message"></textarea>
                            </div>
                            <div class="form-label-submit">
                                <button href="" class="btn_1">
                                    <span class="btn-inner">
                                        <span class="text-span">Book Now</span>
                                        <span class="svg-span"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"></path>
                                            </svg></span>
                                    </span>
                                </button>
                            </div>
                            <div class="form-label-bottom">
                                <p>By submitting this form, you agree to the <a href=""> privacy policy</a> &amp; <a href="">terms and conditions</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding blog-list-popular-parent p_t">
    <div class="container">
        <div class="popular-blog">
            <h2>Related Blogs </h2>
            <?php
            $current_post_id = get_the_ID();
            $categories = wp_get_post_categories($current_post_id);

            if ($categories) :

                $related_posts = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,          // number of related posts
                    'post__not_in'   => array($current_post_id),
                    'category__in'   => $categories,
                    'orderby' => 'date',
                    'order'   => 'DESC'

                ));

                if ($related_posts->have_posts()) :
            ?>
                    <section class="section-padding blog-list-popular-parent p_t">
                        <div class="container">
                            <div class="popular-blog">
                                <h2>Related Blogs</h2>

                                <div class="blog-list-section-inner-body">
                                    <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                                        <div class="blog-list-section-inner-box">

                                            <div class="blog-list-section-inner-box-top">
                                                <div class="cateogry_list">
                                                    <?php
                                                    $post_cats = get_the_category();
                                                    if (!empty($post_cats)) :
                                                    ?>
                                                        <a href="<?php echo get_category_link($post_cats[0]->term_id); ?>">
                                                            <span class="category_name"><?php echo esc_html($post_cats[0]->name); ?></span>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>

                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('medium'); ?>
                                                    <?php endif; ?>
                                                </a>
                                            </div>

                                            <div class="blog-list-section-inner-box-bottom">
                                                <span class="authur_name">
                                                    By <a><?php the_author(); ?></a>
                                                </span>

                                                <h3>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>

                                                <p>
                                                    <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                                                </p>
                                            </div>

                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </section>
            <?php
                endif;
                wp_reset_postdata();
            endif;
            ?>

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