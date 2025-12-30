<?php
get_header('header');
/*
Template Name: terms & condition
*/
?>
<!-- Hero Slider -->
<section id="aboutUsContainer" class="aboutUsContainer">
    <div class="heading-top">
    </div>
</section>
<div class="container">
    <div class="breadcrumb-link">
        <ul>
            <li><a href="">Home</a></li>
            <li>Terms & Conditions</li>
        </ul>
    </div>
</div>

<section class="section-padding terms-and-condition-parent">
    <div class="container">
        <?php the_content(); ?>
    </div>
</section>
<?php
get_footer('footer');
?>